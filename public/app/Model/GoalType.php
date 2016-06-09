<?php
App::uses('AppModel', 'Model');
/**
 * GoalType Model
 *
 * @property GoalSetting $GoalSetting
 */
class GoalType extends AppModel {
	public $name = 'GoalType';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'goal_type' => array(
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
		'GoalSetting' => array(
			'className' => 'GoalSetting',
			'foreignKey' => 'goal_type_id',
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
