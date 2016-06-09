<?php
App::uses('IncomeItem', 'Model');

/**
 * IncomeItem Test Case
 *
 */
class IncomeItemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.income_item',
		'app.income'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->IncomeItem = ClassRegistry::init('IncomeItem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->IncomeItem);

		parent::tearDown();
	}

}
