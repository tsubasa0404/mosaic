<?php
App::uses('WpUsermetum', 'Model');

/**
 * WpUsermetum Test Case
 *
 */
class WpUsermetumTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.wp_usermetum',
		'app.umeta',
		'app.user',
		'app.user_role'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->WpUsermetum = ClassRegistry::init('WpUsermetum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->WpUsermetum);

		parent::tearDown();
	}

}
