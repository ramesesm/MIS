<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MY_Controller 
{
	
	public function __construct()
	{
		    parent::__construct();
		    //$this->load->model('user_model');
	}	
	
	public function index()
	{	
		$this->_render('admin/admin');
		
	}

}