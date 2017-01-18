<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Demo extends MX_Controller 
{
    function __construct()
    {
        parent::__construct();
		
		//$this->load->library('form_validation');
        //$this->form_validation->CI =& $this;
    }
	
	public function index() {
		
		$this->output->enable_profiler(true);

        $this->load->view('welcome_message');
    }
}