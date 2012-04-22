<?php
class BaseApiController extends AppController {

	function beforeFilter() {
		parent::beforeFilter();
		Configure::write('debug', 0);
		$this->layout = "ajax";
	}
}