<?php
App::uses('WpUser', 'Model');

/**
 * WpUser Test Case
 *
 */
class WpUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.wp_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->WpUser = ClassRegistry::init('WpUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->WpUser);

		parent::tearDown();
	}

}
