<?php
class AppController extends Controller {
	var $helpers = array('Session','Facebook.Facebook');
	var $components = array('Session',
		'Auth' => array(
			'allowedActions' => array('index', 'api_index', 'view', 'display'),
		),
		'Facebook.Connect');

	function beforeFilter() {
		$facebook_id = $this->getFacebookId();
		var_dump($this->Connect->user());
		if ($this->mustLogout($facebook_id, $this->Auth->user('facebook_id'))) {
			$this->Auth->logout();
			return;
		}
		$user = $this->Auth->user();
		$this->set('user', $user);
		Configure::write('user', $user);
	}

	function getFacebookId() {
		try {
			return $this->Connect->user('id');
		}
		catch (Exception $e) {
			return null;
		}
	}

	function mustLogout($facebook_id) {
		// ローカルの Facebook ID が存在しない場合は、まだログインしていないので
		// ログアウトする必要はない
		if ($this->isAuthorized() || empty($local_facebook_id)) {
			return false;
		}

		// Facebook ユーザID が取得できなくて、ローカルの Facebook ID がある場合は、
		// ログアウトする必要がある。
		if (empty($facebook_id) && !empty($local_facebook_id)) {
			return true;
		}

		// Facebook ID とローカルの Facebook Id が異なる場合はログアウトしなければならない
		return $facebook_id == $local_facebook_id;
	}

	function needLogout($id, $fid) {
		if (empty($fid) && !empty($id)) {
			return true;
		}
		return $fid != $id;
	}


	function isAuthorized() {
		return $this->Auth->user() != null;
	}

	function beforeFacebookSave() {
		$this->Connect->authUser['User']['name'] = $this->Connect->user('name');
		return true;
	}
}
