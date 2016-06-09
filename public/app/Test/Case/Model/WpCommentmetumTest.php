<?php
App::uses('WpCommentmetum', 'Model');

/**
 * WpCommentmetum Test Case
 *
 */
class WpCommentmetumTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.wp_commentmetum',
		'app.meta',
		'app.comment'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->WpCommentmetum = ClassRegistry::init('WpCommentmetum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->WpCommentmetum);

		parent::tearDown();
	}

}
