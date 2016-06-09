<?php
App::uses('AppController', 'Controller');
/**
 * Calendars Controller
 *
 * @property Calendar $Calendar
 * @property PaginatorComponent $Paginator
 */
class CalendarsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $uses = array(
		'User',
		'ArosAco',
		'Calendar',
		'DayType'
		);
	public $components = array('Session','Paginator', 'Auth');
	public $helpers = array('Form', 'Html');


	public function _getCalendarEvents(){
		$events = $this->Calendar->get_all_events();
		$count = $this->Calendar->find('count', 'id');

		for($i = 0; $i < $count; $i++){
			$color = '';
			switch ($events[$i]['Calendar']['day_type_id']) {
				case 1:
				case 2:
				case 3:
				case 4:
					$color = 'red';
					break;
				case 5:
					$color = 'green';
					break;
				default:
					$color = 'red';
					break;
			}
			$jsonEvents[] = array(
				'id' => $events[$i]['Calendar']['id'],
				'title' => $events[$i]['Calendar']['title'],
				'start' => date('Y-m-d', strtotime($events[$i]['Calendar']['start'])),
				'allday' => $events[$i]['Calendar']['allday'],
				'day_type_id' => $events[$i]['Calendar']['day_type_id'],
				'day_type' => $events[$i]['DayType']['day_type'],
				'color' => $color
				);
		}
		$jsonEvents = json_encode($jsonEvents);
		return $this->set(compact('jsonEvents', 'count'));
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->_getCalendarEvents();
		$day_types = $this->DayType->get_day_type_list();
		$this->set(compact('day_types'));

	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view() {
		$this->set('holidays', $this->Calendar->get_holidays());
		$this->set('events', $this->Calendar->get_events());
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->request->data['Calendar']['start'] = $this->request->data['Calendar']['start']." 00:00:00";

			$this->Calendar->create();
			if ($this->Calendar->save($this->request->data)) {
				$this->Session->setFlash(__('The calendar has been saved.'), 'flash_success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The calendar could not be saved. Please, try again.'), 'flash_failure');
			}
		}
		$dayTypes = $this->Calendar->DayType->find('list');
		$this->set(compact('dayTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Calendar->exists($id)) {
			throw new NotFoundException(__('Invalid calendar'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Calendar']['start'] = $this->request->data['Calendar']['start']." 00:00:00";
			if ($this->Calendar->save($this->request->data)) {
				$this->Session->setFlash(__('The calendar has been saved.'), 'flash_success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The calendar could not be saved. Please, try again.'), 'flash_failure');
			}
		} else {
			$options = array('conditions' => array('Calendar.' . $this->Calendar->primaryKey => $id));
			$this->request->data = $this->Calendar->find('first', $options);
		}
		$dayTypes = $this->Calendar->DayType->get_day_type_list();
		$start = $this->Calendar->find('first', array(
			'conditions' => array('Calendar.id' => $id),
			'fields' => array('start'))
		);
		$this->set(compact('dayTypes', 'start'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Calendar->id = $id;
		if (!$this->Calendar->exists()) {
			throw new NotFoundException(__('Invalid calendar'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Calendar->delete()) {
			$this->Session->setFlash(__('The calendar has been deleted.'), 'flash_success');
		} else {
			$this->Session->setFlash(__('The calendar could not be deleted. Please, try again.'), 'flash_failure');
		}
		return $this->redirect($this->referer());
	}
}
