<?php
App::uses('AppController', 'Controller');
/**
 * WpTermmeta Controller
 *
 * @property WpTermmetum $WpTermmetum
 * @property PaginatorComponent $Paginator
 */
class WpTermmetaController extends AppController {

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
		$this->WpTermmetum->recursive = 0;
		$this->set('wpTermmeta', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->WpTermmetum->exists($id)) {
			throw new NotFoundException(__('Invalid wp termmetum'));
		}
		$options = array('conditions' => array('WpTermmetum.' . $this->WpTermmetum->primaryKey => $id));
		$this->set('wpTermmetum', $this->WpTermmetum->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->WpTermmetum->create();
			if ($this->WpTermmetum->save($this->request->data)) {
				$this->Session->setFlash(__('The wp termmetum has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wp termmetum could not be saved. Please, try again.'));
			}
		}
		$metas = $this->WpTermmetum->Metum->find('list');
		$terms = $this->WpTermmetum->Term->find('list');
		$this->set(compact('metas', 'terms'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->WpTermmetum->exists($id)) {
			throw new NotFoundException(__('Invalid wp termmetum'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->WpTermmetum->save($this->request->data)) {
				$this->Session->setFlash(__('The wp termmetum has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wp termmetum could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('WpTermmetum.' . $this->WpTermmetum->primaryKey => $id));
			$this->request->data = $this->WpTermmetum->find('first', $options);
		}
		$metas = $this->WpTermmetum->Metum->find('list');
		$terms = $this->WpTermmetum->Term->find('list');
		$this->set(compact('metas', 'terms'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->WpTermmetum->id = $id;
		if (!$this->WpTermmetum->exists()) {
			throw new NotFoundException(__('Invalid wp termmetum'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->WpTermmetum->delete()) {
			$this->Session->setFlash(__('The wp termmetum has been deleted.'));
		} else {
			$this->Session->setFlash(__('The wp termmetum could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
