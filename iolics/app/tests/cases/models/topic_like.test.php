<?php
/* TopicLike Test cases generated on: 2011-12-22 16:38:38 : 1324539518*/
App::import('Model', 'TopicLike');

class TopicLikeTestCase extends CakeTestCase {
	var $fixtures = array('app.topic_like', 'app.topic', 'app.reply');

	function startTest() {
		$this->TopicLike =& ClassRegistry::init('TopicLike');
	}

	function endTest() {
		unset($this->TopicLike);
		ClassRegistry::flush();
	}

}
