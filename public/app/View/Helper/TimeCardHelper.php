<?php

App::uses('AppHelper', 'View/Helper');

/**
*
*/
class TimeCardHelper extends AppHelper
{

/**
 * [setInTime description]
 * @param [type] $pay_cut_type_id [description]
 * @param [type] $in_time         [description]
 * もし遅刻じゃなかったら、-
 */
	function setInTime($pay_cut_type_id, $in_time)
	{
		if ($pay_cut_type_id != '2') {
			return $in_time = '-';
		} else {
			return $in_time;
		}
	}
/**
 * [setOutTime description]
 * @param [type] $pay_cut_type_id [description]
 * @param [type] $out_time        [description]
 * もし早退じゃなかったら、
 */
	function setOutTime($pay_cut_type_id, $out_time)
	{
		if ($pay_cut_type_id != '3' && $pay_cut_type_id != '6' && $pay_cut_type_id != '8') {
			return $out_time = '-';
		} else {
			return $out_time;
		}
	}
}