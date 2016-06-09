<?php

/**
*
*/
class GetDateComponent extends Component
{

	public function _get_first_day(){
		$this_year = date('Y');
		$this_month = date('m');
		$first_day = date("Y-m-01");
		$last_day = date("Y-m-t");
		return $first_day;
	}

	public function _get_last_day(){

		$this_year = date('Y');
		$this_month = date('m');
		$last_day = date("Y-m-t");
		return $last_day;
	}
}