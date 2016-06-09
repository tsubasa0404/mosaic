<?php
App::uses('AppModel', 'Model');
/**
 * Income Model
 *
 * @property Project $Project
 * @property IncomeItem $IncomeItem
 * @property BudgetType $BudgetType
 * @property Currency $Currency
 * @property Payer $Payer
 */
class Income extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

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
		'IncomeItem' => array(
			'className' => 'IncomeItem',
			'foreignKey' => 'income_item_id',
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
		),
		'Payer' => array(
			'className' => 'Payer',
			'foreignKey' => 'payer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
