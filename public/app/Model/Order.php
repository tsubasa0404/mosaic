<?php
App::uses('AppModel', 'Model');

/**
 * Order Model
 *
 * @property Client $Client
 * @property MosaicType $MosaicType
 * @property MosaicSize $MosaicSize
 * @property StatusType $StatusType
 * @property TaskRecord $TaskRecord
 */
class Order extends AppModel {
	public $name = 'Order';

	public function get_current_team_point($first_day, $last_day){
		$options = array(
			'conditions' => array(
				'Order.completed BETWEEN ? AND ?' => array($first_day, $last_day)
				),
			'fields' => array('sum(Order.price) as price')
		);
		return $current_point = $this->find('first', $options);
	}

	public function get_order_list(){
		$this->recursive = 0;

		$options = array(
			'fields' => array(
				'id',
				'control_no',
				'Client.client',
				'Client.quality',
				'MosaicType.mosaic_type',
				'MosaicSize.mosaic_size',
				'length',
				'price',
				'target_time',
				'worktime',
				'delivery_date',
				'note',
				'status_type_id',
				'StatusType.status'
				),
			'order' => array('Order.id' => 'DESC')
			);
		return $orderList = $this->find('all', $options);
	}


/**
 * [_setRecords description]
 * @param [type] $first_day      [description]
 * @param [type] $last_day       [description]
 * @param [type] $mosaic_type_id [description]
 * @param [type] $group          [description]
 */
	public function get_completed_task_records($first_day, $last_day, $mosaic_type_id,  $groupby = false){
		$this->recursive = -1;
		$options = array(
			'conditions' => array(
				'completed BETWEEN ? AND ?' => array($first_day, $last_day),
				'mosaic_type_id' => $mosaic_type_id,
				'client_id !=' => 1
				),
			'group' => $groupby,
			'fields' => array(
				$groupby,
				'count(id) as cnt',
				'sum(price) as sumPrice',
				'sum(worktime) as sumWorktime',
				'avg(worktime) as avgWorktime',
				'sum(price) / sum(worktime) as pricePerHour'
				)
			);
		$completedTaskRecords = $this->find('all', $options);
		return $completedTaskRecords;
	}

	public function get_completed_task_records_gokuraku($first_day, $last_day, $mosaic_type_id,  $groupby = false){
		$this->recursive = -1;
		$options = array(
			'conditions' => array(
				'completed BETWEEN ? AND ?' => array($first_day, $last_day),
				'mosaic_type_id' => $mosaic_type_id,
				'client_id' => 1
				),
			'group' => $groupby,
			'fields' => array(
				$groupby,
				'count(id) as cnt',
				'sum(price) as sumPrice',
				'sum(worktime) as sumWorktime',
				'avg(worktime) as avgWorktime',
				'sum(price) / sum(worktime) as pricePerHour'
				)
			);
		$GKRecords = $this->find('all', $options);
		return $GKRecords;
	}

/**
 * [_setTotalRecords description]
 * @param [type] $first_day      [description]
 * @param [type] $last_day       [description]
 * @param [type] $mosaic_type_id [description]
 */
	public function get_records_groupby_client($first_day, $last_day, $mosaic_type_id, $groupby = null){
		$options = array();
		$options['recursive'] = -1;
		$options['joins'][] = array(
			'type' => 'LEFT',
			'table' => 'clients',
			'alias' => 'Client',
			'conditions' => '`Order`.`client_id`=`Client`.`id`',
			);
		$options['conditions'] = array('Order.completed BETWEEN ? AND ?' => array($first_day, $last_day),
				'Order.mosaic_type_id' => $mosaic_type_id,);
		$options['group'] = $groupby;
		$options['fields'] = array(
			 	'Client.client',
				'count(Order.id) as cnt',
				'sum(price) as sumPrice',
				'sum(worktime) as sumWorktime',
				'sum(price) / sum(worktime) as pricePerHour'
			);
		$options['order'] = array('Client.id' => 'ASC');
		$clientTotalRecords = $this->find('all', $options);
		return $clientTotalRecords;
	}

	public function get_graph_data_gokuraku(){
		$options = array(
			'conditions' => array(
				'Order.client_id' => 1,
				'Order.status_type_id' => 3
				),
			'fields' => array(
				'Date_format(Order.completed, "%Y%m") as ym', 'sum(price) as sumPrice'
				),
			'group' => 'Date_format(Order.completed, "%Y%m")',
			);
		return $graph_data_gokuraku = $this->find('all', $options);
	}

	public function get_graph_data_client(){
		$options = array(
    	'conditions' => array(
    		'Order.client_id !=' => 1,
    		'Order.status_type_id' => 3
      	),
      'fields'     => array(
      	'Date_format(Order.completed, "%Y%m") as ym', 'sum(price) as sumPrice'
      	),
      'group' => 'Date_format(Order.completed, "%Y%m")',
			);
		return $graph_data_client = $this->find('all', $options);
	}

	public function get_monthly_worktime(){
		$options = array(
    	'conditions' => array(
    		'Order.status_type_id' => 3
      	),
      'fields'     => array(
      	'Date_format(Order.completed, "%Y%m") as ym', 'sum(price) as sumPrice',
      	'sum(TaskRecord.worktime) as sumWorktime',
      	'count(Distinct TaskRecord.employee_id) as cntEmployee'
      	),
      'group' => array('Date_format(Order.completed, "%Y%m")')
			);
		$options['joins'][] = array(
			'type' => 'LEFT',
			'table' => 'task_records',
			'alias' => 'TaskRecord',
			'conditions' => '`TaskRecord`.`order_id`=`Order`.`id`',
			);
		return $operations = $this->find('all', $options);
	}

	public function get_monthly_worktime_sumprice_client($mosaic_type_id){
		$options = array(
			'conditions' => array(
				'Order.mosaic_type_id' => $mosaic_type_id,
				'Order.status_type_id' => 3,
				'Order.client_id !=' => 1
				),
			'fields' => array(
				'Date_format(Order.completed, "%Y%m") as ym', 'sum(price) as sumPrice', 'sum(worktime) as sumWorktime'
				),
			'group' => array('Date_format(Order.completed, "%Y%m")')
			);
		return $worktime_sumprice_client = $this->find('all', $options);
	}

	public function get_monthly_worktime_sumprice_gokuraku($mosaic_type_id){
		$options = array(
			'conditions' => array(
				'Order.mosaic_type_id' => $mosaic_type_id,
				'Order.status_type_id' => 3,
				'Order.client_id' => 1
				),
			'fields' => array(
				'Date_format(Order.completed, "%Y%m") as ym', 'sum(price) as sumPrice', 'sum(worktime) as sumWorktime'
				),
			'group' => array('Date_format(Order.completed, "%Y%m")')
			);
		return $worktime_sumprice_gokuraku = $this->find('all', $options);
	}


/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'control_no' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'file_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'client_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'delivery_date' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'mosaic_type_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'mosaic_size_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'price' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'length' => array(
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
		'Client' => array(
			'className' => 'Client',
			'foreignKey' => 'client_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'MosaicType' => array(
			'className' => 'MosaicType',
			'foreignKey' => 'mosaic_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'MosaicSize' => array(
			'className' => 'MosaicSize',
			'foreignKey' => 'mosaic_size_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'StatusType' => array(
			'className' => 'StatusType',
			'foreignKey' => 'status_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'TaskRecord' => array(
			'className' => 'TaskRecord',
			'foreignKey' => 'order_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


}
