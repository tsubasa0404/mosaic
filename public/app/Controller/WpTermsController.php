<?php
App::uses('AppController', 'Controller');
/**
 * WpTerms Controller
 *
 * @property WpTerm $WpTerm
 * @property PaginatorComponent $Paginator
 */
class WpTermsController extends AppController {

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
		$this->WpTerm->recursive = 0;
		$this->set('wpTerms', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->WpTerm->exists($id)) {
			throw new NotFoundException(__('Invalid wp term'));
		}
		$options = array('conditions' => array('WpTerm.' . $this->WpTerm->primaryKey => $id));
		$this->set('wpTerm', $this->WpTerm->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->WpTerm->create();
			if ($this->WpTerm->save($this->request->data)) {
				$this->Session->setFlash(__('The wp term has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wp term could not be saved. Please, try again.'));
			}
		}
		$terms = $this->WpTerm->Term->find('list');
		$this->set(compact('terms'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->WpTerm->exists($id)) {
			throw new NotFoundException(__('Invalid wp term'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->WpTerm->save($this->request->data)) {
				$this->Session->setFlash(__('The wp term has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wp term could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('WpTerm.' . $this->WpTerm->primaryKey => $id));
			$this->request->data = $this->WpTerm->find('first', $options);
		}
		$terms = $this->WpTerm->Term->find('list');
		$this->set(compact('terms'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->WpTerm->id = $id;
		if (!$this->WpTerm->exists()) {
			throw new NotFoundException(__('Invalid wp term'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->WpTerm->delete()) {
			$this->Session->setFlash(__('The wp term has been deleted.'));
		} else {
			$this->Session->setFlash(__('The wp term could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
