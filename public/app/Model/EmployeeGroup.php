<?php
App::uses('AppModel', 'Model');
/**
 * EmployeeGroup Model
 *
 * @property Employee $Employee
 */
class EmployeeGroup extends AppModel {
	public $name = 'EmployeeGroup';

	public function optionGroupManagers(){
		$options = array();
		$options['fields'] = array(
			'EmployeeGroup.id',
			'Employee.employee_no',
			);
		$options['joins'][] = array(
			'table' => 'employees',
			'alias' => 'Employee',
			'type' => 'LEFT',
			'conditions' => 'EmployeeGroup.group_manager_id = Employee.id'
			);
		return $this->find('list', $options);
	}
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'employee_group' => array(
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
		'Employee' => array(
			'className' => 'Employee',
			'foreignKey' => 'employee_group_id',
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
