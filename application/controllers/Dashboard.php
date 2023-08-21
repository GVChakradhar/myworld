<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->page_path='admin/layouts/main';
	}
	public function index()
	{
		$data['page_title']='Dashboard';
		$data['page_name']='dashboard';
		$this->load->view($this->page_path,$data);
	}
	public function users()
	{
		$data['page_title']='Users Table';
		$data['page_name']='users';
		$this->load->view($this->page_path,$data);
	}

}
