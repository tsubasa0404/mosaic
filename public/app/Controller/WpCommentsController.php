<?php
App::uses('AppController', 'Controller');
/**
 * WpComments Controller
 *
 * @property WpComment $WpComment
 * @property PaginatorComponent $Paginator
 */
class WpCommentsController extends AppController {

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
		$this->WpComment->recursive = 0;
		$this->set('wpComments', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->WpComment->exists($id)) {
			throw new NotFoundException(__('Invalid wp comment'));
		}
		$options = array('conditions' => array('WpComment.' . $this->WpComment->primaryKey => $id));
		$this->set('wpComment', $this->WpComment->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->WpComment->create();
			if ($this->WpComment->save($this->request->data)) {
				$this->Session->setFlash(__('The wp comment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wp comment could not be saved. Please, try again.'));
			}
		}
		$users = $this->WpComment->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->WpComment->exists($id)) {
			throw new NotFoundException(__('Invalid wp comment'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->WpComment->save($this->request->data)) {
				$this->Session->setFlash(__('The wp comment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wp comment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('WpComment.' . $this->WpComment->primaryKey => $id));
			$this->request->data = $this->WpComment->find('first', $options);
		}
		$users = $this->WpComment->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->WpComment->id = $id;
		if (!$this->WpComment->exists()) {
			throw new NotFoundException(__('Invalid wp comment'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->WpComment->delete()) {
			$this->Session->setFlash(__('The wp comment has been deleted.'));
		} else {
			$this->Session->setFlash(__('The wp comment could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
