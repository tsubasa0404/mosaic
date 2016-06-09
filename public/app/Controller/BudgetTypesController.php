<?php
App::uses('AppController', 'Controller');
/**
 * BudgetTypes Controller
 *
 * @property BudgetType $BudgetType
 * @property PaginatorComponent $Paginator
 */
class BudgetTypesController extends AppController {

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
		$this->BudgetType->recursive = 0;
		$this->set('budgetTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->BudgetType->exists($id)) {
			throw new NotFoundException(__('Invalid budget type'));
		}
		$options = array('conditions' => array('BudgetType.' . $this->BudgetType->primaryKey => $id));
		$this->set('budgetType', $this->BudgetType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BudgetType->create();
			if ($this->BudgetType->save($this->request->data)) {
				$this->Session->setFlash(__('The budget type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The budget type could not be saved. Please, try again.'));
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
		if (!$this->BudgetType->exists($id)) {
			throw new NotFoundException(__('Invalid budget type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->BudgetType->save($this->request->data)) {
				$this->Session->setFlash(__('The budget type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The budget type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('BudgetType.' . $this->BudgetType->primaryKey => $id));
			$this->request->data = $this->BudgetType->find('first', $options);
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
		$this->BudgetType->id = $id;
		if (!$this->BudgetType->exists()) {
			throw new NotFoundException(__('Invalid budget type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->BudgetType->delete()) {
			$this->Session->setFlash(__('The budget type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The budget type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
