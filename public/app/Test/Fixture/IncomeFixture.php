<?php
/**
 * IncomeFixture
 *
 */
class IncomeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'date' => array('type' => 'date', 'null' => true, 'default' => null),
		'project_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'income_item_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'price' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'budget_type_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'currency_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'payer_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'note' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'project_idx' => array('column' => 'project_id', 'unique' => 0),
			'income_item_idx' => array('column' => 'income_item_id', 'unique' => 0),
			'budget_type_idx' => array('column' => 'budget_type_id', 'unique' => 0),
			'currency_idx' => array('column' => 'currency_id', 'unique' => 0),
			'payer_idx' => array('column' => 'payer_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'date' => '2016-02-16',
			'project_id' => 1,
			'income_item_id' => 1,
			'price' => 1,
			'budget_type_id' => 1,
			'currency_id' => 1,
			'payer_id' => 1,
			'note' => 'Lorem ipsum dolor sit amet'
		),
	);

}
