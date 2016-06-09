<?php
App::uses('AppController', 'Controller');
/**
 * Expenses Controller
 *
 * @property Expense $Expense
 * @property PaginatorComponent $Paginator
 */
class ExpensesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Session', 'Auth', 'RequestHandler');
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
	public function index($year=null, $month=null) {
    $dateArray                  = $this->_setYearMonth($year, $month);
    $this->Expense->recursive   = 0;
    $expenses                   = $this->Expense->find('all', array(
			'order' => array('date' => 'desc'),
			'conditions' => array('date between ? and ?' => array($dateArray[2], $dateArray[3]))
			));

    $budget_expense_sum   = $this->Expense->sumExpense($dateArray[2], $dateArray[3],2,1,1); //budget, mosaic, usd
    $personal_expense_sum = $this->Expense->sumExpense($dateArray[2], $dateArray[3],1,2,1); //personal, personal, usd
		$this->set(compact('expenses', 'dateArray', 'budget_expense_sum','personal_expense_sum'));

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

	public function addAjax() {
	  $this->autoRender = false;
	  if($this->RequestHandler->isAjax()){
	    Configure::write('debug', 0);
	   }
	  if($this->request->is('ajax')){
	    $this->request->data['Expense']['date'] = $_POST['date'];
	    $this->request->data['Expense']['project_id'] = $_POST['project_id'];
	    $this->request->data['Expense']['expense_item_id'] = $_POST['expense_item_id'];
	    $this->request->data['Expense']['expense_type_id'] = $_POST['expense_type_id'];
	    $this->request->data['Expense']['price'] = $_POST['price'];
	    $this->request->data['Expense']['budget_type_id'] = $_POST['budget_type_id'];
	    $this->request->data['Expense']['currency_id'] = $_POST['currency_id'];
	    $this->request->data['Expense']['note'] = $_POST['note'];
	    $this->Expense->create();
	    if ($this->Expense->save($this->request->data)) {
	      echo json_encode($this->Expense->getLastInsertID());
	    } else {
	    }
	  }
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Expense->exists($id)) {
			throw new NotFoundException(__('Invalid expense'));
		}
		$options = array('conditions' => array('Expense.' . $this->Expense->primaryKey => $id));
		$this->set('expense', $this->Expense->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Expense->create();
			if ($this->Expense->save($this->request->data)) {
				$this->Session->setFlash(__('The expense has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The expense could not be saved. Please, try again.'));
			}
		}
		$projects = $this->Expense->Project->find('list');
		$expenseItems = $this->Expense->ExpenseItem->find('list');
		$expenseTypes = $this->Expense->ExpenseType->find('list');
		$budgetTypes = $this->Expense->BudgetType->find('list');
		$currencies = $this->Expense->Currency->find('list');
		$this->set(compact('projects', 'expenseItems', 'expenseTypes', 'budgetTypes', 'currencies'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Expense->exists($id)) {
			throw new NotFoundException(__('Invalid expense'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Expense->save($this->request->data)) {
				$this->Session->setFlash(__('The expense has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The expense could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Expense.' . $this->Expense->primaryKey => $id));
			$this->request->data = $this->Expense->find('first', $options);
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
		$this->Expense->id = $id;
		if (!$this->Expense->exists()) {
			throw new NotFoundException(__('Invalid expense'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Expense->delete()) {
			$this->Session->setFlash(__('The expense has been deleted.'));
		} else {
			$this->Session->setFlash(__('The expense could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
