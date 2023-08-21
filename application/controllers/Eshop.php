<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include 'Categories.php';
class Eshop extends CI_Controller {
	function __construct(){
		parent::__construct();
		//$this->page_path='eshop/layouts/home';
		$this->page_path='eshop/layouts/main';
	}
	public function index()
	{
		
		//$data['page_name']='home';
		$data['page_title']='Home';
		$data['page_name']='mainpage';
		//$this->load->view('eshop/layouts/home');
		$this->load->view($this->page_path,$data); 
	}
	public function blog_single()
	{
		$data['page_name']='blog_single';
		$data['page_title']='Blog_single';
		$this->load->view($this->page_path,$data);
	}
	public function cart()
	{
		$data['page_name']='cart';
		$data['page_title']='Cart';
		$this->load->view($this->page_path,$data);
	}
	public function checkout()
	{
		$data['page_name']='checkout';
		$data['page_title']='Checkout';
		$this->load->view($this->page_path,$data);
	}
	public function contact()
	{
		$data['page_name']='contact';
		$data['page_title']='Contact';
		$this->load->view($this->page_path,$data);
	}
	public function shop_grid()
	{
		$data['page_name']='shop_grid';
		$data['page_title']='Shop_grid';
		$this->load->view($this->page_path,$data);
	}

}
