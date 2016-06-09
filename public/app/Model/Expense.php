<?php
App::uses('AppModel', 'Model');
/**
 * Expense Model
 *
 * @property Project $Project
 * @property ExpenseItem $ExpenseItem
 * @property ExpenseType $ExpenseType
 * @property BudgetType $BudgetType
 * @property Currency $Currency
 */
class Expense extends AppModel {


	public function sumExpense($first_month=null, $end_month=null, $budget_type_id, $project_id, $currency_id){
		$options = array();
		$options['conditions'] = array(
			'Expense.date between ? and ?'=> array($first_month, $end_month),
			'Expense.budget_type_id' => $budget_type_id,
			'Expense.project_id' => $project_id,
			'Expense.currency_id' => $currency_id,
			);
		$options['fields'] = array(
			'ExpenseItem.item',
			'sum(Expense.price) as sum',
			'BudgetType.type',
			'Project.project',
			);
		$options['joins'][] = array(
			'table' => 'expense_items',
			'alias' => 'ExpenseItem',
			'type' => 'LEFT',
			'conditions' => 'ExpenseItem.id = Expense.expense_item_id'
			);
		$options['joins'][] = array(
			'table' => 'projects',
			'alias' => 'Project',
			'type' => 'LEFT',
			'conditions' => 'Project.id = Expense.project_id'
			);
		$options['joins'][] = array(
			'table' => 'budget_types',
			'alias' => 'BudgetType',
			'type' => 'LEFT',
			'conditions' => 'BudgetType.id = Expense.budget_type_id'
			);
		$options['recursive'] = -1;
		$options['order'] = array('ExpenseItem.item' => 'asc');
		$options['group'] = array('Expense.expense_item_id');
		return $this->find('all', $options);
	}

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Project' => array(
			'className' => 'Project',
			'foreignKey' => 'project_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ExpenseItem' => array(
			'className' => 'ExpenseItem',
			'foreignKey' => 'expense_item_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ExpenseType' => array(
			'className' => 'ExpenseType',
			'foreignKey' => 'expense_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'BudgetType' => array(
			'className' => 'BudgetType',
			'foreignKey' => 'budget_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Currency' => array(
			'className' => 'Currency',
			'foreignKey' => 'currency_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
