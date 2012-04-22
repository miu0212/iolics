<?php
class Reply extends AppModel {
	var $name = 'Reply';
	var $displayField = 'name';
	var $belongsTo = array(
		'Topic' => array(
			'className' => 'Topic',
			'foreignKey' => 'topic_id',
			'counterCache' => true,
		)
	);
}
