<?php
	//Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
	Router::connect('/', array('controller' => 'topics', 'action' => 'index', 'topic_type'=>'all'));
	Router::connect('/users/:action', array('controller' => 'users'));
	Router::connect('/:topic_type', array('controller' => 'topics', 'action' => 'index'));
	Router::connect('/api/topics/:topic_type', array('controller' => 'topics', 'action' => 'api_index'), array('pass'=>array('topic_type')));
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

	Router::connect('/api/topics/:topic_id/replies/add/*', array('controller' => 'replies', 'action'=>'api_add'), array('pass'=>array('topic_id')));
	Router::connect('/api/topics/:topic_id/replies/*', array('controller' => 'replies', 'action' => 'api_index'), array('pass'=>array('topic_id')));

	Router::connect('/api/topics/:topic_id/like', array('controller' => 'topic_likes', 'action'=>'api_add'), array('pass'=>array('topic_id')));
