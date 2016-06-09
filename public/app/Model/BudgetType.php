<?php
App::uses('AppModel', 'Model');
/**
 * BudgetType Model
 *
 * @property Expense $Expense
 * @property Income $Income
 */
class BudgetType extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Expense' => array(
			'className' => 'Expense',
			'foreignKey' => 'budget_type_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Income' => array(
			'className' => 'Income',
			'foreignKey' => 'budget_type_id',
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
