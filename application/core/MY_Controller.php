<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

// use namespace
use Restserver\Libraries\REST_Controller;

class MY_Controller extends REST_Controller {

    var $_data = array();
	
	protected $_skipmethods = array(); // disable authentification from an action inside a controller
	
	protected $_debug_auth = true; // force sample auth on debug dev
    
    public function __construct() {
		// Construct the parent class
        parent::__construct();
        
		// uncomment to active forensics debug bar
        //$this->output->enable_profiler(TRUE);
      		
		// ---------------------------------------
		// -- AUTHENTIFICATION
		// ---------------------------------------
		
		// Cloud protection
		if (ENVIRONMENT == 'production' || ENVIRONMENT == 'staging') {
			$this->_debug_auth = false;
		}
		
		// auth by using JWT token to decode office_seq, vendor_seq, user_seq
		$controller_action = $this->router->fetch_method(); //$this->router->fetch_class().'_'.$this->router->fetch_method();
		
		if (!empty($this->_skipmethods) && array_search($controller_action, $this->_skipmethods) !== false) {
			// break authentification step, no need credential info				
		} else {
			//$headers = $this->input->request_headers();
			$header_authorization = $this->input->get_request_header('Authorization');
			if (empty($header_authorization) || strpos($header_authorization, 'Bearer ') === false) {
				if ($this->_debug_auth) {
					// force sample cred
					$this->_data['cred'] = array(
						'vendor_seq' => 1,
						'office_seq' => 1002,
						'user_seq' => 1,
						'language' => 'FR'
					);

	
				} else {
					$this->response([
						$this->config->item('rest_status_field_name') => FALSE,
						$this->config->item('rest_message_field_name') => trim(sprintf($this->lang->line('text_rest_invalid_api_key'), ''))
					], self::HTTP_UNAUTHORIZED);				
				}
			} else {		
				// check token & fill out credential info
				$token_jwt = str_replace('Bearer ', '', $header_authorization);
				$manageUserAuthentification = Manage_User_Authentification::getInstance();
				$auth_result = $manageUserAuthentification->authJwtCheckToken($token_jwt);
				if (!empty($auth_result) && !empty($auth_result->cred) && !empty($auth_result->cred['vendor_seq'])) {
					$this->_data['cred'] = $auth_result->cred;

					// load permission included inside JWT for each request
					$this->_data['aclPermissions'] = $auth_result->permissions;
					
				} else {
					// expiration or bad token
					$this->response([
						$this->config->item('rest_status_field_name') => FALSE,
						$this->config->item('rest_message_field_name') => trim(sprintf($this->lang->line('text_rest_invalid_api_key'), ''))
					], self::HTTP_FORBIDDEN);	
				}
			}
		}     	
				
		// ---------------------------------------
		// -- FILTERS
		// ---------------------------------------		
		$this->_data['filter'] = array('sort' => null, 'page' => 1, 'per_page' => 50, 'limit' => 50, 'search' => null, 'fields' => null);
			
		// -- 
		// Paging of data (Paging makes the API fast & responsive)
		// GET /users?page=1&per_page=50
		if ($this->get('page')) {
			$this->_data['filter']['page'] = $this->get('page');
		}
		if ($this->get('per_page')) {
			$this->_data['filter']['per_page'] = $this->get('per_page');
			$this->_data['filter']['limit'] = $this->_data['filter']['per_page'];
		}
		if ($this->get('limit')) {
			$this->_data['filter']['limit'] = $this->get('limit');
			$this->_data['filter']['per_page'] = $this->_data['filter']['limit'];
		}
		
		// --
		// Search Sort & Filter
		// GET /users?sort=uuid,firstname,lastname
		if ($this->get('sort')) {
			$this->_data['filter']['sort'] = $this->get('sort');	
		}

		// --
		// Search key
		// GET /users?search=carl
		if ($this->get('search')) {
			$this->_data['filter']['search'] = $this->get('search');
		}

		// --
		// Allow the fields to be selected (The API consumer doesn't always need the full representation of a resource.)
		// GET /users?fields=uuid,firstname,lastname
		if ($this->get('fields')) {
			$this->_data['filter']['fields'] = $this->get('fields');	
		}
				
		//debug($this->_data['filter']);
    }
	
	protected function _set_custom_fields(&$data) {
		if (!empty($this->_data['filter']['fields'])) {
			$lstFields = explode(',', $this->_data['filter']['fields']);
			$lstFields = array_flip($lstFields);				
			foreach($data as &$item) {
				$item = array_intersect_key($item, $lstFields);					
			}
		}
		return $data;
	}
    
}