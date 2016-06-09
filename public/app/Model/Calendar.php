<?php
App::uses('AppModel', 'Model');
/**
 * Calendar Model
 *
 * @property DayType $DayType
 */
class Calendar extends AppModel {
	public $name = 'Calendar';

	public function get_all_events(){
		$events = $this->find('all', array(
			'fields' => array(
				'id', 'title', 'allday', 'start', 'day_type_id', 'DayType.day_type'
				)
			));
		return $events;
	}

	public function get_holidays(){
		return $holidays = $this->find('all', array(
			'conditions' => array(
				'day_type_id' => array(1, 2, 3, 4)
				),
			'fields' => array(
				'id', 'title', 'allday', 'day_type_id', 'DayType.day_type',
				'Date_format(start, "%Y-%m-%d") as start',
				),
			'order' => array('start' => 'ASC')
			));
	}

	public function get_events(){
		return $holidays = $this->find('all', array(
			'conditions' => array(
				'day_type_id' => array(5)
				),
			'fields' => array(
				'id', 'title', 'allday', 'day_type_id', 'DayType.day_type',
				'Date_format(start, "%Y-%m-%d") as start',
				),
			'order' => array('start' => 'ASC')
			));
	}


/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'title' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'allday' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'start' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'day_type_id' => array(
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
		'DayType' => array(
			'className' => 'DayType',
			'foreignKey' => 'day_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
