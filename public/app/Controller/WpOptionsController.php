<?php
App::uses('AppController', 'Controller');
/**
 * WpOptions Controller
 *
 * @property WpOption $WpOption
 * @property PaginatorComponent $Paginator
 */
class WpOptionsController extends AppController {

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
		$this->WpOption->recursive = 0;
		$this->set('wpOptions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->WpOption->exists($id)) {
			throw new NotFoundException(__('Invalid wp option'));
		}
		$options = array('conditions' => array('WpOption.' . $this->WpOption->primaryKey => $id));
		$this->set('wpOption', $this->WpOption->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->WpOption->create();
			if ($this->WpOption->save($this->request->data)) {
				$this->Session->setFlash(__('The wp option has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wp option could not be saved. Please, try again.'));
			}
		}
		$options = $this->WpOption->Option->find('list');
		$this->set(compact('options'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->WpOption->exists($id)) {
			throw new NotFoundException(__('Invalid wp option'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->WpOption->save($this->request->data)) {
				$this->Session->setFlash(__('The wp option has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wp option could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('WpOption.' . $this->WpOption->primaryKey => $id));
			$this->request->data = $this->WpOption->find('first', $options);
		}
		$options = $this->WpOption->Option->find('list');
		$this->set(compact('options'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->WpOption->id = $id;
		if (!$this->WpOption->exists()) {
			throw new NotFoundException(__('Invalid wp option'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->WpOption->delete()) {
			$this->Session->setFlash(__('The wp option has been deleted.'));
		} else {
			$this->Session->setFlash(__('The wp option could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
