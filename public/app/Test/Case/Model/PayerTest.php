<?php
App::uses('Payer', 'Model');

/**
 * Payer Test Case
 *
 */
class PayerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.payer',
		'app.income'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Payer = ClassRegistry::init('Payer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Payer);

		parent::tearDown();
	}

}
