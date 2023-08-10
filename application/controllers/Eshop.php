<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eshop extends CI_Controller {
	function __construct(){
		parent::__construct();
		//$this->page_path='eshop';
	}
	public function index()
	{
		//$data['page_name']='eshop';
		$this->load->view('eshop/home');
	}
	// public function users()
	// {
	// 	$data['page_name']='users';
	// 	$this->load->view($this->page_path,$data);
	// }

}
