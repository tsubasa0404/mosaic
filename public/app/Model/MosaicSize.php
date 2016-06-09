<?php
App::uses('AppModel', 'Model');
/**
 * MosaicSize Model
 *
 * @property Order $Order
 */
class MosaicSize extends AppModel {
	public $name = 'MosaicSize';

	public function get_mosaic_size_list(){
		$this->recursive = 0;
		$mosaic_size_list = $this->find('list', array(
			'fields' => array('id', 'mosaic_size'),
			'order' => array('MosaicSize.mosaic_size' => 'ASC')
			));
		return $mosaic_size_list;
	}

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'mosaic_size' => array(
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Order' => array(
			'className' => 'Order',
			'foreignKey' => 'mosaic_size_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
