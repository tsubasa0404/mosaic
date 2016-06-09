<?php
/**
 * WpCommentFixture
 *
 */
class WpCommentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'comment_ID' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'comment_post_ID' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'unsigned' => true, 'key' => 'index'),
		'comment_author' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'comment_author_email' => array('type' => 'string', 'null' => false, 'length' => 100, 'key' => 'index', 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'comment_author_url' => array('type' => 'string', 'null' => false, 'length' => 200, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'comment_author_IP' => array('type' => 'string', 'null' => false, 'length' => 100, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'comment_date' => array('type' => 'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'comment_date_gmt' => array('type' => 'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00', 'key' => 'index'),
		'comment_content' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'comment_karma' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'comment_approved' => array('type' => 'string', 'null' => false, 'default' => '1', 'length' => 20, 'key' => 'index', 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'comment_agent' => array('type' => 'string', 'null' => false, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'comment_type' => array('type' => 'string', 'null' => false, 'length' => 20, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'comment_parent' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'unsigned' => true, 'key' => 'index'),
		'user_id' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'unsigned' => true),
		'indexes' => array(
			'PRIMARY' => array('column' => 'comment_ID', 'unique' => 1),
			'comment_post_ID' => array('column' => 'comment_post_ID', 'unique' => 0),
			'comment_approved_date_gmt' => array('column' => array('comment_approved', 'comment_date_gmt'), 'unique' => 0),
			'comment_date_gmt' => array('column' => 'comment_date_gmt', 'unique' => 0),
			'comment_parent' => array('column' => 'comment_parent', 'unique' => 0),
			'comment_author_email' => array('column' => 'comment_author_email', 'unique' => 0, 'length' => array('comment_author_email' => '10'))
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
			'comment_ID' => '',
			'comment_post_ID' => '',
			'comment_author' => 'Lorem ipsum dolor sit amet',
			'comment_author_email' => 'Lorem ipsum dolor sit amet',
			'comment_author_url' => 'Lorem ipsum dolor sit amet',
			'comment_author_IP' => 'Lorem ipsum dolor sit amet',
			'comment_date' => '2016-03-01 08:41:13',
			'comment_date_gmt' => '2016-03-01 08:41:13',
			'comment_content' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'comment_karma' => 1,
			'comment_approved' => 'Lorem ipsum dolor ',
			'comment_agent' => 'Lorem ipsum dolor sit amet',
			'comment_type' => 'Lorem ipsum dolor ',
			'comment_parent' => '',
			'user_id' => ''
		),
	);

}
