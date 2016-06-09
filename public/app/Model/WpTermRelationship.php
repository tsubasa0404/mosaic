<?php
App::uses('AppModel', 'Model');
/**
 * WpTermRelationship Model
 *
 * @property Object $Object
 * @property TermTaxonomy $TermTaxonomy
 */
class WpTermRelationship extends AppModel {



    public $primaryKey = 'object_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'term_order' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Object' => array(
			'className' => 'Object',
			'foreignKey' => 'object_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TermTaxonomy' => array(
			'className' => 'TermTaxonomy',
			'foreignKey' => 'term_taxonomy_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
