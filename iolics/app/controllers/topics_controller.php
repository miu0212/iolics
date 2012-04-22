<?php
/**
 *
 */
class TopicsController extends AppController {

	var $name = 'Topics';

	var $paginate = array(
		'Topic'=>array(
			'limit'=>10,
			'order'=>array('Topic.created'=>'desc'),
		),
	);

	// GET /topics
	function index() {
		$this->Topic->recursive = 0;
		$this->set('topics', $this->paginate());
		$this->set('topic_type', $this->params['topic_type']);
	}
	function api_index($topic_type = 'all') {
		Configure::write('debug', 0);
		$user = Configure::read('user');
		$this->layout = "ajax";
		$this->Topic->bindModel(array(
			'hasOne' => array(
				'TopicLike' => array(
					'fields' => array('uid'),
					'foreignKey' => 'topic_id',
					'conditions' => array(
						'TopicLike.uid' => $user['User']['facebook_id']
					)
				)
			)
		), false);
		$this->Topic->recursive = 1;
		$conditions = $topic_type !== 'all'
			? array('topic_type' => $topic_type)
			: array();
		$this->set('topics', $this->paginate('Topic',$conditions));
	}

	// GET /topics/1/view
	function view($id=null) {
		$topic = $this->Topic->findById($id);
		$this->set(compact('topic'));
	}

	// POST /topics/add
	function add() {
		if (empty($this->data)) {
			$this->cakeError('error403');
		}
		else {
			$this->Topic->create($this->data);
			if ($this->Topic->save()) {
				$this->redirect(array('action'=>'index'));
			}
			else {
				$this->cakeError('error503');
			}
		}
	}

	// GET  /topics/1/edit
	// POST /topics/1/edit
	function edit($id=null) {
		$topic = $this->Topic->findById($id);
		if (empty($topic)) {
			$this->cakeError('error403');
		}
		if(empty($this->data)) {
			// edit 画面表示
			$this->set('topic', $topic);
		}
		else {
			$this->Topic->set($this->data);
			if ($this->Topic->save()) {
				$this->redirect('.');
			}
			else {
				$this->cakeError('error503');
			}
		}
	}

	// POST /topics/1/destory
	function destory($id) {
		$topic = $this->Topic->findById($id);
		if ($topic) {
			$this->Topic->deleteById($id);
			$this->redirect(array('controller'=>'topics'));
		}
		else {
			$this->cakeError('error403');
		}
	}
}
