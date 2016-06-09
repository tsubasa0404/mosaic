<?php
App::uses('AppController', 'Controller');
/**
 * IncomeItems Controller
 *
 * @property IncomeItem $IncomeItem
 * @property PaginatorComponent $Paginator
 */
class IncomeItemsController extends AppController {

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
		$this->IncomeItem->recursive = 0;
		$this->set('incomeItems', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->IncomeItem->exists($id)) {
			throw new NotFoundException(__('Invalid income item'));
		}
		$options = array('conditions' => array('IncomeItem.' . $this->IncomeItem->primaryKey => $id));
		$this->set('incomeItem', $this->IncomeItem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->IncomeItem->create();
			if ($this->IncomeItem->save($this->request->data)) {
				$this->Session->setFlash(__('The income item has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The income item could not be saved. Please, try again.'));
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
		if (!$this->IncomeItem->exists($id)) {
			throw new NotFoundException(__('Invalid income item'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->IncomeItem->save($this->request->data)) {
				$this->Session->setFlash(__('The income item has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The income item could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('IncomeItem.' . $this->IncomeItem->primaryKey => $id));
			$this->request->data = $this->IncomeItem->find('first', $options);
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
		$this->IncomeItem->id = $id;
		if (!$this->IncomeItem->exists()) {
			throw new NotFoundException(__('Invalid income item'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->IncomeItem->delete()) {
			$this->Session->setFlash(__('The income item has been deleted.'));
		} else {
			$this->Session->setFlash(__('The income item could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
