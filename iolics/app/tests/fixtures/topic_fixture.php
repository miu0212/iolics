<?php
/* Topic Fixture generated on: 2011-12-09 15:52:29 : 1323413549 */
class TopicFixture extends CakeTestFixture {
	var $name = 'Topic';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'body' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'uid' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array( 'id' => 1, 'title' => 'title 1', 'body' => 'body 1', 'uid' => 'uid 1', 'name' => 'name 1', 'created' => '2011-12-09 15:52:29', 'modified' => '2011-12-09 15:52:29'),
		array( 'id' => 2, 'title' => 'title 2', 'body' => 'body 2', 'uid' => 'uid 2', 'name' => 'name 2', 'created' => '2011-12-09 15:52:29', 'modified' => '2011-12-09 15:52:29'),
	);
}
