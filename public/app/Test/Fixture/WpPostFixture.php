<?php
/**
 * WpPostFixture
 *
 */
class WpPostFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'post_author' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'unsigned' => true, 'key' => 'index'),
		'post_date' => array('type' => 'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'post_date_gmt' => array('type' => 'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'post_content' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'post_title' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'post_excerpt' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'post_status' => array('type' => 'string', 'null' => false, 'default' => 'publish', 'length' => 20, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'comment_status' => array('type' => 'string', 'null' => false, 'default' => 'open', 'length' => 20, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'ping_status' => array('type' => 'string', 'null' => false, 'default' => 'open', 'length' => 20, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'post_password' => array('type' => 'string', 'null' => false, 'length' => 20, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'post_name' => array('type' => 'string', 'null' => false, 'length' => 200, 'key' => 'index', 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'to_ping' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'pinged' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'post_modified' => array('type' => 'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'post_modified_gmt' => array('type' => 'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'post_content_filtered' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'post_parent' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'unsigned' => true, 'key' => 'index'),
		'guid' => array('type' => 'string', 'null' => false, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'menu_order' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'post_type' => array('type' => 'string', 'null' => false, 'default' => 'post', 'length' => 20, 'key' => 'index', 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'post_mime_type' => array('type' => 'string', 'null' => false, 'length' => 100, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'comment_count' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID', 'unique' => 1),
			'post_name' => array('column' => 'post_name', 'unique' => 0, 'length' => array('post_name' => '191')),
			'type_status_date' => array('column' => array('post_type', 'post_status', 'post_date', 'ID'), 'unique' => 0),
			'post_parent' => array('column' => 'post_parent', 'unique' => 0),
			'post_author' => array('column' => 'post_author', 'unique' => 0)
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
			'post_author' => '',
			'post_date' => '2016-03-01 08:40:53',
			'post_date_gmt' => '2016-03-01 08:40:53',
			'post_content' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'post_title' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'post_excerpt' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'post_status' => 'Lorem ipsum dolor ',
			'comment_status' => 'Lorem ipsum dolor ',
			'ping_status' => 'Lorem ipsum dolor ',
			'post_password' => 'Lorem ipsum dolor ',
			'post_name' => 'Lorem ipsum dolor sit amet',
			'to_ping' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'pinged' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'post_modified' => '2016-03-01 08:40:53',
			'post_modified_gmt' => '2016-03-01 08:40:53',
			'post_content_filtered' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'post_parent' => '',
			'guid' => 'Lorem ipsum dolor sit amet',
			'menu_order' => 1,
			'post_type' => 'Lorem ipsum dolor ',
			'post_mime_type' => 'Lorem ipsum dolor sit amet',
			'comment_count' => ''
		),
	);

}
