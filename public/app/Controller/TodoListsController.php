<?php
App::uses('AppController', 'Controller');
/**
 * TodoLists Controller
 *
 * @property TodoList $TodoList
 * @property PaginatorComponent $Paginator
 */
class TodoListsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'RequestHandler', 'Session', 'Auth');
	public $helpers    = array('Form', 'Html', 'Btn');
	public $uses = array('TodoList');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TodoList->recursive = 0;
		$this->set('todoLists', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TodoList->exists($id)) {
			throw new NotFoundException(__('Invalid todo list'));
		}
		$options = array('conditions' => array('TodoList.' . $this->TodoList->primaryKey => $id));
		$this->set('todoList', $this->TodoList->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TodoList->create();
			if ($this->TodoList->save($this->request->data)) {
				$this->Session->setFlash(__('The todo list has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The todo list could not be saved. Please, try again.'));
			}
		}
		$employees = $this->TodoList->Employee->find('list');
		$priorityTypes = $this->TodoList->PriorityType->find('list');
		$statusTypes = $this->TodoList->StatusType->find('list');
		$this->set(compact('employees', 'priorityTypes', 'statusTypes'));
	}

	public function addAjax() {
	  $this->autoRender = false;
	  if($this->RequestHandler->isAjax()){
	    Configure::write('debug', 0);
	   }
	  if($this->request->is('ajax')){
	    $this->request->data['TodoList']['id'] = $_POST['id'];
	    $this->request->data['TodoList']['title'] = $_POST['title'];
	    $this->request->data['TodoList']['employee_id'] = $_POST['employee_id'];
	    $this->request->data['TodoList']['deadline'] = $_POST['deadline'];
	    $this->request->data['TodoList']['priority_type_id'] = $_POST['priority_type_id'];
	    $this->request->data['TodoList']['status_type_id'] = $_POST['status_type_id'];
	    $this->TodoList->create();
	    if ($this->TodoList->save($this->request->data)) {
	      echo json_encode($this->TodoList->getLastInsertID());
	    } else {
	    }
	  }
	}
	public function updateAjax() {
	  $this->autoRender = false;
	  if($this->RequestHandler->isAjax()){
	    Configure::write('debug', 0);
	   }
	  if($this->request->is('ajax')){
	    $this->request->data['TodoList']['id'] = $_POST['id'];
	    if($_POST['status_type_id'] == 1){$_POST['status_type_id'] = 0;}
	    	else{$_POST['status_type_id'] = 1;};
	    $this->request->data['TodoList']['status_type_id'] = $_POST['status_type_id'];
	    if ($this->TodoList->save($this->request->data)) {
	      echo json_encode($this->request->data['TodoList']['status_type_id']);
	    } else {
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
		if (!$this->TodoList->exists($id)) {
			throw new NotFoundException(__('Invalid todo list'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TodoList->save($this->request->data)) {
				$this->Session->setFlash(__('The todo list has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The todo list could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TodoList.' . $this->TodoList->primaryKey => $id));
			$this->request->data = $this->TodoList->find('first', $options);
		}
		$employees = $this->TodoList->Employee->find('list');
		$priorityTypes = $this->TodoList->PriorityType->find('list');
		$statusTypes = $this->TodoList->StatusType->find('list');
		$this->set(compact('employees', 'priorityTypes', 'statusTypes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TodoList->id = $id;
		if (!$this->TodoList->exists()) {
			throw new NotFoundException(__('Invalid todo list'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TodoList->delete()) {
			$this->Session->setFlash(__('The todo list has been deleted.'));
		} else {
			$this->Session->setFlash(__('The todo list could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
