<?php
class AppModel extends Model {

	function beforeSave() {
		$user = Configure::read('user');
		if (!empty($user)) {
			
			$this->data[$this->alias]['uid'] = $user['User']['facebook_id'];
			$this->data[$this->alias]['name'] = $user['User']['name'];
		}
		return true;
	}
}
