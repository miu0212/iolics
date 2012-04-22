<?php
/* Reply Test cases generated on: 2011-12-09 18:11:59 : 1323421919*/
App::import('Model', 'Reply');

class ReplyTestCase extends CakeTestCase {
	var $fixtures = array('app.reply', 'app.topic');

	function startTest() {
		$this->Reply =& ClassRegistry::init('Reply');
	}

	function endTest() {
		unset($this->Reply);
		ClassRegistry::flush();
	}

}
