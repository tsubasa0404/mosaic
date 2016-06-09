<?php
App::uses('WpComment', 'Model');

/**
 * WpComment Test Case
 *
 */
class WpCommentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.wp_comment',
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
		$this->WpComment = ClassRegistry::init('WpComment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->WpComment);

		parent::tearDown();
	}

}
