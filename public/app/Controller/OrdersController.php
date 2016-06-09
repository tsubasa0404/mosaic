<?php
App::uses('AppController', 'Controller');
/**
 * Orders Controller
 *
 * @property Order $Order
 * @property PaginatorComponent $Paginator
 */
class OrdersController extends AppController {

/**
 * Components
 *
 * @var array
 */
  public $uses        = array(
  	'User',
  	'Order',
  	'MosaicType',
  	'MosaicSize',
  	'Client',
  	'StatusType',
  	'TaskRecord',
  	'Employee');
  public $components  = array('Paginator', 'Session', 'Auth');
  public $helpers     = array('Form', 'Html');


/**
 * [detail description]
 * @param  [type] $id [description]
 * @return [type]     [description]
 */
	public function detail($order_id = null) {

		if (!$this->Order->exists($order_id)) {
			throw new NotFoundException(__('Invalid order'));
		}

		//Order information Table用に情報取得
    $taskRecordList                   = $this->TaskRecord->get_task_record($order_id);
    $startedCompletedOvertimeWorktime = $this->TaskRecord->get_started_completed_overtime_worktime($order_id);

		//Assign Form用にemployee情報を取得
		$employeeList = $this->Employee->get_employee_list();
		$jsonEmployeeList = json_encode($employeeList);

		//edit lengthのSumを取得
		$sum_editLength = $this->TaskRecord->get_sum_edit_length($order_id);

		//Clip_noを決めるためにAssignされたTaskの数を取得
		$taskRecordCount = $this->TaskRecord->get_task_record_count($order_id);

		//変数に格納してページに渡す
		$this->set(compact(
			'startedCompletedOvertimeWorktime',
			'employeeList',
			'jsonEmployeeList',
			'taskRecordList',
			'taskRecordCount',
			'sum_editLength'));

		$options = array('conditions' => array('Order.' . $this->Order->primaryKey => $order_id));
		$this->set('order', $this->Order->find('first', $options));
		$this->set(compact('order_id'));

		//$userにログインしているユーザー情報を格納
		$user = $this->Auth->user();
		$this->set(compact('user'));

		//日本語対応
		switch ($user['user_role_id']) {
			case 3:
			case 5:
				$this->render('detail_ja');
		}

	}



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
				'worktime',
				'note',
				'Order.completed',
				'status_type_id',
				'StatusType.status',
				'TaskRecord.started',
				'TaskRecord.completed',
				'Avg.worktime',
				'AvgCs.worktime'
				),
			//'conditions' => array('Order.status_type_id !=' => 3),
			'order' => array('Order.delivery_date' => 'Desc'),
			'group' => 'id'
			);
		$orderList = $this->Order->find('all', $options);
		$this->set(compact('orderList'));
	}


	public function order_list() {

		$this->_getOrderList();

		//$userにログインしているユーザー情報を格納
		$user = $this->Auth->user();
		$this->set(compact('user'));
		//日本語対応
		switch ($user['user_role_id']) {
			case 3:
			case 5:
				$this->render('order_list_ja');
		}
	}




/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Order->recursive = 0;
		$this->set('orders', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Order->exists($id)) {
			throw new NotFoundException(__('Invalid order'));
		}
		$options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
		$this->set('order', $this->Order->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Order->create();
			if ($this->Order->save($this->request->data)) {
				$this->Session->setFlash('オーダーを受け付けました。', 'flash_success');
				return $this->redirect(array('controller' => 'users','action' => 'dashboard'));
			} else {
				$this->Order->set($this->request->data);
				$this->Order->validates();
				$this->Session->setFlash('オーダーを受け付けられませんでした。', 'flash_failure');
				return $this->redirect($this->referer());
			}
		}
		$clients = $this->Order->Client->find('list');
		$mosaicTypes = $this->Order->MosaicType->find('list');
		$mosaicSizes = $this->Order->MosaicSize->find('list');
		$statusTypes = $this->Order->StatusType->find('list');
		$this->set(compact('clients', 'mosaicTypes', 'mosaicSizes', 'statusTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->_setUser();
		if (!$this->Order->exists($id)) {
			throw new NotFoundException(__('Invalid order'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Order->save($this->request->data)) {
				$this->Session->setFlash('The order has been saved.', 'flash_success');
				return $this->redirect(array('action' => 'detail/'.$id));
			} else {
				$this->Session->setFlash('The order could not be saved. Please, try again.', 'flash_failure');
			}
		} else {
			$options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
			$this->request->data = $this->Order->find('first', $options);
		}
		$clients = $this->Client->get_client_option();
		$mosaicTypes = $this->MosaicType->get_mosaic_type_list();
		$mosaicSizes = $this->MosaicSize->get_mosaic_size_list();
		$statusTypes = $this->StatusType->get_status_type_list();
		$this->set(compact('clients', 'mosaicTypes', 'mosaicSizes', 'statusTypes'));
	}

	public function task_completed($id = null) {
		$this->_setUser();
		if (!$this->Order->exists($id)) {
			throw new NotFoundException(__('Invalid order'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Order->save($this->request->data)) {
				$this->Session->setFlash('The order has been Completed.', 'flash_success');
				return $this->redirect(array('controller' => 'users', 'action' => 'dashboard'));
			} else {
				$this->Session->setFlash('The order could not be saved. Please, try again.', 'flash_failure');
			}
		} else {
			$options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
			$this->request->data = $this->Order->find('first', $options);
		}
		$clients = $this->Order->Client->find('list');
		$mosaicTypes = $this->Order->MosaicType->find('list');
		$mosaicSizes = $this->Order->MosaicSize->find('list');
		$statusTypes = $this->Order->StatusType->find('list');
		$this->set(compact('clients', 'mosaicTypes', 'mosaicSizes', 'statusTypes'));
	}


/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Order->id = $id;
		if (!$this->Order->exists()) {
			throw new NotFoundException(__('Invalid order'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Order->delete()) {
			$this->Session->setFlash(__('The order has been deleted.'));
		} else {
			$this->Session->setFlash(__('The order could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
