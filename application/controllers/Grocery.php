<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Grocery extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->output->enable_profiler(TRUE);
		
		//$this->load->library('crud');
		//$this->load->library('grocery_CRUD');
		
	}

	public function _example_output($output = null)
	{
		$this->load->view('adminto_grocery.php',(array)$output);
		//$this->load->view('grocery.php',(array)$output);
	}

	public function offices()
	{
		$output = $this->grocery_crud->render();

		$this->_example_output($output);
	}

	public function index()
	{
		//$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
		
		try{
			$crud = new Grocery_CRUD_custom();
			
			//$crud->set_model('custom_query_model');
			$crud->set_table('customers');
			$crud->columns('customerName','contactLastName','phone','city','country','salesRepEmployeeNumber','creditLimit');
			
			//$crud->set_crud_url_path(site_url('admin/settings/index'));
			$crud->set_crud_url_path('/grocery/index', '/grocery/index');
			
			$crud->display_as('salesRepEmployeeNumber','from Employeer')
				 ->display_as('customerName','Name')
				 ->display_as('contactLastName','Last Name');
				 
			$crud->set_subject('Customer', 'Customers');
			$crud->set_relation('salesRepEmployeeNumber','employees','lastName');
			
			$crud->set_button_main('<button class="btn btn-primary">test</button>');
			$crud->set_button_toolbar('<a class="btn btn-warning t5" href="/"><i class="fa fa-cloud-download floatL t3"></i> <span class="hidden-xs floatL l5">test</span><div class="clear"></div></a>');
			//$crud->unset_search();
			//$crud->unset_minimize();
			//$crud->unset_fullscreen();
			//$crud->set_shortcut('<div class="dropdown pull-right"><a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a><ul class="dropdown-menu" role="menu"><li><a href="#">Action</a></li><li class="divider"></li><li><a href="#">Separated link</a></li></ul></div>');
			//$crud->set_shortcut('<button type="button" class="btn btn-default waves-effect">Left</button><button type="button" class="btn btn-default waves-effect">Middle</button><button type="button" class="btn btn-default waves-effect">Right</button>');
			
			/*
			$crud->unset_add();
			$crud->unset_delete();
			$crud->unset_edit();
			$crud->unset_read();
			*/
			
			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
		
	}

	public function offices_management()
	{
		try{
			$crud = new grocery_CRUD();
			$crud->set_language("french");

			$crud->set_theme('adminto');
			$crud->set_table('offices');
			$crud->set_subject('Office');
			$crud->required_fields('city');
			$crud->columns('city','country','phone','addressLine1','postalCode');

			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function employees_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('employees');
			$crud->set_relation('officeCode','offices','city');
			$crud->display_as('officeCode','Office City');
			$crud->set_subject('Employee');

			$crud->required_fields('lastName');

			$crud->set_field_upload('file_url','assets/uploads/files');

			$output = $crud->render();

			$this->_example_output($output);
	}

	public function customers_management()
	{

			$crud = new Grocery_CRUD_custom();
			
			//$crud->set_model('custom_query_model');
			$crud->set_table('customers');
			$crud->columns('customerName','contactLastName','phone','city','country','salesRepEmployeeNumber','creditLimit');
			
			//$crud->set_crud_url_path(site_url('admin/settings/index'));
			//$crud->set_crud_url_path('/admin/settings/index', '/admin/settings');
			
			$crud->display_as('salesRepEmployeeNumber','from Employeer')
				 ->display_as('customerName','Name')
				 ->display_as('contactLastName','Last Name');
				 
			$crud->set_subject('Customer', 'Customers');
			$crud->set_relation('salesRepEmployeeNumber','employees','lastName');
			
			$crud->set_button_main('<button class="btn btn-primary">test</button>');
			$crud->set_button_toolbar('<a class="btn btn-warning t5" href="/"><i class="fa fa-cloud-download floatL t3"></i> <span class="hidden-xs floatL l5">test</span><div class="clear"></div></a>');
			//$crud->unset_search();
			//$crud->unset_minimize();
			//$crud->unset_fullscreen();
			//$crud->set_shortcut('<div class="dropdown pull-right"><a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a><ul class="dropdown-menu" role="menu"><li><a href="#">Action</a></li><li class="divider"></li><li><a href="#">Separated link</a></li></ul></div>');
			//$crud->set_shortcut('<button type="button" class="btn btn-default waves-effect">Left</button><button type="button" class="btn btn-default waves-effect">Middle</button><button type="button" class="btn btn-default waves-effect">Right</button>');
			
			/*
			$crud->unset_add();
			$crud->unset_delete();
			$crud->unset_edit();
			$crud->unset_read();
			*/
			
			$output = $crud->render();

			$this->_example_output($output);
	}

	public function orders_management()
	{
		
			$crud = new grocery_CRUD();

			$crud->set_relation('customerNumber','customers','{contactLastName} {contactFirstName}');
			$crud->display_as('customerNumber','Customer');
			$crud->set_table('orders');
			$crud->set_subject('Order');
			$crud->unset_add();
			$crud->unset_delete();

			$output = $crud->render();

			$this->_example_output($output);
			
	}

	public function products_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('products');
			$crud->set_subject('Product');
			$crud->unset_columns('productDescription');
			$crud->callback_column('buyPrice',array($this,'valueToEuro'));

			$output = $crud->render();

			$this->_example_output($output);
	}

	public function valueToEuro($value, $row)
	{
		return $value.' &euro;';
	}

	public function film_management()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('film');
		$crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname','priority');
		$crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');
		$crud->unset_columns('special_features','description','actors');

		$crud->fields('title', 'description', 'actors' ,  'category' ,'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');

		$output = $crud->render();

		$this->_example_output($output);
	}

	public function film_management_twitter_bootstrap()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('twitter-bootstrap');
			$crud->set_table('film');
			$crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname','priority');
			$crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');
			$crud->unset_columns('special_features','description','actors');

			$crud->fields('title', 'description', 'actors' ,  'category' ,'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');

			$output = $crud->render();
			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	function multigrids()
	{
		$this->config->load('grocery_crud');
		$this->config->set_item('grocery_crud_dialog_forms',true);
		$this->config->set_item('grocery_crud_default_per_page',10);

		$output1 = $this->offices_management2();

		$output2 = $this->employees_management2();

		$output3 = $this->customers_management2();

		$js_files = $output1->js_files + $output2->js_files + $output3->js_files;
		$css_files = $output1->css_files + $output2->css_files + $output3->css_files;
		$output = "<h1>List 1</h1>".$output1->output."<h1>List 2</h1>".$output2->output."<h1>List 3</h1>".$output3->output;

		$this->_example_output((object)array(
				'js_files' => $js_files,
				'css_files' => $css_files,
				'output'	=> $output
		));
	}

	public function offices_management2()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('offices');
		$crud->set_subject('Office');

		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

		$output = $crud->render();

		if($crud->getState() != 'list') {
			$this->_example_output($output);
		} else {
			return $output;
		}
	}

	public function employees_management2()
	{
		$crud = new grocery_CRUD();

		$crud->set_theme('datatables');
		$crud->set_table('employees');
		$crud->set_relation('officeCode','offices','city');
		$crud->display_as('officeCode','Office City');
		$crud->set_subject('Employee');

		$crud->required_fields('lastName');

		$crud->set_field_upload('file_url','assets/uploads/files');

		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

		$output = $crud->render();

		if($crud->getState() != 'list') {
			$this->_example_output($output);
		} else {
			return $output;
		}
	}

	public function customers_management2()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('customers');
		$crud->columns('customerName','contactLastName','phone','city','country','salesRepEmployeeNumber','creditLimit');
		$crud->display_as('salesRepEmployeeNumber','from Employeer')
			 ->display_as('customerName','Name')
			 ->display_as('contactLastName','Last Name');
		$crud->set_subject('Customer');
		$crud->set_relation('salesRepEmployeeNumber','employees','lastName');

		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

		$output = $crud->render();

		if($crud->getState() != 'list') {
			$this->_example_output($output);
		} else {
			return $output;
		}
	}

}
