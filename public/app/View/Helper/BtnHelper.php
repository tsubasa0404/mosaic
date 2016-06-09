<?php

App::uses('AppHelper', 'View/Helper');

/**
*
*/
class BtnHelper extends AppHelper
{

	function setStatusBtn($started, $completed)
	{
		if (isset($started) && isset($completed)) {
			return '<span class="label label-primary">';
		} else if(isset($started) && isset($completed) == false){
			return '<span class="label label-warning">';
		} else {
			return '<span class="label label-danger">';
		}
	}
	function setStatusBtnOrderList($status_type_id)
	{
		switch ($status_type_id) {
			//waitingのとき
			case 1:
				return '<span class="label label-warning">';
				break;
			//workingのとき
			case 2:
				return '<span class="label label-info">';
				break;
			//completedのとき
			case 3:
				return '<span class="label label-success">';
				break;
			default:
				return '<span class="label label-danger">';
				break;
		}
	}
}