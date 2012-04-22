<?php
class TopicLikesController extends AppController {

	var $name = 'TopicLikes';

	function beforeFilter() {
		parent::beforeFilter();
		Configure::write('debug', 0);
		$this->layout = "ajax";
	}

	function api_add($topic_id) {

		$user = Configure::read('user');
		$this->loadModel('Topic');
		if (!$this->Topic->hasAny(array('id'=>$topic_id))) {
			$this->cakeError('error404');
		}
		if ($this->TopicLike->hasAny(array('topic_id'=>$topic_id, 'uid'=>$user['User']['facebook_id']))) {
			$this->set('result', false);
			$this->render('api_add');
			return;
		}
		$this->data['TopicLike']['topic_id'] = $topic_id;
		$this->TopicLike->create();
		if ($this->TopicLike->save($this->data)) {
			$this->set('result', true);
			$this->set('count', $this->TopicLike->find('count', array('conditions'=>array('topic_id'=>$topic_id))));
		}
		else {
			$this->set('result', false);
		}
		$this->render('api_add');
	}
}
