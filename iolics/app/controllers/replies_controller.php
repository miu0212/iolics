<?php
class RepliesController extends AppController {

	var $name = 'Replies';
	var $components = array('RequestHandler');

	function beforeFilter() {
		parent::beforeFilter();
		Configure::write('debug', 0);
		$this->layout = "ajax";
	}

	function api_index($topic_id) {
		$this->Reply->recursive = -1;
		$replies = $this->Reply->findAllByTopicId($topic_id);
		$this->set(compact('replies'));
	}

	function api_add($topic_id) {
		if (empty($this->data)) {
			$this->cakeError('error404');
		}
		$this->loadModel('Topic');
		if (!$this->Topic->hasAny(array('id'=>$topic_id))) {
			$this->cakeError('error404');
		}
		$this->data['Reply']['topic_id'] = $topic_id;
		$this->Reply->create();
		if ($this->Reply->save($this->data)) {
			$replies = array($this->Reply->read(null, $this->Reply->getInsertId()));
			$this->set(compact('replies'));
			$this->render('api_index');
		}
		else {
			$this->cakeError('error404');
		}
	}
}
