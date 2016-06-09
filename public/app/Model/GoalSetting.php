<?php
App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');
/**
 * GoalSetting Model
 *
 * @property GoalType $GoalType
 */
class GoalSetting extends AppModel {
	public $name = 'GoalSetting';

	public function get_goal_info($this_month_first_day, $goal_type_id){
		$goal_info = $this->find('all',array(
			'conditions' => array(
	      'GoalSetting.month'           => $this_month_first_day,
	      'GoalSetting.goal_type_id'    => $goal_type_id
				),
	    'order'     => array('GoalSetting.modified Desc'),
		));
		if(isset($goal_info)){
        $goal_id       = $goal_info[0]['GoalSetting']['id'];
        $goal_value    = $goal_info[0]['GoalSetting']['goal_value'];
        $goal_formated = number_format($goal_value);
			}
		$goal_info_array = array(
      'goal_id'       => $goal_id,
      'goal_value'    => $goal_value,
      'goal_formated' => $goal_formated
			);
		return $goal_info_array;
	}


/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'month' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'goal_type_id' => array(
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
		'GoalType' => array(
			'className' => 'GoalType',
			'foreignKey' => 'goal_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	/***/
	public function getTeamGoal(){
		return $this->GoalSetting->find('all');
	}
}
