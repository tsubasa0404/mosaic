<?php
App::uses('AppController', 'Controller');
/**
 * Employees Controller
 *
 * @property Employee $Employee
 * @property PaginatorComponent $Paginator
 */
class EmployeesController extends AppController {


public $uses = array(
  	'User',
  	'Career',
  	'Employee',
  	'EmployeeGroup',
  	'GoalSetting',
  	'GoalType',
    'MosaicSize',
    'MosaicType',
    'Order',
    'PayCutType',
    'Salary',
  	'TimeCard',
  	'TaskRecord',
  	'UserRole',
  );
  public $components = array('Session', 'Paginator', 'Auth',);
  public $helpers    = array('Form', 'Html', 'Btn');

  /**
   * [team_members description]
   * @return [type] [description]
   * スタッフ一覧ページ表示
   */
  public function team_members(){

  	//Member登録フォーム用
      //Careerリスト取得
      $careerList = $this->Career->optionCareers();
      $careerList = Hash::combine($careerList, '{n}.Career.id', '{n}.Career.career');
      $employee_group_option = $this->EmployeeGroup->optionGroupManagers();



  	//表示用EmployeeList取得
  	$employeeList = $this->Employee->get_team_member_list();



  	$this->set(compact('careerList', 'employeeList', 'last_id', 'employee_group_option'));
  }

/**
 * [profile description]
 * @param  [type] $id    [description]
 * @param  [type] $year  [description]
 * @param  [type] $month [description]
 * @return [type]        [description]
 * プロフィールページ表示
 */
  public function profile($id, $year=null, $month=null){
  	if (!$this->Employee->exists($id)) {
			throw new NotFoundException(__('Invalid Member'));
		}
    //Urlで指定された日時の取得
      $dateArray = $this->_setYearMonth($year, $month);
      $first_day = $dateArray[2];
      $last_day  = $dateArray[3];

		  $employeeProf  = $this->Employee->get_employee_prof($id);

    //TimeCardタブ用データ
      $timeCards      = $this->TimeCard->get_time_card(  $id, $first_day, $last_day);
      $totalTimeCard  = $this->TimeCard->get_time_card_count_items($id, $first_day, $last_day);
      $lateMinutes    = $this->_calcMinutes(  $id, $first_day, $last_day, 'in_time');
      $outMinutes     = $this->_calcMinutes(  $id, $first_day, $last_day, 'out_time');

    //WorkRecordタブ用データ
      $normal             = $this->TaskRecord->get_individual_record($id, $first_day, $last_day, 1);
      $cs                 = $this->TaskRecord->get_individual_record($id, $first_day, $last_day, 2);
      $total              = $this->TaskRecord->get_individual_record($id, $first_day, $last_day, array(1,2));
      $individualTaskList = $this->TaskRecord->get_individual_task_record_list($id, $first_day, $last_day);

    //Salary Sheetタブ用データ
      $salaryList = $this->Salary->get_individual_salary_list($id);

    //Graph用データ
      $pricePerHourNormal = $this->_create_price_per_hour_graph_json_data($id, 1);
      $pricePerHourCs = $this->_create_price_per_hour_graph_json_data($id, 2);

    $this->set(compact(
      'employeeProf','dateArray', 'lateMinutes', 'outMinutes', 'normal', 'cs', 'total', 'individualTaskList', 'salaryList', 'pricePerHourNormal', 'pricePerHourCs','timeCards', 'totalTimeCard'));
  }

/**
 * [_create_price_per_hour_graph_json_data description]
 * @param [type] $mosaic_type_id [description]
 * グラフ用時間あたり売上データ取得
 */
  public function _create_price_per_hour_graph_json_data($id,$mosaic_type_id){
    $pricePerHour = $this->TaskRecord->get_price_per_hour_graph_data($id, $mosaic_type_id);
    $data_array = array();
    foreach($pricePerHour as $key => $val){
      $ym           = $val[0]['ym'];
      $y            = mb_substr($ym, 0, 4);
      $m            = mb_substr($ym, 4, 2);
      $sumPrice     = $val[0]['sumPrice'];
      $sumWorktime  = $val[0]['sumWorktime'];
      $data         = "[gd(" .$y. ",1," . $m . ")," .mb_substr(((int)$sumPrice/(float)$sumWorktime),0,6). "]";
      array_push($data_array, $data);
    }
    return $pricePerHour = implode(",", $data_array);
  }

/**
 * [_calcMinutes description]
 * @param  [type] $id        [description]
 * @param  [type] $first_day [description]
 * @param  [type] $last_day  [description]
 * @param  [type] $column    [description]
 * @return [type]            [description]
 * 遅刻時間、早退時間の計算
 */
  public function _calcMinutes($id, $first_day, $last_day, $column){
  	$options = array(
  		'conditions' => array(
  			'Employee.id' => $id,
  			$column .' !=' => null,
  			'TimeCard.date BETWEEN ? AND ?' => array($first_day, $last_day),
  			),
  		'fields' => $column
  		);
  	$list = $this->TimeCard->find('all', $options);

  	if($column == 'in_time'){
  		$lateMinutes = 0;
  		for($i = 0; $i < count($list); $i++){
  		$timeDiff = (strtotime($list[$i]['TimeCard']['in_time']) - strtotime('08:00:00'))/(60);
  		$lateMinutes += $timeDiff;
  		}
  		return $lateMinutes;
  	}

  	if($column == 'out_time'){
      $earlyLeaveMinutes = 0;
      $overtimeMinutes   = 0;
  		for($j = 0; $j < count($list); $j++){
  			$timeDiff = (strtotime('17:00:00') - strtotime($list[$j]['TimeCard']['out_time']))/(60);
  			if($timeDiff > 0){
  				$earlyLeaveMinutes += $timeDiff;
  			} else {
  				$timeDiff *= -1;
  				$overtimeMinutes += $timeDiff;
  			}
  		}
  		$outMinutes = array($earlyLeaveMinutes, $overtimeMinutes);
  		return $outMinutes;
  	}
  }



/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Employee->recursive = 0;
		$this->set('employees', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Employee->exists($id)) {
			throw new NotFoundException(__('Invalid employee'));
		}
		$options = array('conditions' => array('Employee.' . $this->Employee->primaryKey => $id));
		$this->set('employee', $this->Employee->find('first', $options));
	}



/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->autoRender = false;
		if ($this->request->is('post')) {

      //新しいスタッフのidを自動生成
      //Employeeテーブルの最後のIDを取得し(last_id)、
      //last_idに1を足して、
      //3桁で、左を0埋めしたnew_employee_id_left_zeroを作成
      $last_id = $this->Employee->get_last_id();
      $new_employee_id = (int)$last_id['Employee']['id'] + 1;
      $new_employee_id_left_zero = str_pad($new_employee_id, 3, 0, STR_PAD_LEFT);


			$this->Employee->create();
      $this->request->data['Employee']['employee_no'] = $new_employee_id_left_zero.$this->request->data['Employee']['first_name'];
      $this->request->data['Employee']['prof_img'] = $new_employee_id_left_zero.strtolower($this->request->data['Employee']['first_name']).'.png';

			if ($this->Employee->save($this->request->data)) {
				$this->Session->setFlash('The employee has been saved.', 'flash_success');
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash('The employee could not be saved. Please, try again.', 'flash_failure');
				return $this->redirect($this->referer());
			}
		}
		$careers = $this->Employee->Career->find('list');
		$employeeGroups = $this->Employee->EmployeeGroup->find('list');
		$this->set(compact('careers', 'employeeGroups'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Employee->exists($id)) {
			throw new NotFoundException(__('Invalid employee'));
		}
		if ($this->request->is(array('post', 'put'))) {
      if($this->request->data['Employee']['terminated_date'] == ''){$this->request->data['Employee']['terminated_date'] = null ;}
			if ($this->Employee->save($this->request->data)) {
				$this->Session->setFlash(__('The employee has been saved.'), 'flash_success');
				return $this->redirect(array('action' => 'profile', $id));
			} else {
				$this->Session->setFlash(__('The employee could not be saved. Please, try again.'), 'flash_failure');
			}
		} else {
      $this->_setUser();
      $employeeProf  = $this->TimeCard->get_time_card($id);
			$options = array('conditions' => array('Employee.' . $this->Employee->primaryKey => $id));
			$this->request->data = $this->Employee->find('first', $options);
		}
    $option_careers = $this->Career->optionCareers();
    $option_careers = Hash::combine($option_careers, '{n}.Career.id', '{n}.Career.career');

    $option_group_managers = $this->EmployeeGroup->optionGroupManagers();
		$careers = $this->Employee->Career->find('list');
		$employeeGroups = $this->Employee->EmployeeGroup->find('list');
		$this->set(compact('careers', 'employeeGroups', 'option_careers', 'option_group_managers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Employee->id = $id;
		if (!$this->Employee->exists()) {
			throw new NotFoundException(__('Invalid employee'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Employee->delete()) {
			$this->Session->setFlash(__('The employee has been deleted.'));
		} else {
			$this->Session->setFlash(__('The employee could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
