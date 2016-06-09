<?php
App::uses('AppModel', 'Model');
/**
 * Client Model
 *
 * @property Order $Order
 */
class Client extends AppModel {
	public $name = 'Client';

	public function get_client_list(){
		$this->recursive = 0;
		$clients = $this->find('all');
		$client_list = Hash::combine($clients, '{n}.Client.id', '{n}.Client.client');
		return $client_list;
	}

	public function get_client_option(){
		$client_option = $this->find('list', array(
			'fields' => array('id', 'client'),
			'order' => array('client' => 'Asc')
		));
		return $client_option;
	}

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'client' => array(
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
			'foreignKey' => 'client_id',
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
