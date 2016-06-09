<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {


	/**
	 * [$uses description]
	 * @var array
	 */
  public $uses = array(
  	'User',
  	'ArosAco',
  	'Career',
  	'Client',
  	'Employee',
  	'EmployeeGroup',
  	'GoalSetting',
  	'GoalType',
  	'MosaicType',
  	'MosaicSize',
  	'Order',
  	'PayCutType',
  	'StatusType',
  	'TimeCard',
  	'TodoList',
  	'TaskRecord',
  	'UserRole',
  );
  public $components = array('Session', 'Paginator', 'Auth',);
  public $helpers    = array('Form', 'Html', 'Btn');


/**
 * [_getGoal description]
 * @param  [type] $goalTypeId [description]
 * @return [type]             [description]
 * 月間目標取得
 */
	public function _getGoal($goal_type_id){

		$this_month_first_day = $this->GetDate->_get_first_day();

		if($goal_type_id == 1){ //team
			$team_goal_value = '';

			//Monthly team goalをDBから取得
			$team_goal_info_array = $this->GoalSetting->get_goal_info($this_month_first_day, $goal_type_id);

			if(isset($team_goal_info_array)){
        $team_goal_value_id         = $team_goal_info_array['goal_id'];
        $team_goal_value            = $team_goal_info_array['goal_value'];
        $team_goal_value_formated   = number_format($team_goal_value);
        $team_goal_value_form       = $team_goal_value;
				$this->set(compact(
					'team_goal_value_formated',
					'team_goal_value_form',
					'team_goal_value_id'
					));
			} else {
				$this->set('team_goal_value_formated', __('Set Target'));
				$this->set('team_goal_value_form',		 '1000000');
			}
		}


		if($goal_type_id == 2){  //individual
			$indivisual_goal_value = '';

			$indivisual_goal_value = $this->GoalSetting->get_goal_info($this_month_first_day, $goal_type_id);

			if($indivisual_goal_value){
        $indivisual_goal_value_id         = $indivisual_goal_value['goal_id'];
        $indivisual_goal_value            = $indivisual_goal_value['goal_value'];
        $indivisual_goal_value_formated   = number_format($indivisual_goal_value);
        $indivisual_goal_value_form       = $indivisual_goal_value;
				$this->set(compact(
					'indivisual_goal_value_formated',
					'indivisual_goal_value_form',
					'indivisual_goal_value_id'
				));
			} else {
				$this->set('indivisual_goal_value_formated', 	__('Set target'));
				$this->set('indivisual_goal_value_form', 			'120000');
			}
		}
	}

/**
 * [_getOrderList description]
 * @return [type] [description]
 */
	public function _getOrderList(){
		$this->Order->recursive = 0;

		//サブクエリ設定
		$db = $this->TaskRecord->getDataSource();
		$subQuery = $db->buildStatement(
			array(
				'table' => $db->fullTableName($this->TaskRecord),
				'alias' => 'TaskRecord',
				'fields' => array('order_id', 'MIN(started) as "started"', 'MAX(completed) as "completed"'),
				'group' => 'order_id'
				),
			$this->TaskRecord
			);

		$db_normal = $this->Order->getDataSource();
		$subQuery_normal = $db_normal->buildStatement(
			array(
				'table' => $db_normal->fullTableName($this->Order),
				'alias' => 'Avg',
				'fields' => array('length', 'AVG(worktime) as "worktime"', 'count(id) as "count"'),
				'conditions' => array('mosaic_type_id' => 1),
				'group' => 'length'
				),
			$this->Order
			);

		$db_cs = $this->Order->getDataSource();
		$subQuery_cs = $db_cs->buildStatement(
			array(
				'table' => $db_cs->fullTableName($this->Order),
				'alias' => 'AvgCs',
				'fields' => array('length', 'AVG(worktime) as "worktime"', 'count(id) as "count"'),
				'conditions' => array('mosaic_type_id' => 2),
				'group' => 'length'
				),
			$this->Order
			);

		$options = array(
			'joins' => array(
				array(
					'table' => "({$subQuery})",
					'alias' => 'TaskRecord',
					'type' => 'LEFT',
					'conditions' => 'TaskRecord.order_id = Order.id'
					),
				array(
					'table' => "({$subQuery_normal})",
					'alias' => 'Avg',
					'type' => 'LEFT',
					'conditions' => 'Order.length = Avg.length'
					),
				array(
					'table' => "({$subQuery_cs})",
					'alias' => 'AvgCs',
					'type' => 'LEFT',
					'conditions' => 'Order.length = AvgCs.length'
					)
				),
			'fields' => array(
				'id',
				'control_no',
				'file_name',
				'Client.client',
				'Client.quality',
				'delivery_date',
				'delivery_time',
				'MosaicType.mosaic_type',
				'MosaicSize.mosaic_size',
				'price',
				'length',
				'note',
				'Order.completed',
				'status_type_id',
				'StatusType.status',
				'TaskRecord.started',
				'TaskRecord.completed',
				'Avg.worktime',
				'AvgCs.worktime'
				),
			'conditions' => array('Order.status_type_id !=' => 3),
			'order' => array('Order.delivery_date' => 'ASC'),
			'group' => 'id'
			);
		$orderList = $this->Order->find('all', $options);
		$this->set(compact('orderList'));
	}


/**
 * [dashboard description]
 * @param  [type] $id [description]
 * @return [type]     [description]
 */
	public function dashboard(){

		$this->User->recursive = 0;
		$this->set('users', $this->paginate());

		//Monthly goalを取得
		$this->_getGoal($goalTypeId = 1);
		$this->_getGoal($goalTypeId = 2);

		//現在の実績をOrderから取得
		$this->set('current_point', $this->Order->get_current_team_point($this->GetDate->_get_first_day(), $this->GetDate->_get_last_day()));

		//Order Form用ClientListを取得
		$this->set('clientList', $this->Client->get_client_list());

		//Mosaic Size * Type Listを取得
		$this->set('mosaicSizeList', $this->MosaicSize->get_mosaic_size_list());
		$this->set('mosaicTypeList', $this->MosaicType->get_mosaic_type_list());

		//現在のオーダー状況Order Listを取得
		$this->_getOrderList();
		//$this->set('orderList', $this->Order->get_order_list()); //サブクエリでつんだ。一旦回避

		//Time Card用にEmployee Listを取得
		$this->set('employeeList',$this->Employee->get_employee_list());
		$this->set('payCutTypeList',$this->PayCutType->get_pay_cut_type_list());

		//Todo List取得
		$this->set('todos',$this->TodoList->find('all', array('order' => array('deadline' => 'asc'))));

		$this->set('timeCardList', $this->TimeCard->get_time_card_list($this->GetDate->_get_first_day(), $this->GetDate->_get_last_day()));


		//$userにログインしているユーザー情報を格納
		$user = $this->Auth->user();
		switch ($user['user_role_id']) {
			case 3:
			case 5:
				$this->render('dashboard_ja');
		}
	}


/**
 * Acl_add description
 * @param  [type] $id [description]
 * @return [type]     [description]
 */
	public function acl_add($id=null) {
		$this->layout = 'cake-default';

		if($this->request->is('post')) {
			$aro = $this->User->UserRole;
			$aro->id  = $this->request->data['Acl']['user_role_id'];
      $aco      = $this->request->data['Acl']['aco'];
      $create   = $this->request->data['Acl']['create'];
      $read     = $this->request->data['Acl']['read'];
      $update   = $this->request->data['Acl']['update'];
      $delete   = $this->request->data['Acl']['delete'];

			//パーミッションの設定
			$this->Acl->$create($aro,$aco,'create');
			$this->Acl->$read($aro,$aco,'read');
			$this->Acl->$update($aro,$aco,'update');
			$this->Acl->$delete($aro,$aco,'delete');
			//リストAclに移動
		$this->redirect('../arosacos/index');

		}

		$userRoles = $this->User->UserRole->find('list');
		$userRolesValue = $this->User->UserRole->find('list', array('fields' => 'role'));
		$aros = $this->ArosAco->Aro->find('list');
		$this->set(compact('aros'));
		$this->set(compact('userRoles', 'userRolesValue'));
	}

	/**
	 * ACL編集用のアクション
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function acl_edit($id=null) {
		if($this->request->is('post')){
      $aro      = $this->User->UserRole;
      $aro->id  = $this->request->data['ArosAco']['aro_id'];
      $aco      = $this->request->data['ArosAco']['aco_id'];
      $create   = $this->request->data['ArosAco']['create'];
      $read     = $this->request->data['ArosAco']['read'];
      $update   = $this->request->data['ArosAco']['update'];
      $delete   = $this->request->data['ArosAco']['delete'];

			//パーミッションの設定
			$this->Acl->$create($aro,$aco,'create');
			$this->Acl->$read($aro,$aco,'read');
			$this->Acl->$update($aro,$aco,'update');
			$this->Acl->$delete($aro,$aco,'delete');

			//リストAclに移動
			$this->redirect('../arosacos/index');
		}

		$userRoles = $this->User->UserRole->find('list');
		$this->set(compact('userRoles'));
	}


	public function register(){
		$this->layout = '';
		$userRolesKey = $this->User->UserRole->find('list');
		$userRolesValue = $this->User->UserRole->find('list', array('fields' => 'role'));
		$this->set(compact('userRolesKey', 'userRolesValue'));
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->layout = 'cake-default';
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());

	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->layout = 'cake-default';
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout = 'cake-default';
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('The user has been saved.', 'flash_success');
				return $this->redirect(array('action' => 'login'));
			} else {
				$this->Session->setFlash('The user could not be saved. Please, try again.', 'flash_failure');
			}
		}
		$userRoles = $this->User->UserRole->find('list');
		$this->set(compact('userRoles'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->layout = 'cake-default';
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$userRoles = $this->User->UserRole->find('list');
		$this->set(compact('userRoles'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->layout = 'cake-default';
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash('The user could not be deleted. Please, try again.', 'flash_failure');
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function login() {
		$this->layout = '';
    if ($this->request->is('post')) {
        if ($this->Auth->login()) {
            return $this->redirect($this->Auth->redirect());
        }
        $this->Session->setFlash('Your username or password was incorrect.', 'flash_failure');
    }
	}

	public function logout() {
		$this->redirect($this->Auth->logout());
	}
}
