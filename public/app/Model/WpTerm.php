<?php
App::uses('AppModel', 'Model');
/**
 * WpTerm Model
 *
 * @property Term $Term
 */
class WpTerm extends AppModel {



    public $primaryKey = 'term_id';

    public $displayField = 'name';

    // hasMany associations
    public $hasMany = array(
        'TermTaxonomy' => array(
            'className'    => 'TermTaxonomy',
            'foreignKey'   => 'term_id',
            'dependent'    => false,
        )
    );

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'slug' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
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
	// public $belongsTo = array(
	// 	'Term' => array(
	// 		'className' => 'Term',
	// 		'foreignKey' => 'term_id',
	// 		'conditions' => '',
	// 		'fields' => '',
	// 		'order' => ''
	// 	)
	// );
}
