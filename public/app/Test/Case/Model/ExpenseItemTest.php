<?php
App::uses('ExpenseItem', 'Model');

/**
 * ExpenseItem Test Case
 *
 */
class ExpenseItemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.expense_item',
		'app.expense'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ExpenseItem = ClassRegistry::init('ExpenseItem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ExpenseItem);

		parent::tearDown();
	}

}
