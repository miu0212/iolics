<?php 
/* Cs schema generated on: 2011-12-09 01:07:33 : 1323360453*/
class CsSchema extends CakeSchema {
	var $name = 'Cs';

	function before($event = array()) {
		return true;
	}

	function after($event = array()) {
	}

	var $topics = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'extra' => 'auto_increment', 'length' => 10),
		'title' => array('type' => 'string', 'null' => false, 'length' => 255),
		'body' => array('type' => 'text', 'null' => false),
		'uid' => array('type' => 'string', 'null' => false, 'length' => 255),
		'name' => array('type' => 'string', 'null' => false, 'length' => 255),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => true),
		),
	);
	var $replys = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'extra' => 'auto_increment', 'length' => 10),
		'topic_id' => array('type' => 'intenger', 'null' => false),
		'body' => array('type' => 'text', 'null' => false),
		'uid' => array('type' => 'string', 'null' => false, 'length' => 255),
		'name' => array('type' => 'string', 'null' => false, 'length' => 255),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => true),
		),
	);
	var $comments = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'extra' => 'auto_increment', 'length' => 10),
		'reply_id' => array('type' => 'intenger', 'null' => false),
		'body' => array('type' => 'text', 'null' => false),
		'uid' => array('type' => 'string', 'null' => false, 'length' => 255),
		'name' => array('type' => 'string', 'null' => false, 'length' => 255),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => true),
		),
	);
}
?>
