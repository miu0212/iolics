<?php
class UsersController extends AppController {
	var $name = 'Users';

	function login() {
	}

	function logout() {
		$this->Auth->logout();
		$this->redirect('/');
	}
}
