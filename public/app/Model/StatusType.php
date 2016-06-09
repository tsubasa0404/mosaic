<?php
App::uses('AppModel', 'Model');
/**
 * StatusType Model
 *
 * @property Order $Order
 * @property TodoList $TodoList
 */
class StatusType extends AppModel {
	public $name = 'StatusType';

	public function get_status_type_list(){
		$this->recursive = 0;
		$status_type_list = $this->find('list', array(
			'fields' => array('id', 'status'),
			'order'  => array('StatusType.id' => 'ASC')
		));
		return $status_type_list;
	}

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'status' => array(
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
			'foreignKey' => 'status_type_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'TodoList' => array(
			'className' => 'TodoList',
			'foreignKey' => 'status_type_id',
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
