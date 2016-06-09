<?php
App::uses('WpLink', 'Model');

/**
 * WpLink Test Case
 *
 */
class WpLinkTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.wp_link',
		'app.link'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->WpLink = ClassRegistry::init('WpLink');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->WpLink);

		parent::tearDown();
	}

}
