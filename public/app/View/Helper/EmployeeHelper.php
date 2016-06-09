<?php

App::uses('AppHelper', 'View/Helper');

/**
*
*/
class EmployeeHelper extends AppHelper
{

  public function get_career_color($career_id){
    //1:manager, 2:regular, 3:internship, 4:team manager, 5:one year
    switch ($career_id) {
      case 1:
        $bg_color = 'red-bg';
        break;
      case 2:
        $bg_color = 'green-bg';
        break;
      case 3:
        $bg_color = 'gray-bg';
        break;
      case 4:
        $bg_color = 'emerald-bg';
        break;
      case 5:
        $bg_color = 'purple-bg';
        break;
      default:
        $bg_color = 'gray-bg';
        break;
    }
    return $bg_color;
  }

}