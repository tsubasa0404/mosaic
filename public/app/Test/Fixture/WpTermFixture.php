<?php
/**
 * WpTermFixture
 *
 */
class WpTermFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'term_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'length' => 200, 'key' => 'index', 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'slug' => array('type' => 'string', 'null' => false, 'length' => 200, 'key' => 'index', 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'term_group' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'length' => 10, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'term_id', 'unique' => 1),
			'slug' => array('column' => 'slug', 'unique' => 0, 'length' => array('slug' => '191')),
			'name' => array('column' => 'name', 'unique' => 0, 'length' => array('name' => '191'))
		),
		'tableParameters' => array('charset' => 'utf8mb4', 'collate' => 'utf8mb4_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'term_id' => '',
			'name' => 'Lorem ipsum dolor sit amet',
			'slug' => 'Lorem ipsum dolor sit amet',
			'term_group' => ''
		),
	);

}
