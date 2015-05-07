<?php
App::uses('AppModel', 'Model');
class User extends AppModel {

//////////////////////////////////////////////////

	public function beforeSave($options = array()) {
		if(isset($this->data[$this->name]['password'])) {
			$this->data[$this->name]['password'] = AuthComponent::password($this->data[$this->name]['password']);
		}
		return true;
	}
//6cfb5e7ba5fa202e923f45c534b87344440591e9
//////////////////////////////////////////////////

}
