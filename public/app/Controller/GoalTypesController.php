<?php
App::uses('AppController', 'Controller');
/**
 * GoalTypes Controller
 *
 * @property GoalType $GoalType
 * @property PaginatorComponent $Paginator
 */
class GoalTypesController extends AppController {

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
		$this->GoalType->recursive = 0;
		$this->set('goalTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->GoalType->exists($id)) {
			throw new NotFoundException(__('Invalid goal type'));
		}
		$options = array('conditions' => array('GoalType.' . $this->GoalType->primaryKey => $id));
		$this->set('goalType', $this->GoalType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GoalType->create();
			if ($this->GoalType->save($this->request->data)) {
				$this->Session->setFlash(__('The goal type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The goal type could not be saved. Please, try again.'));
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
		if (!$this->GoalType->exists($id)) {
			throw new NotFoundException(__('Invalid goal type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->GoalType->save($this->request->data)) {
				$this->Session->setFlash(__('The goal type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The goal type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('GoalType.' . $this->GoalType->primaryKey => $id));
			$this->request->data = $this->GoalType->find('first', $options);
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
		$this->GoalType->id = $id;
		if (!$this->GoalType->exists()) {
			throw new NotFoundException(__('Invalid goal type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->GoalType->delete()) {
			$this->Session->setFlash(__('The goal type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The goal type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
