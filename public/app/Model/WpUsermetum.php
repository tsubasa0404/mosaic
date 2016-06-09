<?php
App::uses('AppModel', 'Model');
/**
 * WpUsermetum Model
 *
 * @property Umeta $Umeta
 * @property User $User
 */
class WpUsermetum extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Umeta' => array(
			'className' => 'Umeta',
			'foreignKey' => 'umeta_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
