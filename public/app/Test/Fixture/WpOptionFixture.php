<?php
/**
 * WpOptionFixture
 *
 */
class WpOptionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'option_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'option_name' => array('type' => 'string', 'null' => false, 'length' => 191, 'key' => 'unique', 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'option_value' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'autoload' => array('type' => 'string', 'null' => false, 'default' => 'yes', 'length' => 20, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'option_id', 'unique' => 1),
			'option_name' => array('column' => 'option_name', 'unique' => 1)
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
			'option_id' => '',
			'option_name' => 'Lorem ipsum dolor sit amet',
			'option_value' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'autoload' => 'Lorem ipsum dolor '
		),
	);

}
