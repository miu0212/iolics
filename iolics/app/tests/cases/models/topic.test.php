<?php
/* Topic Test cases generated on: 2011-12-09 14:12:07 : 1323407527*/
App::import('Model', 'Topic');

class TopicTestCase extends CakeTestCase {
	var $fixtures = array('app.topic');

	function startTest() {
		$this->Topic =& ClassRegistry::init('Topic');
	}

	function endTest() {
		unset($this->Topic);
		ClassRegistry::flush();
	}

	function testFindAll() {
		$topics = $this->Topic->find('all');
		var_dump($topics);
	}

}
