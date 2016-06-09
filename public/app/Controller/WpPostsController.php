<?php
App::uses('AppController', 'Controller');
/**
 * WpPosts Controller
 *
 * @property WpPost $WpPost
 * @property PaginatorComponent $Paginator
 */
class WpPostsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Auth');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->WpPost->recursive = 0;
		$this->set('wpPosts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->WpPost->exists($id)) {
			throw new NotFoundException(__('Invalid wp post'));
		}
		$options = array('conditions' => array('WpPost.' . $this->WpPost->primaryKey => $id));
		$this->set('wpPost', $this->WpPost->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->WpPost->create();
			if ($this->WpPost->save($this->request->data)) {
				$this->Session->setFlash(__('The wp post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wp post could not be saved. Please, try again.'));
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
		if (!$this->WpPost->exists($id)) {
			throw new NotFoundException(__('Invalid wp post'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->WpPost->save($this->request->data)) {
				$this->Session->setFlash(__('The wp post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wp post could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('WpPost.' . $this->WpPost->primaryKey => $id));
			$this->request->data = $this->WpPost->find('first', $options);
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
		$this->WpPost->id = $id;
		if (!$this->WpPost->exists()) {
			throw new NotFoundException(__('Invalid wp post'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->WpPost->delete()) {
			$this->Session->setFlash(__('The wp post has been deleted.'));
		} else {
			$this->Session->setFlash(__('The wp post could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
