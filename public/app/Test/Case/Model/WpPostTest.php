<?php
App::uses('WpPost', 'Model');

/**
 * WpPost Test Case
 *
 */
class WpPostTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.wp_post'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->WpPost = ClassRegistry::init('WpPost');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->WpPost);

		parent::tearDown();
	}

}
