<?php
App::uses('Expense', 'Model');

/**
 * Expense Test Case
 *
 */
class ExpenseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.expense',
		'app.project',
		'app.income',
		'app.expense_item',
		'app.expense_type',
		'app.budget_type',
		'app.currency'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Expense = ClassRegistry::init('Expense');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Expense);

		parent::tearDown();
	}

}
