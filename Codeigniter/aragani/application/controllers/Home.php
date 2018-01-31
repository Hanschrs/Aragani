<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Home extends Public_Controller
	{
		function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
			$data['active'] = 1;
			$this->loadView('index', $data);
		}

		public function about()
		{
			$data['active'] = 2;
			$this->loadView('about', $data);
		}

		public function competition()
		{
			$data['active'] = 3;
			$this->loadView('competition', $data);
		}

		public function festival()
		{
			$data['active'] = 4;
			$this->loadView('festival', $data);
		}

		public function contact_us()
		{
			$data['active'] = 5;
			$this->loadView('contact_us', $data);
		}
	}

?>