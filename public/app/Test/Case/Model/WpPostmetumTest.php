<?php
App::uses('WpPostmetum', 'Model');

/**
 * WpPostmetum Test Case
 *
 */
class WpPostmetumTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.wp_postmetum',
		'app.meta',
		'app.post'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->WpPostmetum = ClassRegistry::init('WpPostmetum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->WpPostmetum);

		parent::tearDown();
	}

}
