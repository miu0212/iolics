<?php
/* TopicLikes Test cases generated on: 2011-12-22 16:39:26 : 1324539566*/
App::import('Controller', 'TopicLikes');

class TestTopicLikesController extends TopicLikesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TopicLikesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.topic_like', 'app.topic', 'app.reply');

	function startTest() {
		$this->TopicLikes =& new TestTopicLikesController();
		$this->TopicLikes->constructClasses();
	}

	function endTest() {
		unset($this->TopicLikes);
		ClassRegistry::flush();
	}

}
