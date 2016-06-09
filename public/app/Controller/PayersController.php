<?php
App::uses('AppController', 'Controller');
/**
 * Payers Controller
 *
 * @property Payer $Payer
 * @property PaginatorComponent $Paginator
 */
class PayersController extends AppController {

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
		$this->Payer->recursive = 0;
		$this->set('payers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Payer->exists($id)) {
			throw new NotFoundException(__('Invalid payer'));
		}
		$options = array('conditions' => array('Payer.' . $this->Payer->primaryKey => $id));
		$this->set('payer', $this->Payer->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Payer->create();
			if ($this->Payer->save($this->request->data)) {
				$this->Session->setFlash(__('The payer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The payer could not be saved. Please, try again.'));
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
		if (!$this->Payer->exists($id)) {
			throw new NotFoundException(__('Invalid payer'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Payer->save($this->request->data)) {
				$this->Session->setFlash(__('The payer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The payer could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Payer.' . $this->Payer->primaryKey => $id));
			$this->request->data = $this->Payer->find('first', $options);
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
		$this->Payer->id = $id;
		if (!$this->Payer->exists()) {
			throw new NotFoundException(__('Invalid payer'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Payer->delete()) {
			$this->Session->setFlash(__('The payer has been deleted.'));
		} else {
			$this->Session->setFlash(__('The payer could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
