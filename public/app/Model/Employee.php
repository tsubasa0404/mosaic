<?php
App::uses('AppModel', 'Model');
/**
 * Employee Model
 *
 * @property Career $Career
 * @property EmployeeGroup $EmployeeGroup
 * @property TodoList $TodoList
 */
class Employee extends AppModel {
	public $name = 'Employee';

  public function get_employee_list(){
    $this->recursive = -1;
    $options = array(
      'fields' => array(
        'id',
        'employee_no',
      ),
      'conditions' => array('terminated_date' => null)
      );
    return $employee_list = $this->find('list', $options);
  }

  public function get_all_employee_count(){
    $this->recursive = -1;
    $options = array(
      'fields' => array(
        'id',
        'employee_no',
        'count(id) as cnt'
      ),
      'order' => array('id' => 'ASC')
      );
    $all_employee_list = $this->find('all', $options);
    return (int)$all_employee_list[0][0]['cnt'];
  }

	/**
 * [_setEmployeeList description]
 * team member list用に情報を取得
 */
  public function get_team_member_list(){
  	$options = array();

  	$options['joins'][] = array(
  		'type' => 'LEFT',
  		'table' => 'task_records',
  		'alias' => 'TaskRecord',
  		'conditions' => '`Employee`.`id` = `TaskRecord`.`employee_id`',
  		);
  	$options['joins'][] = array(
  		'type' => 'LEFT',
  		'table' => 'careers',
  		'alias' => 'Career1',
  		'conditions' => '`Employee`.`career_id` = `Career1`.`id`',
  		);

  	$options['fields'] = array(
  		'Employee.id',
  		'Employee.employee_no',
  		'Employee.birthday',
      'Career1.id',
  		'Career1.career',
  		'Employee.tel',
  		'Employee.address',
  		'Employee.occupation',
  		'Employee.prof_img',
  		'Employee.start_date',
  		'sum(TaskRecord.edit_point) as sumEditPoint',
  		'sum(TaskRecord.edit_length) as sumEditLength'
  		);
  	$options['order'] = array('sumEditPoint' => 'DESC');
    $options['conditions'] = array('Employee.terminated_date IS NULL');
    $options['group'] = array('Employee.id');
  	$employeeList = $this->find('all', $options);
  	return $employeeList;
  }


  public function get_employee_prof($employee_id){
    $options = array();
    $options['recursive'] = -1;
    $options['conditions'] = array('Employee.id' => $employee_id);
    $options['joins'][] = array(
      'type' => 'LEFT',
      'table' => 'task_records',
      'alias' => 'TaskRecord',
      'conditions' => '`Employee`.`id` = `TaskRecord`.`employee_id`',
      );
    $options['joins'][] = array(
      'type' => 'LEFT',
      'table' => 'careers',
      'alias' => 'Career',
      'conditions' => '`Employee`.`career_id` = `Career`.`id`',
      );
    $options['fields'] = array(
      'Employee.id', 'Employee.employee_no','Employee.first_name','Employee.family_name', 'Employee.birthday','Employee.tel','Employee.address','Employee.occupation','Employee.prof_img','Career.career', 'Employee.start_date', 'Career.basic_salary','Career.id',
      'sum(TaskRecord.edit_point) as sumEditPoint','sum(TaskRecord.edit_length) as sumEditLength'
      );
    $employeeProf = $this->find('all', $options);
    return $employeeProf;
  }

  public function get_last_id(){
    $options['order'] = array('id' => 'DESC');
    $options['fields'] = array('id');
    return $last_id = $this->find('first', $options);
  }


/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'first_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'family_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'employee_no' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'sex' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'birthday' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'career_id' => array(
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
		'Career' => array(
			'className' => 'Career',
			'foreignKey' => 'career_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'EmployeeGroup' => array(
			'className' => 'EmployeeGroup',
			'foreignKey' => 'employee_group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'TodoList' => array(
			'className' => 'TodoList',
			'foreignKey' => 'employee_id',
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
