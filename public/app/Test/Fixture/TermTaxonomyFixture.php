<?php
/**
 * TermTaxonomyFixture
 *
 */
class TermTaxonomyFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'term_taxonomy';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'term_taxonomy_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'term_id' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'unsigned' => true, 'key' => 'index'),
		'taxonomy' => array('type' => 'string', 'null' => false, 'length' => 32, 'key' => 'index', 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'description' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'charset' => 'utf8mb4'),
		'parent' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'unsigned' => true),
		'count' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'term_taxonomy_id', 'unique' => 1),
			'term_id_taxonomy' => array('column' => array('term_id', 'taxonomy'), 'unique' => 1),
			'taxonomy' => array('column' => 'taxonomy', 'unique' => 0)
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
			'term_taxonomy_id' => '',
			'term_id' => '',
			'taxonomy' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'parent' => '',
			'count' => ''
		),
	);

}
