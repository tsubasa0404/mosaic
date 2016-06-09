<?php
App::uses('AppController', 'Controller');
/**
 * MosaicTypes Controller
 *
 * @property MosaicType $MosaicType
 * @property PaginatorComponent $Paginator
 */
class MosaicTypesController extends AppController {

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
		$this->MosaicType->recursive = 0;
		$this->set('mosaicTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MosaicType->exists($id)) {
			throw new NotFoundException(__('Invalid mosaic type'));
		}
		$options = array('conditions' => array('MosaicType.' . $this->MosaicType->primaryKey => $id));
		$this->set('mosaicType', $this->MosaicType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MosaicType->create();
			if ($this->MosaicType->save($this->request->data)) {
				$this->Session->setFlash(__('The mosaic type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mosaic type could not be saved. Please, try again.'));
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
		if (!$this->MosaicType->exists($id)) {
			throw new NotFoundException(__('Invalid mosaic type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MosaicType->save($this->request->data)) {
				$this->Session->setFlash(__('The mosaic type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mosaic type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MosaicType.' . $this->MosaicType->primaryKey => $id));
			$this->request->data = $this->MosaicType->find('first', $options);
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
		$this->MosaicType->id = $id;
		if (!$this->MosaicType->exists()) {
			throw new NotFoundException(__('Invalid mosaic type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->MosaicType->delete()) {
			$this->Session->setFlash(__('The mosaic type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The mosaic type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
