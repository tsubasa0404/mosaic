<?php
/**
 * WpLinkFixture
 *
 */
class WpLinkFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'link_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'link_url' => array('type' => 'string', 'null' => false, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'link_name' => array('type' => 'string', 'null' => false, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'link_image' => array('type' => 'string', 'null' => false, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'link_target' => array('type' => 'string', 'null' => false, 'length' => 25, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'link_description' => array('type' => 'string', 'null' => false, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'link_visible' => array('type' => 'string', 'null' => false, 'default' => 'Y', 'length' => 20, 'key' => 'index', 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'link_owner' => array('type' => 'biginteger', 'null' => false, 'default' => '1', 'unsigned' => true),
		'link_rating' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'link_updated' => array('type' => 'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'link_rel' => array('type' => 'string', 'null' => false, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'link_notes' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'link_rss' => array('type' => 'string', 'null' => false, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'link_id', 'unique' => 1),
			'link_visible' => array('column' => 'link_visible', 'unique' => 0)
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
			'link_id' => '',
			'link_url' => 'Lorem ipsum dolor sit amet',
			'link_name' => 'Lorem ipsum dolor sit amet',
			'link_image' => 'Lorem ipsum dolor sit amet',
			'link_target' => 'Lorem ipsum dolor sit a',
			'link_description' => 'Lorem ipsum dolor sit amet',
			'link_visible' => 'Lorem ipsum dolor ',
			'link_owner' => '',
			'link_rating' => 1,
			'link_updated' => '2016-03-01 08:41:08',
			'link_rel' => 'Lorem ipsum dolor sit amet',
			'link_notes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'link_rss' => 'Lorem ipsum dolor sit amet'
		),
	);

}
