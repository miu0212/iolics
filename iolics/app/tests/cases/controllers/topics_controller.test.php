<?php
/* Topics Test cases generated on: 2011-12-09 15:55:31 : 1323413731*/
App::import('Controller', 'Topics');

class TestTopicsController extends TopicsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TopicsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.topic');

	function startTest() {
		$this->Topics =& new TestTopicsController();
		$this->Topics->constructClasses();
	}

	function endTest() {
		unset($this->Topics);
		ClassRegistry::flush();
	}

	function testIndex() {
		$result = $this->testAction('/topics/index');
		debug($result);
	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDestory() {

	}

}
