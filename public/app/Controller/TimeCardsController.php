<?php
App::uses('AppController', 'Controller');
/**
 * TimeCards Controller
 *
 * @property TimeCard $TimeCard
 * @property PaginatorComponent $Paginator
 */
class TimeCardsController extends AppController {

public $uses = array(
  	'ArosAco',
  	'Career',
  	'Client',
  	'Employee',
  	'EmployeeGroup',
  	'GoalSetting',
  	'GoalType',
  	'MosaicType',
  	'MosaicSize',
  	'Order',
  	'PayCutType',
  	'StatusType',
  	'TimeCard',
  	'User',
  	'UserRole',
  );
  public $components = array('Session', 'Paginator', 'Auth',);
  public $helpers    = array('Form', 'Html', 'Btn');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TimeCard->recursive = 0;
		$this->set('timeCards', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TimeCard->exists($id)) {
			throw new NotFoundException(__('Invalid time card'));
		}
		$options = array('conditions' => array('TimeCard.' . $this->TimeCard->primaryKey => $id));
		$this->set('timeCard', $this->TimeCard->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */

	public function addAjax(){
		$this->autoRender = false;
		// if($this->RequestHandler->isAjax()){
		// 	Configure::write('debug', 0);
		// }
		if($this->request->is('ajax')){
			$this->TimeCard->create();
			if ($this->TimeCard->save($this->request->data)) {
				echo $this->TimeCard->getLastInsertID();
				// return $this->Session->setFlash('The time card has been saved.', 'flash_success');
			} else {
				return $this->Session->setFlash('The time card could not be saved. Please, try again.', 'flash_failure');
			}
		}
	}


	public function add() {
		if ($this->request->is('post')) {
			$this->TimeCard->create();
			if ($this->TimeCard->save($this->request->data)) {
				$this->Session->setFlash('The time card has been saved.', 'flash_success');
				return $this->redirect(array('controller' => 'users', 'action' => 'dashboard'));
			} else {
				$this->Session->setFlash('The time card could not be saved. Please, try again.', 'flash_failure');
			}
		}
		$employees = $this->TimeCard->Employee->find('list');
		$payCutTypes = $this->TimeCard->PayCutType->find('list');
		$this->set(compact('employees', 'payCutTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TimeCard->exists($id)) {
			throw new NotFoundException(__('Invalid time card'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TimeCard->save($this->request->data)) {
				$this->Session->setFlash(__('The time card has been saved.'),'flash_success');
				return $this->redirect(array('controller' => 'users', 'action' => 'dashboard'));
			} else {
				$this->Session->setFlash(__('The time card could not be saved. Please, try again.'), 'flash_failure');
			}
		} else {
			$options = array('conditions' => array('TimeCard.' . $this->TimeCard->primaryKey => $id));
			$this->request->data = $this->TimeCard->find('first', $options);
		}
		$employees = $this->TimeCard->Employee->get_employee_list();
		$payCutTypes = $this->TimeCard->PayCutType->get_pay_cut_type_list();
		$this->set(compact('employees', 'payCutTypes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TimeCard->id = $id;
		if (!$this->TimeCard->exists()) {
			throw new NotFoundException(__('Invalid time card'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TimeCard->delete()) {
			$this->Session->setFlash(__('The time card has been deleted.'));
		} else {
			$this->Session->setFlash(__('The time card could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
