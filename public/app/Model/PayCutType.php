<?php
App::uses('AppModel', 'Model');
/**
 * PayCutType Model
 *
 * @property TimeCard $TimeCard
 */
class PayCutType extends AppModel {
	public $name = 'PayCutType';

	public function get_pay_cut_type_list(){
		$this->recursive = 0;

		$options = array(
			'fields' => array(
				'id',
				'type',
			),
			'order' => array('id' => 'ASC'));
		return $pay_cut_type_list = $this->find('list', $options);
	}

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'type' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'amount' => array(
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'TimeCard' => array(
			'className' => 'TimeCard',
			'foreignKey' => 'pay_cut_type_id',
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
