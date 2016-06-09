<?php
App::uses('Income', 'Model');

/**
 * Income Test Case
 *
 */
class IncomeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.income',
		'app.project',
		'app.expense',
		'app.expense_item',
		'app.expense_type',
		'app.budget_type',
		'app.currency',
		'app.income_item',
		'app.payer'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Income = ClassRegistry::init('Income');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Income);

		parent::tearDown();
	}

}
