<?php
App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');
/**
 * User Model
 *
 * @property UserRole $UserRole
 */
class User extends AppModel {
	public $name = 'User';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'username' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'user_role_id' => array(
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
		'UserRole' => array(
			'className' => 'UserRole',
			'foreignKey' => 'user_role_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	public $actsAs = array('Acl' => array('type' => 'requester'));
	public function parentNode() {
    if (!$this->id && empty($this->data)) {
        return null;
    }
    if (isset($this->data['User']['user_role_id'])) {
        $userRoleId = $this->data['User']['user_role_id'];
    } else {
        $userRoleId = $this->field('user_role_id');
    }
    if (!$userRoleId) {
        return null;
    } else {
        return array('UserRole' => array('id' => $userRoleId));
    }
  }

	public function beforeSave($options = array()) {
	  $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
	  return true;
  }
}
