<?php
/**
 * WpUserFixture
 *
 */
class WpUserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'user_login' => array('type' => 'string', 'null' => false, 'length' => 60, 'key' => 'index', 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'user_pass' => array('type' => 'string', 'null' => false, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'user_nicename' => array('type' => 'string', 'null' => false, 'length' => 50, 'key' => 'index', 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'user_email' => array('type' => 'string', 'null' => false, 'length' => 100, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'user_url' => array('type' => 'string', 'null' => false, 'length' => 100, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'user_registered' => array('type' => 'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'user_activation_key' => array('type' => 'string', 'null' => false, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'user_status' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'display_name' => array('type' => 'string', 'null' => false, 'length' => 250, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID', 'unique' => 1),
			'user_login_key' => array('column' => 'user_login', 'unique' => 0),
			'user_nicename' => array('column' => 'user_nicename', 'unique' => 0)
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
			'ID' => '',
			'user_login' => 'Lorem ipsum dolor sit amet',
			'user_pass' => 'Lorem ipsum dolor sit amet',
			'user_nicename' => 'Lorem ipsum dolor sit amet',
			'user_email' => 'Lorem ipsum dolor sit amet',
			'user_url' => 'Lorem ipsum dolor sit amet',
			'user_registered' => '2016-03-01 08:40:09',
			'user_activation_key' => 'Lorem ipsum dolor sit amet',
			'user_status' => 1,
			'display_name' => 'Lorem ipsum dolor sit amet'
		),
	);

}
