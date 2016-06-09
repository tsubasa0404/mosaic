<?php
App::uses('AppController', 'Controller');
/**
 * EmployeeGroups Controller
 *
 * @property EmployeeGroup $EmployeeGroup
 * @property PaginatorComponent $Paginator
 */
class EmployeeGroupsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EmployeeGroup->recursive = 0;
		$this->set('employeeGroups', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EmployeeGroup->exists($id)) {
			throw new NotFoundException(__('Invalid employee group'));
		}
		$options = array('conditions' => array('EmployeeGroup.' . $this->EmployeeGroup->primaryKey => $id));
		$this->set('employeeGroup', $this->EmployeeGroup->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EmployeeGroup->create();
			if ($this->EmployeeGroup->save($this->request->data)) {
				$this->Session->setFlash(__('The employee group has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employee group could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->EmployeeGroup->exists($id)) {
			throw new NotFoundException(__('Invalid employee group'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EmployeeGroup->save($this->request->data)) {
				$this->Session->setFlash(__('The employee group has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employee group could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EmployeeGroup.' . $this->EmployeeGroup->primaryKey => $id));
			$this->request->data = $this->EmployeeGroup->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->EmployeeGroup->id = $id;
		if (!$this->EmployeeGroup->exists()) {
			throw new NotFoundException(__('Invalid employee group'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->EmployeeGroup->delete()) {
			$this->Session->setFlash(__('The employee group has been deleted.'));
		} else {
			$this->Session->setFlash(__('The employee group could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
