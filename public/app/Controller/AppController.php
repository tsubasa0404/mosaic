<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	public $components = array(
		'Session',
		'DebugKit.Toolbar',
		'Acl',
		'Auth' => array(
			'authorize' => array(
				'Actions' => array('actionPath' => 'controllers')
				)
			),
		'GetDate'
		);


	public $helpers = array('Session','Html','Form');

	public $uses = array('Employee');


	public function _setUser(){
  	$user = $this->Auth->user();
  	$this->set(compact('user'));
  }

  public function _setEmployee(){
  	$employee = $this->Employee->find('all');
  	$this->set(compact('employee'));
  }

  public function _setYearMonth($year=null, $month=null){
		if(!isset($year) || !isset($month)){
      $year      = date('Y');
      $month     = date('m');
      $first_day = date('Y-m-01 00:00:00');
      $last_day  = date('Y-m-t 23:59:59');
      $dateArray = array($year, $month, $first_day, $last_day);
      return $dateArray;
		} else {
			$timestamp = mktime(0,0,0, $month + 1, 0, $year);
			$first_day = date('Y-m-01 00:00:00', $timestamp);
			$last_day = date('Y-m-d 23:59:59', $timestamp);
			$dateArray = array($year, $month,$first_day, $last_day);
			return $dateArray;
		}
	}

	public function beforeFilter(){
		$this->Auth->allow('login');
    $this->Auth->loginAction 		= array('controller' => 'users', 'action' => 'login');
    $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
    $this->Auth->loginRedirect 	= array('controller' => 'users', 'action' => 'dashboard');
    $this->_setUser();
	}



}
