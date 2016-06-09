<?php
App::uses('AppModel', 'Model');
/**
 * DayType Model
 *
 * @property Calendar $Calendar
 */
class DayType extends AppModel {
	public $name = 'DayType';

	public function get_day_type_list(){
		return $day_types = $this->find('list', array(
			'fields' => array('id', 'day_type')
			));
	}
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'day_type' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Calendar' => array(
			'className' => 'Calendar',
			'foreignKey' => 'day_type_id',
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
