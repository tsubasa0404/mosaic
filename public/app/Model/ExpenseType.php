<?php
App::uses('AppModel', 'Model');
/**
 * ExpenseType Model
 *
 * @property Expense $Expense
 */
class ExpenseType extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Expense' => array(
			'className' => 'Expense',
			'foreignKey' => 'expense_type_id',
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
