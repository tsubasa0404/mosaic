<?php
App::uses('AppModel', 'Model');
/**
 * WpPostmetum Model
 *
 * @property Meta $Meta
 * @property Post $Post
 */
class WpPostmetum extends AppModel {




    public $primaryKey = 'meta_id';

    // belongsTo associations
    public $belongsTo = array(
        'Post' => array(
            'className'  => 'Post',
            'foreignKey' => 'post_id',
        )
    );

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
		'Post' => array(
			'className' => 'Post',
			'foreignKey' => 'post_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
