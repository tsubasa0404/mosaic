<?php
App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');
/**
 * TaskRecord Model
 *
 * @property Order $Order
 * @property Employee $Employee
 */
class TaskRecord extends AppModel {
	public $name = 'TaskRecord';


	public function get_task_record($order_id){
		$taskRecordList = $this->find('all', array(
			'conditions' => array(
				'TaskRecord.order_id' => $order_id),
			'order' => array('TaskRecord.id' => 'ASC')));
		return $taskRecordList;
	}

	//order/detail order information table用
	public function get_started_completed_overtime_worktime($order_id){
		$startedCompletedOvertimeWorktime = $this->find('first', array(
			'conditions' => array(
				'TaskRecord.order_id' => $order_id,
				),
			'group' => 'TaskRecord.order_id',
			'fields' => array(
				'min(TaskRecord.started) as minStarted',
				'max(TaskRecord.completed) as maxCompleted',
				'sum(TaskRecord.overtime) as sumOvertime',
				'sum(TaskRecord.worktime) as sumWorktime'
				),
			));
		return $startedCompletedOvertimeWorktime;
	}

	public function get_sum_edit_length($order_id){
		$sum_editLength = $this->find('first', array(
			'fields' => array(
				'sum(TaskRecord.edit_length) as sumEditLength',
				),
			'conditions' => array(
				'TaskRecord.order_id' => $order_id
				),
			'group' => 'TaskRecord.order_id'
			));
		return $sum_editLength;
	}

	public function get_task_record_count($order_id){
		$taskRecordCount = $this->find('count', array(
			'conditions' => array('TaskRecord.order_id' => $order_id)
		));
		return $taskRecordCount;
	}

	public function get_employee_individual_records($first_day, $last_day){
		$options = array(
			'conditions' => array(
				'TaskRecord.completed BETWEEN ? AND ?' => array($first_day, $last_day)
				),
			'group' => 'TaskRecord.employee_id',
			'fields' => array(
				'employee_id', 'Employee.employee_no', 'sum(TaskRecord.edit_length) as sumEditLength', 'sum(TaskRecord.worktime) as sumWorktime', 'sum(TaskRecord.edit_point) as sumEditPoint','sum(TaskRecord.edit_point)/sum(TaskRecord.worktime) as pointPerHour', 'Employee.prof_img'
				),
			'order' => array('sumEditPoint' => 'DESC')
			);
		return $individualRecords = $this->find('all', $options);
	}

	//task_records/team_achievementページ
	public function get_employee_individual_record_for_graph($employee_id){
		$options = array(
      'conditions' => array(
      	'TaskRecord.completed !=' => NULL,
      	'Employee.terminated_date' => NULL,
      	'TaskRecord.employee_id' => $employee_id
      	),
      'fields'     => array(
      	'Date_format(TaskRecord.completed, "%Y%m") as ym',
      	'sum(TaskRecord.edit_point) as sumPoint',
      	'sum(TaskRecord.worktime) as sumWorktime',
      	'Employee.employee_no'
      	),
      'order'      => array(
      	),
      'group'      => array(
      	'Date_format(TaskRecord.completed, "%Y%m")'
      	),
			);
		return $this->find('all', $options);
	}

	//employees/profileページ
	public function get_price_per_hour_graph_data($id,$mosaic_type_id){
    $this->recursive = 0;
    $options = array(
      'conditions' => array(
        'Order.mosaic_type_id' => $mosaic_type_id,
        'Order.status_type_id' => 3,
        'TaskRecord.employee_id' => $id
        ),
      'fields' => array(
        'Date_format(TaskRecord.completed, "%Y%m") as ym',
        'sum(TaskRecord.edit_point) as sumPrice',
        'sum(TaskRecord.worktime) as sumWorktime'
        ),
      'group' => array('Date_format(TaskRecord.completed, "%Y%m")')
      );
    return $this->find('all', $options);
  }

	public function get_individual_record($employee_id, $first_day, $last_day, $mosaic_type_id = null){

  	$options = array(
  		'conditions' => array(
  			'TaskRecord.completed BETWEEN ? AND ?' => array($first_day, $last_day),
  			'TaskRecord.employee_id' => $employee_id,
  			'Order.mosaic_type_id' => $mosaic_type_id
  			),
  		'fields' => array(
  			'Employee.employee_no', 'Order.mosaic_type_id',
  			'sum(TaskRecord.edit_length) as sumEditLength',
  			'sum(TaskRecord.worktime) as sumWorktime',
  			'sum(TaskRecord.edit_point) as sumEditPoint',
  			'sum(TaskRecord.edit_point)/sum(TaskRecord.worktime) as pointPerHour'
  			)
  		);
  	$individualRecords = $this->find('all', $options);
    return $individualRecords;
  }

  public function get_individual_task_record_list($id, $first_day, $last_day){
    $this->recursive = -1;
    $options = array();
    $options['conditions'] = array(
      'TaskRecord.employee_id' => $id,
      'TaskRecord.completed BETWEEN ? AND ?' => array($first_day, $last_day)
    );
    $options['fields'] = array(
      'Order.control_no','Order.mosaic_type_id', 'MosaicType.mosaic_type', 'MosaicSize.mosaic_size',
      'TaskRecord.edit_length', 'TaskRecord.edit_point','TaskRecord.started', 'TaskRecord.completed',
      'TaskRecord.worktime'
      );
    $options['joins'][] = array(
      'table' => 'orders',
      'alias' => 'Order',
      'type' => 'LEFT',
      'conditions' => 'Order.id=TaskRecord.order_id'
      );
    $options['joins'][] = array(
      'table' => 'mosaic_types',
      'alias' => 'MosaicType',
      'type' => 'LEFT',
      'conditions' => 'Order.mosaic_type_id=MosaicType.id'
      );
    $options['joins'][] = array(
      'table' => 'mosaic_sizes',
      'alias' => 'MosaicSize',
      'type' => 'LEFT',
      'conditions' => 'Order.mosaic_size_id=MosaicSize.id'
      );

    $options['joins'][] = array(
      'table' => 'employees',
      'alias' => 'Employee',
      'type' => 'LEFT',
      'conditions' => 'Employee.id=TaskRecord.employee_id'
      );
    $options['order'] = array('Order.control_no' => 'DESC');
    $individualTaskList = $this->find('all', $options);
    return $individualTaskList;
  }

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'order_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'employee_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Order' => array(
			'className' => 'Order',
			'foreignKey' => 'order_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Employee' => array(
			'className' => 'Employee',
			'foreignKey' => 'employee_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
