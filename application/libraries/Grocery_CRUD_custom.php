<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Grocery CRUD custom
 *
 * We use session to not disturb default grocery code repository
 *
 */
class Grocery_CRUD_custom extends Grocery_CRUD
{

	public function __construct() {
        parent::__construct();
		
		$_SESSION['grocery_custom'] = array(
			'buttons_main' => null,
			'buttons_toolbar' => null
		);	
	}

	public function set_button_main($button)
	{		
		$_SESSION['grocery_custom']['buttons_main'] = $button;

		return $this;
	}
	
	public function set_button_toolbar($button)
	{		
		$_SESSION['grocery_custom']['buttons_toolbar'] = $button;

		return $this;
	}
	
}