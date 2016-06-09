<?php
App::uses('AppController', 'Controller');
/**
 * TaskRecords Controller
 *
 * @property TaskRecord $TaskRecord
 * @property PaginatorComponent $Paginator
 */
class TaskRecordsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $uses = array(
		'User',
		'Order',
		'Client',
		'TaskRecord',
		'StatusType',
		'Employee',
		'GoalSetting',
		'Calendar');
  public $components  = array('Paginator', 'Session', 'Auth','RequestHandler');
  public $helpers     = array('Form', 'Html');


/**
 * [team_achievements description]
 * @param  [type] $year  [description]
 * @param  [type] $month [description]
 * @return [type]        [description]
 * team achievementページ表示用
 */
	public function team_achievements($year = null, $month = null){


		//Urlで指定された日時の取得
			$dateArray = $this->_setYearMonth($year, $month);
			$first_day = $dateArray[2];
			$last_day = $dateArray[3];
			$this->set(compact('dateArray'));

		//NormalとCS 動画の尺別(クライアント)
	    $normalClientLength = $this->Order->get_completed_task_records($first_day, $last_day, 1, 'length');
	    $normalClientTotal  = $this->Order->get_completed_task_records($first_day, $last_day, 1);
	    $csClientLength     = $this->Order->get_completed_task_records($first_day, $last_day, 2, 'length');
	    $csClientTotal      = $this->Order->get_completed_task_records($first_day, $last_day, 2);

	  //NormalとCS 動画の尺別(極楽)
	    $normalGKLength = $this->Order->get_completed_task_records_gokuraku($first_day, $last_day, 1, 'length');
	    $normalGKTotal  = $this->Order->get_completed_task_records_gokuraku($first_day, $last_day, 1);
	    $csGKLength     = $this->Order->get_completed_task_records_gokuraku($first_day, $last_day, 2, 'length');
	    $csGKTotal      = $this->Order->get_completed_task_records_gokuraku($first_day, $last_day, 2);

    //NormalとCS 会社名別
      $normalClientRecords      = $this->Order->get_records_groupby_client($first_day, $last_day, 1, 'Order.client_id');
      $normalClientTotalRecords = $this->Order->get_records_groupby_client($first_day, $last_day, 1);
      $csClientRecords          = $this->Order->get_records_groupby_client($first_day, $last_day, 2, 'Order.client_id');
      $csClientTotalRecords     = $this->Order->get_records_groupby_client($first_day, $last_day, 2);

	  //Graph用データ
      $gkSales                  = $this->_setGkGraphData();
      $clientSales              = $this->_setClientGraphData();
      $operationRate            = $this->_setOperationRateGraphDate();
      $pricePerHourNormalClient = $this->_setPricePerHourGraphDateClient(1);
      $pricePerHourCsClient     = $this->_setPricePerHourGraphDateClient(2);
      $pricePerHourNormalGK     = $this->_setPricePerHourGraphDateGK(1);
      $pricePerHourCsGK         = $this->_setPricePerHourGraphDateGK(2);

		$this->set(compact(
			'normalClientLength',		'normalClientTotal','csClientLength','csClientTotal',
			'normalGKLength',				'normalGKTotal','csGKLength','csGKTotal',
			'normalClientRecords',	'normalClientTotalRecords',
			'csClientRecords',			'csClientTotalRecords',
			'gkSales','clientSales','operationRate',
			'pricePerHourNormalClient','pricePerHourCsClient',
			'pricePerHourNormalGK','pricePerHourCsGK'
			));

    //ログインユーザー情報を取得
    $user = $this->Auth->user();
		//日本語対応
		switch ($user['user_role_id']) {
			case 3:
			case 5:
				$this->render('team_achievements_ja');
		}
	}

/**
 * [_setGkGraphData description]
 *ほしいデータ
 *各月の、顧客売上、自社売上、稼働率、時間当たり売上
 *稼働率は、総作業時間/(Employee_idの数×8×営業日数)*100
 *TaskRecord, Order, Calendar
 *データのフォーマット [gd(yyyy, 1, m), 総売上]
 */
	public function _setGkGraphData(){
		$graph_data_gokuraku = $this->Order->get_graph_data_gokuraku();
    $gkSales = $this->_create_data_array($graph_data_gokuraku);
    return $gkSales;
	}

	public function _setClientGraphData(){
		$graph_data_client = $this->Order->get_graph_data_client();
    $clientSales = $this->_create_data_array($graph_data_client);
		return $clientSales;
	}

  public function _create_data_array($graph_data){
    $data_array = array();
    foreach($graph_data as $key => $val){
      $ym = $val[0]['ym'];
      $y = mb_substr($ym, 0, 4);
      $m = mb_substr($ym, 4, 2);
      $sumPrice = $val[0]['sumPrice'];

      $monthly_data = "[gd(" .$y. ",1," . $m . ")," .$sumPrice. "]";
      array_push($data_array, $monthly_data);
    }
    return $data_array_to_string = implode(",", $data_array);
  }

	public function _setOperationRateGraphDate(){
    $data_array = array();
		$operations = $this->Order->get_monthly_worktime();

		foreach($operations as $key => $val){
			$ym = $val[0]['ym'];
			$y = mb_substr($ym, 0, 4);
			$m = mb_substr($ym, 4, 2);

			$sumWorktime = $val[0]['sumWorktime'];
			$cntEmployee = $val[0]['cntEmployee'];
			$operation = "[gd(" .$y. ",1," . $m . ")," .number_format((int)$sumWorktime/((int)$cntEmployee*8*21)*100). "]";
			array_push($data_array, $operation);
		}
		return $operations = implode(",", $data_array);
	}

	public function _setPricePerHourGraphDateClient($mosaic_type_id){
    $pricePerHour = $this->Order->get_monthly_worktime_sumprice_client($mosaic_type_id);
    return $pricePerHour = $this->_create_price_per_hour_string($pricePerHour);
	}

	public function _setPricePerHourGraphDateGK($mosaic_type_id){
		$pricePerHour = $this->Order->get_monthly_worktime_sumprice_gokuraku($mosaic_type_id);
    return $pricePerHour = $this->_create_price_per_hour_string($pricePerHour);
	}

  public function _create_price_per_hour_string($pricePerHour){
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
 * [individual_achievements description]
 * @param  [type] $year  [description]
 * @param  [type] $month [description]
 * @return [type]        [description]
 * 個人実績別PieChart,Graphページ表示用
 */
	public function individual_achievements($year = null, $month = null){
		/**
		 * 年月の取得をURLに応じて変更
		 * 月の個人目標値を設定
		 */
    $dateArray         = $this->_setYearMonth($year, $month);
    $first_day         = $dateArray[2];
    $last_day          = $dateArray[3];
    $individualRecords = $this->TaskRecord->get_employee_individual_records($first_day, $last_day);
    $goal_info_array   = $this->GoalSetting->get_goal_info($first_day, $goal_type_id=2);
    $individualGoal    = $goal_info_array['goal_value'];

    $graphData         = $this->_get_point_per_hour_graph_data();
    $graphData2        = $this->_get_total_point_graph_data();

		$this->set(compact('individualRecords','individualGoal', 'individual_goal_values', 'dateArray', 'pricePerHourDatumn', 'graphData', 'pointDatumn', 'graphData2'));


		//$userにログインしているユーザー情報を格納
		$user = $this->Auth->user();
		$this->set(compact('user'));

		//日本語対応
		switch ($user['user_role_id']) {
			case 3:
			case 5:
				$this->render('individual_achievements_ja');
		}
	}


/**
 * [_setIndividualGraphData description]
 * @param [type] $employee_id [description]
 * Point Per Hour 比較グラフ用データ取得
 */
	public function _get_point_per_hour_graph_data(){
		$graphData = array();
    $employee_list = $this->Employee->get_employee_list();
    foreach($employee_list as $id => $employee_no){
      if($id == 1 || $id == 2){
        continue;
      }
      $individual_data = $this->_setIndividualGraphData($id);
      array_push($graphData, $individual_data);
    }
		return $graphData;
	}

  public function _setIndividualGraphData($employee_id){

    $individual_record_array = $this->TaskRecord->get_employee_individual_record_for_graph($employee_id);
    $employee_no = $this->Employee->find('first', array(
      'conditions' => array('id' => $employee_id), 'fields' => 'employee_no'));

    $data_array = array();
    foreach($individual_record_array as $key => $val){
      $ym           = $val[0]['ym'];
      $y            = mb_substr($ym, 0, 4);
      $m            = mb_substr($ym, 4, 2);

      $sumPoint     = $val[0]['sumPoint'];
      $sumWorktime  = $val[0]['sumWorktime'];
      $data         = "[gd(" .$y. ",1," . $m . ")," .mb_substr(((int)$sumPoint/(float)$sumWorktime),0,6). "]";
      array_push($data_array, $data);
    }
    $pricePerHourDatumn = implode(",", $data_array);
    return $data = array($employee_no['Employee']['employee_no'], "var data". $employee_no['Employee']['employee_no']. " = [". $pricePerHourDatumn ."];");
  }

/**
 * [_setIndividualGraphData description]
 * @param [type] $employee_id [description]
 * Total Points 比較グラフ用データ取得
 */
	public function _setIndividualPointGraphData($employee_id){

		$individual_record_array = $this->TaskRecord->get_employee_individual_record_for_graph($employee_id);
    $employee_no = $this->Employee->find('first', array(
      'conditions' => array('id' => $employee_id), 'fields' => 'employee_no'));

    $data_array = array();
		foreach($individual_record_array as $key => $val){
      $ym           = $val[0]['ym'];
      $y            = mb_substr($ym, 0, 4);
      $m            = mb_substr($ym, 4, 2);

      $sumPoint     = $val[0]['sumPoint'];
      $data         = "[gd(" .$y. ",1," . $m . ")," .$sumPoint. "]";
       array_push($data_array, $data);
    }
    $pointDatumn = implode(",", $data_array);
    return $data =array($employee_no['Employee']['employee_no'], "var data". $employee_no['Employee']['employee_no']. " = [". $pointDatumn ."];");
	}


	public function _get_total_point_graph_data(){
    $graphData2 = array();
    $employee_list = $this->Employee->get_employee_list();
    foreach($employee_list as $id => $employee_no){
      if($id == 1 || $id == 2){
        continue;
      }
      $individual_data = $this->_setIndividualPointGraphData($id);
      array_push($graphData2, $individual_data);
    }
    return $graphData2;
	}


	public function _setGKRecords($first_day, $last_day, $mosaic_type_id,  $group = false){
		$taskRecords = '';
		//Orderから、
		$this->Order->recursive = -1;
		$options = array(
			'conditions' => array(
				'completed BETWEEN ? AND ?' => array($first_day, $last_day),
				'mosaic_type_id' => $mosaic_type_id,
				'client_id' => 1
				),
			'group' => $group,
			'fields' => array(
				$group,
				'count(id) as cnt',
				'sum(price) as sumPrice',
				'sum(worktime) as sumWorktime',
				'avg(worktime) as avgWorktime',
				'sum(price) / sum(worktime) as pricePerHour'
				)
			);
		$GKRecords = $this->Order->find('all', $options);
		return $GKRecords;
	}




/**
 * [_getHolidayList description]
 * @param  [type] $started   [description]
 * @param  [type] $completed [description]
 * @return [type]            [description]
 * 作業時間計算用休業日取得
 */
	public function _getHolidayList($started, $completed){

		$options = array(
			'conditions' => array(
				'Calendar.start BETWEEN ? AND ?' => array($started, $completed),
				'Calendar.day_type_id !=' => 5
				),
			'fields' => array('id', 'start'),
			'order' => array('start' => 'ASC')
			);
		$holidayList = $this->Calendar->find('all', $options);
		return $holidayList;
	}

/**
 * [_calcWorktime description]
 * @param  [type] $post_started   [description]
 * @param  [type] $post_completed [description]
 * @param  [type] $post_overtime  [description]
 * @return [type]                 [description]
 * 作業時間計算
 */
	public function _calcWorktime($post_started, $post_completed, $post_overtime = null){

		//初期設定(開始日、終了日、残業時間)
      $overtime           = $post_overtime;
      $started            = $post_started;
      $startedDay         = substr($started, 0, 10); //日付を文字列で取得
      $started_timestamp  = strtotime($started);

      $completed          = $post_completed;
      $completedDay       = substr($completed, 0,10);
      $completed_timestamp= strtotime($completed);

		//開始日と終了日の間の休業日一覧と、個数を取得
      $holidayList  = $this->_getHolidayList($started, $completed);
      $countHoliday = count($holidayList);

		//開始日と終了日の"日"の差
      $dayDiff  = (strtotime($completedDay) - strtotime($startedDay))/(60*60*24);
		//開始日時と終了日時の"時間"の差
      $timeDiff = ($completed_timestamp - $started_timestamp)/(60*60);

		if($dayDiff == 0){
			$worktime = number_format($timeDiff + $overtime, 2);
		} elseif ($dayDiff == 1) {
			$worktime = number_format($timeDiff -15 + $overtime, 2);
		} else {
			$worktime = number_format($timeDiff + $overtime + ($dayDiff - $countHoliday)*8 - $dayDiff*24, 2);
			if($worktime <= 0){
				$worktime += 1;
			}
		}
		if($worktime < 0){
			return $worktime="";
		}
		return $worktime;
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TaskRecord->recursive = 0;
		$this->set('taskRecords', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TaskRecord->exists($id)) {
			throw new NotFoundException(__('Invalid task record'));
		}
		$options = array('conditions' => array('TaskRecord.' . $this->TaskRecord->primaryKey => $id));
		$this->set('taskRecord', $this->TaskRecord->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function addAjax(){
		$this->autoRender = false;
		// if($this->RequestHandler->isAjax()){
		// 	Configure::write('debug', 0);
		// }
		if($this->request->is('ajax')){
			$this->TaskRecord->create();
			if ($this->TaskRecord->save($this->request->data)) {
				echo $this->TaskRecord->getLastInsertID();
				// return $this->Session->setFlash('The task record has been saved.', 'flash_success');
			} else {
				return $this->Session->setFlash('The task record could not be saved. Please, try again.', 'flash_failure');
			}
		}
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->TaskRecord->create();
			if ($this->TaskRecord->save($this->request->data)) {
				$this->Session->setFlash('The task record has been saved.', 'flash_success');
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash('The task record could not be saved. Please, try again.', 'flash_failure');
			}
		}
		$orders = $this->TaskRecord->Order->find('list');
		$employees = $this->TaskRecord->Employee->find('list');
		$this->set(compact('orders', 'employees'));
	}

	public function _setTaskRecord($id){
		$taskRecordList = $this->TaskRecord->find('all', array(
			'conditions' => array('TaskRecord.order_id' => $id)));
		return $taskRecordList;
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {

		//不正なアクセスを制御
		if (!$this->TaskRecord->exists($id)) {
			throw new NotFoundException(__('Invalid task record'));
		}

		//ログインユーザー情報を取得
		$this->_setUser();

		//ページタイトル用に編集するTaskRecordのemployee_idからemployee_noを取得
		$employee_no = $this->TaskRecord->find('first', array(
			'conditions' => array('TaskRecord.id' => $id),
			'fields' => array('Employee.employee_no')));

		//formのセレクトボックス用にemployeeリストを取得
		$employeeList = $this->Employee->find('list', array('fields' => array('id', 'employee_no')));


		//taskRecordのorder_idとorderのcontrol_noを取得
		$taskRecordList = $this->TaskRecord->find('first', array('conditions' => array('TaskRecord.id' => $id)));
		$taskRecordId = $id;

		//当該ページのorder_idを取得
		$orderId = $taskRecordList['TaskRecord']['order_id'];
		$orderData = $this->Order->find('first', array(
			'conditions' => array('Order.id' => $orderId)
			));

		//変数に格納してページに渡す
		$this->set(compact(
			'employee_no','employeeList',
			'taskRecordList', 'taskRecordCount','taskRecordId',
			'orderId', 'orderData'));



		//PostされてきたDataの処理
		if ($this->request->is(array('post', 'put'))) {

      $post_started   = $this->request->data['TaskRecord']['started'];
      $post_completed = $this->request->data['TaskRecord']['completed'];
      $post_overtime  = $this->request->data['TaskRecord']['overtime'];

      if($this->request->data['TaskRecord']['worktime']){
      	$worktime = $this->request->data['TaskRecord']['worktime'];
      } else {
      	$worktime = $this->_calcWorktime($post_started, $post_completed, $post_overtime);
      }


			$this->request->data = array(
        'id'            => $this->request->data['TaskRecord']['id'],
        'order_id'      => $this->request->data['TaskRecord']['order_id'],
        'clip_no'       => $this->request->data['TaskRecord']['clip_no'],
        'clip_in'       => $this->request->data['TaskRecord']['clip_in'],
        'clip_out'      => $this->request->data['TaskRecord']['clip_out'],
        'edit_length'   => $this->request->data['TaskRecord']['edit_length'],
        'employee_id'   => $this->request->data['TaskRecord']['employee_id'],
        'started'       => $this->request->data['TaskRecord']['started'],
        'completed'     => $this->request->data['TaskRecord']['completed'],
        'overtime'      => $this->request->data['TaskRecord']['overtime'],
        'worktime'      => $worktime,
        'edit_point'    => $this->request->data['TaskRecord']['edit_point']
				);


			if ($this->TaskRecord->save($this->request->data)) {
				$this->Session->setFlash('The task record has been saved.', 'flash_success');
				// return $this->redirect(array('controller' => 'orders', 'action' => 'detail/'.$orderId));
				return $this->redirect(array('controller' => 'orders', 'action' => 'detail/'.$orderId));
			} else {
				$this->Session->setFlash('The task record could not be saved. Please, try again.', 'flash_failure');
			}
		} else {
			$options = array('conditions' => array('TaskRecord.' . $this->TaskRecord->primaryKey => $id));
			$this->request->data = $this->TaskRecord->find('first', $options);
		}
		$orders = $this->TaskRecord->Order->find('list');
		$employees = $this->TaskRecord->Employee->find('list');
		$this->set(compact('orders', 'employees'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TaskRecord->id = $id;
		if (!$this->TaskRecord->exists()) {
			throw new NotFoundException(__('Invalid task record'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TaskRecord->delete()) {
			$this->Session->setFlash('The task record has been deleted.', 'flash_success');
		} else {
			$this->Session->setFlash('The task record could not be deleted. Please, try again.', 'flash_failure');
		}
		return $this->redirect($this->referer());
	}


}
