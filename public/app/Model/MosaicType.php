<?php
App::uses('AppModel', 'Model');
/**
 * MosaicType Model
 *
 * @property Order $Order
 */
class MosaicType extends AppModel {
	public $name = 'MosaicType';

	public function get_mosaic_type_list(){
		$this->recursive = 0;
		$mosaic_type_list = $this->find('list', array(
			'fields' => array('id', 'mosaic_type'),
			'order'  => array('MosaicType.id' => 'ASC')
		));
		return $mosaic_type_list;
	}



/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'mosaic_type' => array(
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
			'foreignKey' => 'mosaic_type_id',
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
