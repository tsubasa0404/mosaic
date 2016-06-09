<?php
App::uses('AppController', 'Controller');
/**
 * ExpenseItems Controller
 *
 * @property ExpenseItem $ExpenseItem
 * @property PaginatorComponent $Paginator
 */
class ExpenseItemsController extends AppController {

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
		$this->ExpenseItem->recursive = 0;
		$this->set('expenseItems', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ExpenseItem->exists($id)) {
			throw new NotFoundException(__('Invalid expense item'));
		}
		$options = array('conditions' => array('ExpenseItem.' . $this->ExpenseItem->primaryKey => $id));
		$this->set('expenseItem', $this->ExpenseItem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ExpenseItem->create();
			if ($this->ExpenseItem->save($this->request->data)) {
				$this->Session->setFlash(__('The expense item has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The expense item could not be saved. Please, try again.'));
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
		if (!$this->ExpenseItem->exists($id)) {
			throw new NotFoundException(__('Invalid expense item'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ExpenseItem->save($this->request->data)) {
				$this->Session->setFlash(__('The expense item has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The expense item could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ExpenseItem.' . $this->ExpenseItem->primaryKey => $id));
			$this->request->data = $this->ExpenseItem->find('first', $options);
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
		$this->ExpenseItem->id = $id;
		if (!$this->ExpenseItem->exists()) {
			throw new NotFoundException(__('Invalid expense item'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ExpenseItem->delete()) {
			$this->Session->setFlash(__('The expense item has been deleted.'));
		} else {
			$this->Session->setFlash(__('The expense item could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
