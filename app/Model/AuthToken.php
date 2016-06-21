<?php
App::uses('AppModel', 'Model');

class AuthToken extends AppModel {

	public function getToken(){
		return $this->find('first');
	}

	public function saveToken($token){
		$existsToken = $this->getToken();
		if(!empty($existsToken)){
			$save['id'] = $existsToken['AuthToken']['id'];
		}
		$save['token'] = $token;

		if($this->save($save)){
			$result = true;
		}

		return $result;
	}

}
