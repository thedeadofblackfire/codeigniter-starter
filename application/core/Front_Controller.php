<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Front_Controller extends MX_Controller {

    var $_data = array();
    var $_layout = 'master_page'; // default layout
	protected $_default_filters = array(
            // archives
            'type' => '', 
            'agent' => '', 
            'widget' => '',
            'period' => '',
            // visitors
            'country' => '',
            'state' => ''
            );
	
	protected $_pagination_class = 'pagination pagination-xs m-top-none';
   
    public function __construct()
    {
        parent::__construct();
        //$this->_data['base_url'] = base_url();
        //$this->_data['assets_url'] = assets_url();
        $this->_data['scripts'] = array();
        $this->_data['stylesheets'] = array(); 

        //$this->_data['flashdata'] = $this->session->flashdata('feedback_information');
		$this->_data['flashdata'] = $this->session->flashdata();
        //$this->session->keep_flashdata('feedback_information');
        //debug($this->_data['flashdata']);
		
        $this->load->library('template');
        
       /*
        // With that done, load settings
		$this->load->library(array('session', 'settings/settings'));
        
        // Lock front-end language       
		if ( ! (is_a($this, 'Admin_Controller') and ($site_lang = AUTO_LANGUAGE)))
		{
			$site_public_lang = explode(',', Settings::get('site_public_lang'));

			if (in_array(AUTO_LANGUAGE, $site_public_lang))
			{
				$site_lang = AUTO_LANGUAGE;
			}
			else
			{
				$site_lang = Settings::get('site_lang');
			}
		}
        */

        defined('AUTO_LANGUAGE') or define('AUTO_LANGUAGE', 'en');   
        $site_lang = AUTO_LANGUAGE;
		// What language us being used
		defined('CURRENT_LANGUAGE') or define('CURRENT_LANGUAGE', $site_lang);

        
        $langs = $this->config->item('supported_languages');
        //dump($langs);
               
        /*
        $pyro['lang'] = $langs[CURRENT_LANGUAGE];
		$pyro['lang']['code'] = CURRENT_LANGUAGE;

		$this->load->vars($pyro);
        */

		// Set php locale time
		if (isset($langs[CURRENT_LANGUAGE]['codes']) and sizeof($locale = (array) $langs[CURRENT_LANGUAGE]['codes']) > 1)
		{
			array_unshift($locale, LC_TIME);
			call_user_func_array('setlocale', $locale);
			unset($locale);
		}
    
		// Reload languages  
		if (AUTO_LANGUAGE !== CURRENT_LANGUAGE)
		{         
			$this->config->set_item('language', $langs[CURRENT_LANGUAGE]['folder']);
                   
			$this->lang->is_loaded = array();
            $this->lang->language = array();
            $this->lang->load(array('app'), $langs[CURRENT_LANGUAGE]['folder']);            
			//$this->lang->load(array('errors', 'global', 'users/user', 'settings/settings', 'files/files'));
		}
		else
		{
            //$this->lang->is_loaded = array();
            $this->lang->load(array('app'));
			//$this->lang->load(array('global', 'users/user', 'files/files'));
		}
               
        // echo $this->config->item('language');
        //echo $this->lang->line('chat_installcode_title'); 
        
        // @todo format date for list (user settings)
        // D M d, \a\t h:i:s A
        // m/d/Y h:i:s A
        $this->_data['custom_settings'] = array(
            'date_format' => 'D M d h:i A Y',
			'date_format_ts' => 'm/d/Y h:ia',
			'date_format_db' => 'd-m-Y H:i',
			'date_format_pretty' => 'F d, Y h:i A',
            'select_per_page' => $this->session->userdata('select_per_page')
        );
    }
     
    protected function _mergeData($data) {
        $this->_data = array_merge($this->_data, $data);
    }
    
    // @todo add domain_host or company_id to detect theme
    protected function _setTheme($theme, $skin = '') {
        $this->template->set_theme($theme);
        
        defined('APP_THEME_PATH') || define('APP_THEME_PATH', '/assets/themes/'.$theme.'/');
        defined('APP_THEME_SKIN') || define('APP_THEME_SKIN', $skin); // skin-2
    }
    
    protected function _loadView($view = null, $layout = null, $template = false, $return = FALSE) {  
        //$headers = $this->input->request_headers();
        //$this->input->get_request_header('some-header', TRUE);
        if ($this->input->is_ajax_request() || $this->input->get_post('ajax')) {
            if ($template !== false) {            
                //$this->template->set_layout(false)->build($view, $this->_data);  
                echo $this->template->load_view($view, $this->_data);                
            } else {
                $this->load->view($view, $this->_data, $return);
            }
        } else if ($template !== false) {
                      
            if (!empty($layout)) $this->template->set_layout($layout);
            if (!empty($template) && $template !== true) $this->template->set_theme($template);
          
            $this->_setTheme($this->template->get_theme());
           
            $this->template->build($view, $this->_data, $return);			
        } else {        
            //$this->_data['main_content'] = 'page/v2_users';
            if (!empty($view)) $this->_data['main_content'] = $view;            
            $layout = (!is_null($layout)) ? $layout : $this->_layout;
			if ($layout == '') $layout = $view;
            $this->load->view($layout, $this->_data, $return);
        }
    }
    /* 
    public function _loadView($view = null, $layout = null) {  
        //$headers = $this->input->request_headers();
        //$this->input->get_request_header('some-header', TRUE);
        if ($this->input->is_ajax_request() || $this->input->get_post('ajax')) {
            $this->load->view($view);
        } else {        
            //$this->_data['main_content'] = 'page/v2_users';
            if (!empty($view)) $this->_data['main_content'] = $view;            
            $layout = (!empty($layout)) ? $layout : $this->_layout;
            $this->load->view($layout, $this->_data);
        }
    }
    */
	
	// force flashdata refresh if no use of redirection
	protected function _refreshFlashdata() {
		$this->_data['flashdata'] = $this->session->flashdata();		
	}
	
	protected function _buildCurrentPage($total, $offset, $per_page) {
	   $current_page = ceil($offset / $per_page) + 1;
	   $total_pages = ceil($total / $per_page);
	   $str = '<span>Page: '.$current_page.' of '.$total_pages.'</span>';
	   return $str;
    }
	
	protected function _buildPerPage($base_url, $per_page, $class = null) {
	   $lst = array(10, 20, 50, 100, 200, 500, 99999);
	   $str = '';	   
	   $str .= '<span>Show Per Page:</span>';
	   $str .= '<select class="input-small" id="itemsPerPage">';	   
	   foreach($lst as $inc) {
		   $str .= '<option value="'.$base_url.'&pp='.$inc.'"';
		   if ($per_page == $inc) $str .= ' selected="selected"';
           $label = ($inc == 99999) ? 'All' : $inc;
		   $str .= '>'.$label.'</option>';
	   }
       //option value="/contacts/index/itemsPerPage/200/source/all/group/all/optout/all/submitbutton/Filter">200</option>			
	   $str .= '</select>';
	   return $str;
    }
	
	// pull-right
    protected function _buildPagination($base_url, $total, $per_page, $class = null) {
        $this->load->library('pagination');      

	    if (is_null($class)) $class = $this->_pagination_class;
             
        $config['base_url'] = $base_url; //site_url("users/index?s=$search");

        $config['total_rows'] = $total;
        $config['per_page'] = $per_page;
        $config['uri_segment'] = 3;
        $config['num_links'] = 2;
        $config['full_tag_open'] = '<ul class="'.$class.'">';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['full_tag_close'] = '</ul>';
        //$config['prev_link'] = '&laquo; Previous';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        //$config['next_link'] = 'Next &raquo;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';    
        $config['first_link'] = '&laquo; First'; //FALSE;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';    
        $config['last_link'] = 'Last &raquo;'; // FALSE;
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['page_query_string'] = TRUE;           
        $this->pagination->initialize($config);
        return $this->pagination->create_links();
    }
    
    protected function _sortBy($pageUrl, $field_name = '') {
        $sort = array();
        $sessionFilter = $this->session->userdata($pageUrl.'_filters');
        //debug($sessionFilter);
        if ($field_name != '') {
            $sort['name'] = $field_name;
            if (!empty($sessionFilter['sorting_field']) && $sessionFilter['sorting_field'] == $sort['name']) {
                if ($sessionFilter['sorting_type'] == 'asc') {
                    $sessionFilter['sorting_type'] = 'desc';
                    $sort['type'] = 'desc';
                } else {               
                    $sessionFilter['sorting_type'] = 'asc';
                    $sort['type'] = 'asc';
                }
            } else {
                $sessionFilter['sorting_type'] = 'asc';
                $sessionFilter['sorting_field'] = $sort['name'];
                $sort['type'] = 'asc';
            }
        } else {
            if (!empty($sessionFilter['sorting_field']) && !empty($sessionFilter['sorting_type'])) {
                $sort['name'] = $sessionFilter['sorting_field'];
                $sort['type'] = $sessionFilter['sorting_type'];
            } else {
                $sort = NULL;
            }
        }

        $this->session->set_userdata($pageUrl.'_filters', $sessionFilter);
        
        return $sort;
    }
    
    protected function _initFilters($pageUrl = null) {
        if(is_null($pageUrl)) $pageUrl = $this->router->fetch_class().'_'.$this->router->fetch_method();
      
        $isSave = false;
        $sessionFilter = $this->session->userdata($pageUrl.'_filters');
        if (empty($sessionFilter)) $sessionFilter = array();
        $sessionFilter = array_merge($this->_default_filters, $sessionFilter);
        //debug($sessionFilter);
		
        // search
        $this->_data['search'] = '';
        if (!empty($sessionFilter['search'])) {
            $this->_data['search'] = $sessionFilter['search'];
        }
        $s = $this->input->get_post('filterSearch');
        if (!isset($s)) $s = $this->input->get_post('s');
        if (isset($s) && $s !== false && $s !== '_') {
            $this->_data['search'] = trim($s);
            $sessionFilter['search'] = $this->_data['search'];
            $isSave = true;
        }

        //debug($this->input->get_post('initPage'));
        // pagination
        if ($this->input->get_post('initPage')) $_GET['per_page'] = 0;        
        $this->_data['offset'] = isset($_GET['per_page']) ? $_GET['per_page'] : '0';    
       
	    // per page
		$this->_data['per_page'] = 20; // default;
		if (isset($_GET['pp'])) { 
			$this->_data['per_page'] = $_GET['pp'];
			$this->session->set_userdata('select_per_page', $this->_data['per_page']);
		} else if ($this->session->userdata('select_per_page')) {
            $this->_data['per_page'] = $this->session->userdata('select_per_page');
        } 
		/*else {
            $this->_data['per_page'] = isset($_GET['pp']) ? $_GET['pp'] : '20';
        }
		*/
		
        // sorting
        if ($this->input->post('fieldName')) {
            $this->_data['sort'] = $this->_sortBy($pageUrl, $this->input->post('fieldName'));
        } else {
            $this->_data['sort'] = $this->_sortBy($pageUrl);
        }        
        
        // custom
        $fType = $this->input->post('filterCustomType');
        $fValue = $this->input->post('filterCustomValue');
        
		if (isset($fType) && $fType != '' && isset($fValue) && $fValue !== false && $fValue !== '_') { 
			$sessionFilter[$fType] = $fValue;      
			$isSave = true;			
		}

        $this->_data['filters'] = $sessionFilter;
        
        // save session filters changed
        if ($isSave) $this->session->set_userdata($pageUrl.'_filters', $sessionFilter);
    }
        
	// always after _initFilters 	
	protected function _changeFilters($customFilters, $pageUrl = null) {
		if(is_null($pageUrl)) $pageUrl = $this->router->fetch_class().'_'.$this->router->fetch_method();
     
		$this->_data['filters'] = array_merge($this->_data['filters'], $customFilters);
	
        // save session filters changed
        $this->session->set_userdata($pageUrl.'_filters', $this->_data['filters']);
	}
		
    protected function _sendJson($data) {            
        header("access-control-allow-origin: *");
        
        header('content-type: application/json; charset=utf-8');   
        
        //if (!isset($_GET['callback'])) header('content-type: application/json; charset=utf-8');   
        //else header('content-type: application/javascript; charset=utf-8');   
        
        $json = json_encode($data);
    	
    	//echo isset($_GET['callback']) ? "{$_GET['callback']}($json)" : $json;
    	
    	# JSON if no callback
    	if (!isset($_GET['callback'])) exit($json);
    	
    	# JSONP if valid callback
    	if (self::is_valid_callback($_GET['callback']))	exit("{$_GET['callback']}($json)");
    	
    	# Otherwise, bad request
    	header('status: 400 Bad Request', true, 400);   

     }   
     
    /**
	 * Jsonp Callback security
     *
	 * Since the sender can send whatever they want as a callback, you could potentially have someone injecting malicious code there. 
	 * I�m not sure how likely this is to happen, but it is a possibility. 
	 * So I did some research and ended up with a function I could use to check that the callback is indeed a valid JavaScript identifier.
	 * 
	 * @param string $subject
	 */
	public static function is_valid_callback($subject) {
		$identifier_syntax = '/^[$_\p{L}][$_\p{L}\p{Mn}\p{Mc}\p{Nd}\p{Pc}\x{200C}\x{200D}]*+$/u';
	
		$reserved_words = array('break', 'do', 'instanceof', 'typeof', 'case',
	      'else', 'new', 'var', 'catch', 'finally', 'return', 'void', 'continue',
	      'for', 'switch', 'while', 'debugger', 'function', 'this', 'with',
	      'default', 'if', 'throw', 'delete', 'in', 'try', 'class', 'enum',
	      'extends', 'super', 'const', 'export', 'import', 'implements', 'let',
	      'private', 'public', 'yield', 'interface', 'package', 'protected',
	      'static', 'null', 'true', 'false');
	
		return preg_match($identifier_syntax, $subject)
		&& ! in_array(mb_strtolower($subject, 'UTF-8'), $reserved_words);
	}
    
}
