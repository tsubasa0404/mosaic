<?php

App::uses('AppHelper', 'View/Helper');

/**
*
*/
class DateDiffHelper extends AppHelper
{

	function dayDiff($day1, $today){
		$day1Timestamp = strtotime($day1);
		$todayTimestamp = strtotime($today);

		$dayDiff = ($todayTimestamp - $day1Timestamp)/(60*60*24);
		return $dayDiff;
	}

	function timeDiff($time1, $worktime){
		$time1Timestamp = strtotime($time1);
		$worktimeTimestamp = strtotime($worktime);
		$timeDiff = ($time1Timestamp - $worktimeTimestamp)/(60);
		return $timeDiff;
	}
}