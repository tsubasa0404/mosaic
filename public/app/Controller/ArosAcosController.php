<?php
App::uses('AppController', 'Controller');
/**
 * ArosAcos Controller
 *
 * @property ArosAco $ArosAco
 * @property PaginatorComponent $Paginator
 */
class ArosAcosController extends AppController {

	/**
	 * [beforeFIlter description]
	 * @return [type] [description]
	 * Creating Acl, delete here
	 */


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
		$this->layout = 'cake-default';
		$this->ArosAco->recursive = 0;
		$this->set('arosAcos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->layout = 'cake-default';
		$this->ArosAco->id = $id;

		if (!$this->ArosAco->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('ArosAco.' . $this->ArosAco->primaryKey => $id));
		$this->set('arosAco', $this->ArosAco->find('first', $options));
		$this->set('arosAco', $this->ArosAco->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout = 'cake-default';
		$aros = $this->ArosAco->Aro->find('list');
		$acos = $this->ArosAco->Aco->find('list', array('fields' => array('alias', 'alias')));
		$this->set(compact('aros', 'acos'));

		if ($this->request->is('post')) {
			$this->ArosAco->create();
			if ($this->ArosAco->save($this->request->data)) {
				$this->Session->setFlash(__('The aros aco has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aros aco could not be saved. Please, try again.'));
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
		$this->layout = 'cake-default';
		$this->ArosAco->id = $id;
		$this->request->data = $this->ArosAco->read(null, $id);

		if (!$this->ArosAco->exists($id)) {
			throw new NotFoundException(__('Invalid aros aco'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ArosAco->save($this->request->data)) {
				$this->Session->setFlash(__('The aros aco has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aros aco could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ArosAco.' . $this->ArosAco->primaryKey => $id));
			$this->request->data = $this->ArosAco->find('first', $options);
		}

		$aros = $this->ArosAco->Aro->find('list');
		$acos = $this->ArosAco->Aco->find('list', array('fields' => array('alias', 'alias')));
		$this->set(compact('aros', 'acos'));
	}

}
