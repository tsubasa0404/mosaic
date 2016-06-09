<?php
App::uses('WpOption', 'Model');

/**
 * WpOption Test Case
 *
 */
class WpOptionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.wp_option',
		'app.option'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->WpOption = ClassRegistry::init('WpOption');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->WpOption);

		parent::tearDown();
	}

}
