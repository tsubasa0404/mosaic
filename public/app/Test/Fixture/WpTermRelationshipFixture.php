<?php
/**
 * WpTermRelationshipFixture
 *
 */
class WpTermRelationshipFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'object_id' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'unsigned' => true, 'key' => 'primary'),
		'term_taxonomy_id' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'unsigned' => true, 'key' => 'primary'),
		'term_order' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => array('object_id', 'term_taxonomy_id'), 'unique' => 1),
			'term_taxonomy_id' => array('column' => 'term_taxonomy_id', 'unique' => 0)
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
			'object_id' => '',
			'term_taxonomy_id' => '',
			'term_order' => 1
		),
	);

}
