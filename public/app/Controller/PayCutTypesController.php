<?php
App::uses('AppController', 'Controller');
/**
 * PayCutTypes Controller
 *
 * @property PayCutType $PayCutType
 * @property PaginatorComponent $Paginator
 */
class PayCutTypesController extends AppController {

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
		$this->PayCutType->recursive = 0;
		$this->set('payCutTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PayCutType->exists($id)) {
			throw new NotFoundException(__('Invalid pay cut type'));
		}
		$options = array('conditions' => array('PayCutType.' . $this->PayCutType->primaryKey => $id));
		$this->set('payCutType', $this->PayCutType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PayCutType->create();
			if ($this->PayCutType->save($this->request->data)) {
				$this->Session->setFlash(__('The pay cut type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pay cut type could not be saved. Please, try again.'));
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
		if (!$this->PayCutType->exists($id)) {
			throw new NotFoundException(__('Invalid pay cut type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PayCutType->save($this->request->data)) {
				$this->Session->setFlash(__('The pay cut type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pay cut type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PayCutType.' . $this->PayCutType->primaryKey => $id));
			$this->request->data = $this->PayCutType->find('first', $options);
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
		$this->PayCutType->id = $id;
		if (!$this->PayCutType->exists()) {
			throw new NotFoundException(__('Invalid pay cut type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PayCutType->delete()) {
			$this->Session->setFlash(__('The pay cut type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The pay cut type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
