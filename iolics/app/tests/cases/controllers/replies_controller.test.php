<?php
/* Replies Test cases generated on: 2011-12-09 18:12:32 : 1323421952*/
App::import('Controller', 'Replies');

class TestRepliesController extends RepliesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class RepliesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.reply', 'app.topic');

	function startTest() {
		$this->Replies =& new TestRepliesController();
		$this->Replies->constructClasses();
	}

	function endTest() {
		unset($this->Replies);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
