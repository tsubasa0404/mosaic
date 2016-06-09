<?php
App::uses('WpTerm', 'Model');

/**
 * WpTerm Test Case
 *
 */
class WpTermTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.wp_term',
		'app.term'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->WpTerm = ClassRegistry::init('WpTerm');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->WpTerm);

		parent::tearDown();
	}

}
