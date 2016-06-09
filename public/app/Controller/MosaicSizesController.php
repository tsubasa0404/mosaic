<?php
App::uses('AppController', 'Controller');
/**
 * MosaicSizes Controller
 *
 * @property MosaicSize $MosaicSize
 * @property PaginatorComponent $Paginator
 */
class MosaicSizesController extends AppController {

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
		$this->MosaicSize->recursive = 0;
		$this->set('mosaicSizes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MosaicSize->exists($id)) {
			throw new NotFoundException(__('Invalid mosaic size'));
		}
		$options = array('conditions' => array('MosaicSize.' . $this->MosaicSize->primaryKey => $id));
		$this->set('mosaicSize', $this->MosaicSize->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MosaicSize->create();
			if ($this->MosaicSize->save($this->request->data)) {
				$this->Session->setFlash(__('The mosaic size has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mosaic size could not be saved. Please, try again.'));
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
		if (!$this->MosaicSize->exists($id)) {
			throw new NotFoundException(__('Invalid mosaic size'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MosaicSize->save($this->request->data)) {
				$this->Session->setFlash(__('The mosaic size has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mosaic size could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MosaicSize.' . $this->MosaicSize->primaryKey => $id));
			$this->request->data = $this->MosaicSize->find('first', $options);
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
		$this->MosaicSize->id = $id;
		if (!$this->MosaicSize->exists()) {
			throw new NotFoundException(__('Invalid mosaic size'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->MosaicSize->delete()) {
			$this->Session->setFlash(__('The mosaic size has been deleted.'));
		} else {
			$this->Session->setFlash(__('The mosaic size could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
