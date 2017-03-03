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
			'buttons_toolbar' => null,
			'search' => false,
			'fullscreen' => false,
			'minimize' => false,
			'shortcut' => null
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
		
	public function set_shortcut($button)
	{		
		$_SESSION['grocery_custom']['shortcut'] = $button;

		return $this;
	}
	
	public function unset_search()
	{
		$_SESSION['grocery_custom']['search'] = true;

		return $this;
	}
	
	public function unset_fullscreen()
	{
		$_SESSION['grocery_custom']['fullscreen'] = true;

		return $this;
	}
	
	public function unset_minimize()
	{
		$_SESSION['grocery_custom']['minimize'] = true;

		return $this;
	}
}