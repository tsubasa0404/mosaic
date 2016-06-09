<?php
App::uses('AppController', 'Controller');
/**
 * WpUsers Controller
 *
 * @property WpUser $WpUser
 * @property PaginatorComponent $Paginator
 */
class WpUsersController extends AppController {

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
		$this->WpUser->recursive = 0;
		$this->set('wpUsers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->WpUser->exists($id)) {
			throw new NotFoundException(__('Invalid wp user'));
		}
		$options = array('conditions' => array('WpUser.' . $this->WpUser->primaryKey => $id));
		$this->set('wpUser', $this->WpUser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->WpUser->create();
			if ($this->WpUser->save($this->request->data)) {
				$this->Session->setFlash(__('The wp user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wp user could not be saved. Please, try again.'));
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
		if (!$this->WpUser->exists($id)) {
			throw new NotFoundException(__('Invalid wp user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->WpUser->save($this->request->data)) {
				$this->Session->setFlash(__('The wp user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wp user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('WpUser.' . $this->WpUser->primaryKey => $id));
			$this->request->data = $this->WpUser->find('first', $options);
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
		$this->WpUser->id = $id;
		if (!$this->WpUser->exists()) {
			throw new NotFoundException(__('Invalid wp user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->WpUser->delete()) {
			$this->Session->setFlash(__('The wp user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The wp user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
