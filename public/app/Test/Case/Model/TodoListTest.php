<?php
App::uses('TodoList', 'Model');

/**
 * TodoList Test Case
 *
 */
class TodoListTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.todo_list',
		'app.employee',
		'app.career',
		'app.employee_group',
		'app.priority_type',
		'app.status_type',
		'app.order',
		'app.client',
		'app.mosaic_type',
		'app.mosaic_size',
		'app.task_record'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TodoList = ClassRegistry::init('TodoList');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TodoList);

		parent::tearDown();
	}

}
