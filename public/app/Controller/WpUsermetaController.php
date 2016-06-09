<?php
App::uses('AppController', 'Controller');
/**
 * WpUsermeta Controller
 *
 * @property WpUsermetum $WpUsermetum
 * @property PaginatorComponent $Paginator
 */
class WpUsermetaController extends AppController {

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
		$this->WpUsermetum->recursive = 0;
		$this->set('wpUsermeta', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->WpUsermetum->exists($id)) {
			throw new NotFoundException(__('Invalid wp usermetum'));
		}
		$options = array('conditions' => array('WpUsermetum.' . $this->WpUsermetum->primaryKey => $id));
		$this->set('wpUsermetum', $this->WpUsermetum->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->WpUsermetum->create();
			if ($this->WpUsermetum->save($this->request->data)) {
				$this->Session->setFlash(__('The wp usermetum has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wp usermetum could not be saved. Please, try again.'));
			}
		}
		$umetas = $this->WpUsermetum->Umetum->find('list');
		$users = $this->WpUsermetum->User->find('list');
		$this->set(compact('umetas', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->WpUsermetum->exists($id)) {
			throw new NotFoundException(__('Invalid wp usermetum'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->WpUsermetum->save($this->request->data)) {
				$this->Session->setFlash(__('The wp usermetum has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wp usermetum could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('WpUsermetum.' . $this->WpUsermetum->primaryKey => $id));
			$this->request->data = $this->WpUsermetum->find('first', $options);
		}
		$umetas = $this->WpUsermetum->Umetum->find('list');
		$users = $this->WpUsermetum->User->find('list');
		$this->set(compact('umetas', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->WpUsermetum->id = $id;
		if (!$this->WpUsermetum->exists()) {
			throw new NotFoundException(__('Invalid wp usermetum'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->WpUsermetum->delete()) {
			$this->Session->setFlash(__('The wp usermetum has been deleted.'));
		} else {
			$this->Session->setFlash(__('The wp usermetum could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
