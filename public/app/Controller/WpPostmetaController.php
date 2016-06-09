<?php
App::uses('AppController', 'Controller');
/**
 * WpPostmeta Controller
 *
 * @property WpPostmetum $WpPostmetum
 * @property PaginatorComponent $Paginator
 */
class WpPostmetaController extends AppController {

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
		$this->WpPostmetum->recursive = 0;
		$this->set('wpPostmeta', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->WpPostmetum->exists($id)) {
			throw new NotFoundException(__('Invalid wp postmetum'));
		}
		$options = array('conditions' => array('WpPostmetum.' . $this->WpPostmetum->primaryKey => $id));
		$this->set('wpPostmetum', $this->WpPostmetum->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->WpPostmetum->create();
			if ($this->WpPostmetum->save($this->request->data)) {
				$this->Session->setFlash(__('The wp postmetum has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wp postmetum could not be saved. Please, try again.'));
			}
		}
		$metas = $this->WpPostmetum->Metum->find('list');
		$posts = $this->WpPostmetum->Post->find('list');
		$this->set(compact('metas', 'posts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->WpPostmetum->exists($id)) {
			throw new NotFoundException(__('Invalid wp postmetum'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->WpPostmetum->save($this->request->data)) {
				$this->Session->setFlash(__('The wp postmetum has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wp postmetum could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('WpPostmetum.' . $this->WpPostmetum->primaryKey => $id));
			$this->request->data = $this->WpPostmetum->find('first', $options);
		}
		$metas = $this->WpPostmetum->Metum->find('list');
		$posts = $this->WpPostmetum->Post->find('list');
		$this->set(compact('metas', 'posts'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->WpPostmetum->id = $id;
		if (!$this->WpPostmetum->exists()) {
			throw new NotFoundException(__('Invalid wp postmetum'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->WpPostmetum->delete()) {
			$this->Session->setFlash(__('The wp postmetum has been deleted.'));
		} else {
			$this->Session->setFlash(__('The wp postmetum could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
