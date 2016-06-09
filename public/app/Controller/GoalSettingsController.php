<?php
App::uses('AppController', 'Controller');
/**
 * GoalSettings Controller
 *
 * @property GoalSetting $GoalSetting
 * @property PaginatorComponent $Paginator
 */
class GoalSettingsController extends AppController {
	public $uses = array('User', 'ArosAco', 'GoalSetting');
/**
 * Components
 *
 * @var array
 */
	public $components = array('Session', 'Paginator', 'Auth');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->GoalSetting->recursive = 0;
		$this->set('goalSettings', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->GoalSetting->exists($id)) {
			throw new NotFoundException(__('Invalid goal setting'));
		}
		$options = array('conditions' => array('GoalSetting.' . $this->GoalSetting->primaryKey => $id));
		$this->set('goalSetting', $this->GoalSetting->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GoalSetting->create();
			if ($this->GoalSetting->save($this->request->data)) {
				$this->Session->setFlash('The goal setting has been saved.', 'flash_success');
				return $this->redirect(array('controller' => 'users', 'action' => 'dashboard'));
			} else {
				$this->Session->setFlash('The goal setting could not be saved. Please, try again.', 'flash_failure');
			}
		}
		$goalTypes = $this->GoalSetting->GoalType->find('list');
		$this->set(compact('goalTypes'));
	}

	public function addIndivisual() {

		if ($this->request->is('post')) {
			$this->GoalSetting->create();
			if ($this->GoalSetting->save($this->request->data)) {
				$this->Session->setFlash('The Indivisual goal setting has been saved.', 'flash_success');
				return $this->redirect(array('controller' => 'users', 'action' => 'dashboard'));
			} else {
				$this->Session->setFlash('The Indivisual goal setting could not be saved. Please, try again.', 'flash_failure');
			}
		}
		$goalTypes = $this->GoalSetting->GoalType->find('list');
		$this->set(compact('goalTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->GoalSetting->exists($id)) {
			throw new NotFoundException(__('Invalid goal setting'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->GoalSetting->save($this->request->data)) {
				$this->Session->setFlash(__('The goal setting has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The goal setting could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('GoalSetting.' . $this->GoalSetting->primaryKey => $id));
			$this->request->data = $this->GoalSetting->find('first', $options);
		}
		$goalTypes = $this->GoalSetting->GoalType->find('list');
		$this->set(compact('goalTypes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->GoalSetting->id = $id;
		if (!$this->GoalSetting->exists()) {
			throw new NotFoundException(__('Invalid goal setting'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->GoalSetting->delete()) {
			$this->Session->setFlash(__('The goal setting has been deleted.'));
		} else {
			$this->Session->setFlash(__('The goal setting could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
