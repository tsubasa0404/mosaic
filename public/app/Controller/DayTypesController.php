<?php
App::uses('AppController', 'Controller');
/**
 * DayTypes Controller
 *
 * @property DayType $DayType
 * @property PaginatorComponent $Paginator
 */
class DayTypesController extends AppController {

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
		$this->DayType->recursive = 0;
		$this->set('dayTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DayType->exists($id)) {
			throw new NotFoundException(__('Invalid day type'));
		}
		$options = array('conditions' => array('DayType.' . $this->DayType->primaryKey => $id));
		$this->set('dayType', $this->DayType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DayType->create();
			if ($this->DayType->save($this->request->data)) {
				$this->Session->setFlash(__('The day type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The day type could not be saved. Please, try again.'));
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
		if (!$this->DayType->exists($id)) {
			throw new NotFoundException(__('Invalid day type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DayType->save($this->request->data)) {
				$this->Session->setFlash(__('The day type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The day type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DayType.' . $this->DayType->primaryKey => $id));
			$this->request->data = $this->DayType->find('first', $options);
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
		$this->DayType->id = $id;
		if (!$this->DayType->exists()) {
			throw new NotFoundException(__('Invalid day type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DayType->delete()) {
			$this->Session->setFlash(__('The day type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The day type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
