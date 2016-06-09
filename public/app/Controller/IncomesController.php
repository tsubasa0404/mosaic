<?php
App::uses('AppController', 'Controller');
/**
 * Incomes Controller
 *
 * @property Income $Income
 * @property PaginatorComponent $Paginator
 */
class IncomesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Session', 'Auth');
	public $uses = array(
		'Expense',
		'ExpenseItem',
		'ExpenseType',
		'BudgetType',
		'Currency',
		'Project',
		'Income',
		'IncomeItem',
		'Payer');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Income->recursive = 0;
		$this->set('incomes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Income->exists($id)) {
			throw new NotFoundException(__('Invalid income'));
		}
		$options = array('conditions' => array('Income.' . $this->Income->primaryKey => $id));
		$this->set('income', $this->Income->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Income->create();
			if ($this->Income->save($this->request->data)) {
				$this->Session->setFlash(__('The income has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The income could not be saved. Please, try again.'));
			}
		}
		$projects = $this->Income->Project->find('list');
		$incomeItems = $this->Income->IncomeItem->find('list');
		$budgetTypes = $this->Income->BudgetType->find('list');
		$currencies = $this->Income->Currency->find('list');
		$payers = $this->Income->Payer->find('list');
		$this->set(compact('projects', 'incomeItems', 'budgetTypes', 'currencies', 'payers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Income->exists($id)) {
			throw new NotFoundException(__('Invalid income'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Income->save($this->request->data)) {
				$this->Session->setFlash(__('The income has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The income could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Income.' . $this->Income->primaryKey => $id));
			$this->request->data = $this->Income->find('first', $options);
		}
		$option_projects      = $this->Project->find('list', array(
			'fields' => array('id', 'project'),
			'order' => array('project' => 'asc')));
		$option_expense_items = $this->ExpenseItem->find('list', array(
			'fields' => array('id', 'item'),
			'order' => array('item' => 'asc')));
		$option_income_items = $this->IncomeItem->find('list', array(
			'fields' => array('id', 'income_item'),
			'order' => array('income_item' => 'asc')));
		$option_expense_types = $this->ExpenseType->find('list', array(
			'fields' => array('id', 'type'),
			'order' => array('type' => 'asc')));
		$option_budget_types  = $this->BudgetType->find('list', array(
			'fields' => array('id', 'type'),
			'order' => array('type' => 'asc')));
		$option_currencies    = $this->Currency->find('list', array(
			'fields' => array('id', 'currency'),
			'order' => array('currency' => 'asc')));
		$option_payers    = $this->Payer->find('list', array(
			'fields' => array('id', 'payer'),
			'order' => array('payer' => 'asc')));
		$this->set(compact('option_projects', 'option_expense_items', 'option_expense_types', 'option_budget_types', 'option_currencies', 'option_income_items', 'option_payers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Income->id = $id;
		if (!$this->Income->exists()) {
			throw new NotFoundException(__('Invalid income'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Income->delete()) {
			$this->Session->setFlash(__('The income has been deleted.'));
		} else {
			$this->Session->setFlash(__('The income could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
