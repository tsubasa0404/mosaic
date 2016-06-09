<?php
App::uses('AppModel', 'Model');
/**
 * TimeCard Model
 *
 * @property Employee $Employee
 * @property PayCutType $PayCutType
 */
class TimeCard extends AppModel {

  public function get_time_card_list($first_day, $last_day){
    $options = array(
      'fields' => array(
        'id',
        'Employee.employee_no',
        'PayCutType.type',
        'pay_cut_type_id',
        'date',
        'in_time',
        'out_time',
        'note'
        ),
      'conditions' => array(
        'TimeCard.date BETWEEN ? AND ?' => array($first_day, $last_day)
        ),
      'order' => array('TimeCard.date' => 'ASC')
      );
    return $timecard_list = $this->find('all', $options);
  }

	/**
 * [_setTimeCard description]
 * @param [type] $id        [description]
 * @param [type] $first_day [description]
 * @param [type] $last_day  [description]
 * タイムカード一覧テーブル用
 */
  public function get_time_card($id, $first_day = null, $last_day = null){
  	$options = array();
  	$options['recursive'] = -1;

  	$options['joins'][] = array(
  		'type' => 'LEFT',
  		'table' => 'pay_cut_types',
  		'alias' => 'PayCutType',
  		'conditions' => '`TimeCard`.`pay_cut_type_id` = `PayCutType`.`id`',
  		);
  	$options['fields'] = array(
  		'TimeCard.id',
  		'TimeCard.date',
  		'TimeCard.in_time',
  		'TimeCard.out_time',
  		'TimeCard.note',
  		'TimeCard.pay_cut_type_id',
  		'PayCutType.type',
  		'PayCutType.amount',
  		);
  	$options['conditions'] = array(
  		'TimeCard.date BETWEEN ? AND ?' => array($first_day, $last_day),
      'TimeCard.employee_id' => $id
  		);
  	$options['order'] = array('TimeCard.date' => 'ASC');

  	$timeCards = $this->find('all', $options);
  	return $timeCards;
  }

  public function get_time_card_count_items($employee_id, $first_day=null, $last_day=null){
    $options = array(
      'fields' => array(
        'count(TimeCard.pay_cut_type_id = 1 or null) as cntOff',
        'count(TimeCard.pay_cut_type_id = 4 or null) as cntNoCall',
        'count(TimeCard.pay_cut_type_id = 5 or null) as cntPaid',
        'count(TimeCard.pay_cut_type_id = 2 or null) as cntLate',
        'count(TimeCard.pay_cut_type_id = 3 or null) as cntEarlyLeave',
        'count(TimeCard.pay_cut_type_id = 6 or null) as cntOvertime',
        'count(TimeCard.pay_cut_type_id = 7 or null) as cntHolidayWork',
        ),
      'conditions' => array(
        'TimeCard.date BETWEEN ? AND ?' => array($first_day, $last_day),
        'Employee.id' => $employee_id
        ),
      );
    return $count_items = $this->find('all', $options);
  }

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
		'date' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'pay_cut_type_id' => array(
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
		'Employee' => array(
			'className' => 'Employee',
			'foreignKey' => 'employee_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PayCutType' => array(
			'className' => 'PayCutType',
			'foreignKey' => 'pay_cut_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
