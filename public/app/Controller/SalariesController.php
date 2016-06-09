<?php
App::uses('AppController', 'Controller');
/**
 * Salaries Controller
 *
 * @property Salary $Salary
 * @property PaginatorComponent $Paginator
 */
class SalariesController extends AppController {
	public $uses = array(
		'Salary',
  	'User',
  	'Career',
  	'Employee',
  	'EmployeeGroup',
  	'GoalSetting',
  	'GoalType',
    'MosaicSize',
    'MosaicType',
    'Order',
    'PayCutType',
  	'TimeCard',
  	'TaskRecord',
  	'UserRole',
  );
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Auth');
  public $helpers    = array('Form', 'Html', 'Btn');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Salary->recursive = 0;
		$this->set('salaries', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Salary->exists($id)) {
			throw new NotFoundException(__('Invalid salary'));
		}
		$options = array('conditions' => array('Salary.' . $this->Salary->primaryKey => $id));
		$this->set('salary', $this->Salary->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Salary->create();
			$month_day = $this->request->data['Salary']['month']."-01";
			$this->request->data['Salary']['month'] = $month_day;
			//var_dump($this->request->data);
      //die();
			if ($this->Salary->save($this->request->data)) {
				$this->Session->setFlash('The salary sheet has been saved.', 'flash_success');
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash('The salary sheet could not be saved. Please, try again.', 'flash_failure');
			}
		}
		$employees = $this->Salary->Employee->find('list');
		$this->set(compact('employees'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Salary->exists($id)) {
			throw new NotFoundException(__('Invalid salary'));
		}
		if ($this->request->is(array('post', 'put'))) {
      $employee_id = $this->request->data['Salary']['employee_id'];
			if ($this->Salary->save($this->request->data)) {
				$this->Session->setFlash(__('The salary has been saved.'), 'flash_success');
				return $this->redirect(array('controller' => 'employees', 'action' => 'profile',$employee_id));
			} else {
				$this->Session->setFlash(__('The salary could not be saved. Please, try again.'), 'flash_failure');
			}
		} else {
			$options = array('conditions' => array('Salary.' . $this->Salary->primaryKey => $id));
			$this->request->data = $this->Salary->find('first', $options);
		}
		$employees = $this->Salary->Employee->find('list');
		$this->set(compact('employees'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Salary->id = $id;
		if (!$this->Salary->exists()) {
			throw new NotFoundException(__('Invalid salary'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Salary->delete()) {
			$this->Session->setFlash(__('The salary has been deleted.'));
		} else {
			$this->Session->setFlash(__('The salary could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
