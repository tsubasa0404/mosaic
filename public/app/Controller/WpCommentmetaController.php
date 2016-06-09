<?php
App::uses('AppController', 'Controller');
/**
 * WpCommentmeta Controller
 *
 * @property WpCommentmetum $WpCommentmetum
 * @property PaginatorComponent $Paginator
 */
class WpCommentmetaController extends AppController {

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
		$this->WpCommentmetum->recursive = 0;
		$this->set('wpCommentmeta', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->WpCommentmetum->exists($id)) {
			throw new NotFoundException(__('Invalid wp commentmetum'));
		}
		$options = array('conditions' => array('WpCommentmetum.' . $this->WpCommentmetum->primaryKey => $id));
		$this->set('wpCommentmetum', $this->WpCommentmetum->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->WpCommentmetum->create();
			if ($this->WpCommentmetum->save($this->request->data)) {
				$this->Session->setFlash(__('The wp commentmetum has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wp commentmetum could not be saved. Please, try again.'));
			}
		}
		$metas = $this->WpCommentmetum->Metum->find('list');
		$comments = $this->WpCommentmetum->Comment->find('list');
		$this->set(compact('metas', 'comments'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->WpCommentmetum->exists($id)) {
			throw new NotFoundException(__('Invalid wp commentmetum'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->WpCommentmetum->save($this->request->data)) {
				$this->Session->setFlash(__('The wp commentmetum has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wp commentmetum could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('WpCommentmetum.' . $this->WpCommentmetum->primaryKey => $id));
			$this->request->data = $this->WpCommentmetum->find('first', $options);
		}
		$metas = $this->WpCommentmetum->Metum->find('list');
		$comments = $this->WpCommentmetum->Comment->find('list');
		$this->set(compact('metas', 'comments'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->WpCommentmetum->id = $id;
		if (!$this->WpCommentmetum->exists()) {
			throw new NotFoundException(__('Invalid wp commentmetum'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->WpCommentmetum->delete()) {
			$this->Session->setFlash(__('The wp commentmetum has been deleted.'));
		} else {
			$this->Session->setFlash(__('The wp commentmetum could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
