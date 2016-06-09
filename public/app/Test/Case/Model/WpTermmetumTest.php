<?php
App::uses('WpTermmetum', 'Model');

/**
 * WpTermmetum Test Case
 *
 */
class WpTermmetumTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.wp_termmetum',
		'app.meta',
		'app.term'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->WpTermmetum = ClassRegistry::init('WpTermmetum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->WpTermmetum);

		parent::tearDown();
	}

}
