<?php
App::uses('AppModel', 'Model');
/**
 * WpTermmetum Model
 *
 * @property Meta $Meta
 * @property Term $Term
 */
class WpTermmetum extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Meta' => array(
			'className' => 'Meta',
			'foreignKey' => 'meta_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Term' => array(
			'className' => 'Term',
			'foreignKey' => 'term_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
