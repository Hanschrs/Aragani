<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class MY_Controller extends CI_Controller 
	{
		public function __construct()
		{
			parent::__construct();
	    	$this->load->library('session');
	    	$this->load->helper('url');
	    	date_default_timezone_set('Asia/Jakarta');
		}

	}

	class Admin_Controller extends MY_Controller
	{
		
	}

	class Public_Controller extends MY_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function loadView($content, $data = '')
		{
			$this->load->view('common/header', $data);
			$this->load->view($content, $data);
			$this->load->view('common/footer', $data);
		}
	}

	class User_Controller extends MY_Controller
	{

	}

?>