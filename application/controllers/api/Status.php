<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// use namespace
use Restserver\Libraries\REST_Controller;

class Status extends MY_Controller {

    public function __construct() {
		// Construct the parent class
        parent::__construct();
                   
    }

    public function index_get() {

        $this->response(array('success' => true), REST_Controller::HTTP_OK); // OK (200) being the HTTP response code	
       
    }

}
