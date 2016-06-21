<?php
App::uses('AppController', 'Controller');
App::uses('HttpSocket', 'Network/Http');

class WebserviceController extends AppController {


	public $components = array('RequestHandler');
	public $uses = array('AuthToken', 'Produto');

	public function login($intern = false){
		
		$response = false;
		$data = array('grant_type' => 'client_credentials');
		$result = $this->_request('login', Configure::read('APP_KEY'), 'post', $data);

		if(isset($result->access_token)){
			if($this->AuthToken->saveToken($result->access_token)){
				$response = 'Registrado com sucesso.';
			} else {
				$response = 'Erro ao fazer login, verifique a AppKey.';
			}
			if($intern){
				return $result->access_token;
			}
		}

		$this->set(array(
            'response' => $response,
            '_serialize' => array('response')
        ));
	}

	public function listProducts($id = false, $intern = false){
		$return = false;
		$token = $this->AuthToken->getToken();
		$url = 'products';

		if($id){
			$url = 'products/'.$id;
		}

		$response = $this->makeRequest($url, $token['AuthToken']['token'], 'get');

		if($intern){
			return $response;
		}

		$this->set(array(
            'response' => $response,
            '_serialize' => array('response')
        ));

	}

	public function postProducts(){
		$products = $this->Produto->teste();
		$token = $this->AuthToken->getToken();
		//$response = array();
		//debug($products);die;

		foreach ($products as $key => $value) {
			$response[] = $this->makeRequest('products', $token['AuthToken']['token'], 'post', json_encode($value), 'application/json', 'pt-BR');
		}

		$this->set(array(
            'response' => $response,
            '_serialize' => array('response')
        ));
	}

	public function putProduct($id){
		$token = $this->AuthToken->getToken();
		$data = $this->listProducts($id, true);
		$data = $this->Produto->putProduct($data);
		
		$response = $this->makeRequest('products/'.$id, $token['AuthToken']['token'], 'put', json_encode($data), 'application/json', 'pt-BR');

		$this->set(array(
            'response' => $response,
            '_serialize' => array('response')
        ));
	}

	public function validateToken(){
		//validar token (busca token do banco, manda pra validar, se não valida - refresh, salva no banco, retorna token)
		$token = $this->AuthToken->getToken();

	}

	public function makeRequest($url, $token, $type, $data = array(), $contentType = 'application/x-www-form-urlencoded', $language = ''){

		$response = $this->_request($url, $token, $type, $data, $contentType, $language);

		if(isset($response->status) && $response->status == '401'){
			
			$return = $this->login(true);
			if($return){
				$response = $this->_request($url, $return, $type, $data, $contentType);
			}
		}

		if(isset($response->errorCode) && $response->errorCode != '20006'){
			
			if(isset($response->status)){
				$tk = $this->_refreshToken($token);
				if($tk){
					$this->makeRequest($url, $tk, $type, $data, $contentType);
				}
			}
		}
	    
	    return $response;
	}

	private function _request($url, $token, $type, $data = array(), $contentType = 'application/x-www-form-urlencoded', $language = ''){

		$HttpSocket = new HttpSocket();

		$request = array(
	        'header' => array(
	            'Authorization' => 'Bearer '.$token,
	            'Content-Type' => $contentType,
	            'x-ccasset-language' => $language
	        ),
	    );

	    if($type == 'post'){
	    	$result = $HttpSocket->post(Configure::read('BASE_URL').$url, $data, $request);
	    } else if($type == 'get'){
	    	$result = $HttpSocket->get(Configure::read('BASE_URL').$url, $data, $request);
	    } else if($type = 'put'){
	    	$result = $HttpSocket->put(Configure::read('BASE_URL').$url, $data, $request);
	    }

		return json_decode($result->body);
	}

	private function _refreshToken($oldToken){
		$response = false;
	    $result = $this->_request('refresh', $oldToken, 'post');

	    if(isset($result->access_token)){
		    if($this->AuthToken->saveToken($result->access_token)){
				$response = $result->access_token;
			}
		}

		return $response;
	}


}