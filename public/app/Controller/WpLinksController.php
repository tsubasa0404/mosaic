<?php
App::uses('AppController', 'Controller');
/**
 * WpLinks Controller
 *
 * @property WpLink $WpLink
 * @property PaginatorComponent $Paginator
 */
class WpLinksController extends AppController {

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
		$this->WpLink->recursive = 0;
		$this->set('wpLinks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->WpLink->exists($id)) {
			throw new NotFoundException(__('Invalid wp link'));
		}
		$options = array('conditions' => array('WpLink.' . $this->WpLink->primaryKey => $id));
		$this->set('wpLink', $this->WpLink->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->WpLink->create();
			if ($this->WpLink->save($this->request->data)) {
				$this->Session->setFlash(__('The wp link has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wp link could not be saved. Please, try again.'));
			}
		}
		$links = $this->WpLink->Link->find('list');
		$this->set(compact('links'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->WpLink->exists($id)) {
			throw new NotFoundException(__('Invalid wp link'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->WpLink->save($this->request->data)) {
				$this->Session->setFlash(__('The wp link has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wp link could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('WpLink.' . $this->WpLink->primaryKey => $id));
			$this->request->data = $this->WpLink->find('first', $options);
		}
		$links = $this->WpLink->Link->find('list');
		$this->set(compact('links'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->WpLink->id = $id;
		if (!$this->WpLink->exists()) {
			throw new NotFoundException(__('Invalid wp link'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->WpLink->delete()) {
			$this->Session->setFlash(__('The wp link has been deleted.'));
		} else {
			$this->Session->setFlash(__('The wp link could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
