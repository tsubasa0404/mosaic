<?php
App::uses('AppController', 'Controller');
/**
 * StatusTypes Controller
 *
 * @property StatusType $StatusType
 * @property PaginatorComponent $Paginator
 */
class StatusTypesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Session', 'Paginator', 'Auth');
  public $helpers    = array('Form', 'Html');


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->StatusType->recursive = 0;
		$this->set('statusTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->StatusType->exists($id)) {
			throw new NotFoundException(__('Invalid status type'));
		}
		$options = array('conditions' => array('StatusType.' . $this->StatusType->primaryKey => $id));
		$this->set('statusType', $this->StatusType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->StatusType->create();
			if ($this->StatusType->save($this->request->data)) {
				$this->Session->setFlash(__('The status type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The status type could not be saved. Please, try again.'));
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
		if (!$this->StatusType->exists($id)) {
			throw new NotFoundException(__('Invalid status type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->StatusType->save($this->request->data)) {
				$this->Session->setFlash(__('The status type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The status type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('StatusType.' . $this->StatusType->primaryKey => $id));
			$this->request->data = $this->StatusType->find('first', $options);
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
		$this->StatusType->id = $id;
		if (!$this->StatusType->exists()) {
			throw new NotFoundException(__('Invalid status type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->StatusType->delete()) {
			$this->Session->setFlash(__('The status type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The status type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
