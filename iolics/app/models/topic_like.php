<?php
class TopicLike extends AppModel {
	var $name = 'TopicLike';
	var $displayField = 'name';
	var $belongsTo = array(
		'Topic' => array(
			'className' => 'Topic',
			'foreignKey' => 'topic_id',
			'counterCache' => true,
		)
	);
}
