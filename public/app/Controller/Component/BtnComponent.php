<?php

/**
*
*/
class BtnCommponent extends Component
{

	public function setStatusBtn($status_type_id)
	{
		switch ($status_type_id) {
			//waitingのとき
			case 1:
				$this->set('statusBtn', '<span class="label label-warning">');
				break;
			//workingのとき
			case 2:
				$this->set('statusBtn', '<span class="label label-info">');
				break;
			//completedのとき
			case 3:
				$this->set('statusBtn', '<span class="label label-success">');
				break;
			default:
				$this->set('statusBtn', '<span class="label label-danger">');
				break;
		}
	}



}