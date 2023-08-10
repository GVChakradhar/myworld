<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Add_categories');
        $this->page_path='admin/layouts/main';
	}
	 public function index()
	 {
		$data['page_name']='categories/showcategories';
        $data['categories_list']=$this->Add_categories->getcategories();
		$this->load->view($this->page_path,$data);
	 }
    public function addcategories()
	 {
		$data['page_name']='categories/addcategories';
		$this->load->view($this->page_path,$data);
	 }
    public function addcategory()
    {
       /*Check submit button */
    //    echo "<pre/>";
    //    print_r($_POST);
    //    print_r($_FILES);die;
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');
        $this->form_validation->set_rules('image', 'image', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('error','Enter the Valid Input');
            redirect('categories/addcategory');
        }
        else
        {
            if($this->input->post('submit'))
            {
                $data['name']=$this->input->post('name');
                $data['description']=$this->input->post('description');
                //$data['image']=$this->input->post('image');
                $response=$this->Add_categories->storecategory($data);
                if($response>0)
                {
                    move_uploaded_file($_FILES["image"]["tmp_name"],'uploads/categories/'.$response.'.png' );
                    $this->session->set_flashdata('success','Data Added Successfully');
                    redirect('categories');
                }
                else
                {
                    echo "Insert error !";
                }
            
            }
      
       }
    }

    public function updatecategories()
    {
        if($this->input->post('usubmit'))
        {
            $id=$this->input->get('id');
            $data['name']=$this->input->post('uname');
            $data['description']=$this->input->post('udescription');
            //$data['image']=$this->input->post('image');
            $response=$this->Add_categories->updatecategory($data,$id);
            if($response>0)
            {
                 move_uploaded_file($_FILES["uimage"]["tmp_name"],'uploads/categories/'.$response.'.png' );
                 $this->session->set_flashdata('success','Data Updated Successfully');
                 redirect('categories');
            }
            else
            {
                 echo "Update error !";
                 $this->session->set_flashdata('error','Data not Updated');
                 redirect('categories');
            } 
        }
    }
   
    public function deletecategories()
    {
        if($this->input->get('id'))
        {
            $id=$this->input->get('id');
            $response=$this->Add_categories->deletecategory($id);
            if($response==true)
            {
                //echo "Data deleted successfully !";
                $this->session->set_flashdata('error','Data Deleted Successfully');
                redirect('categories');
            }
            else
            {
                echo "Error !";
            }
        }else
        {
            echo "Id Not found";
        }
    } 

    public function editcategory()
    {
        if($this->input->get('id'))
        {
            $id = $this->input->get('id');
            $response=$this->Add_categories->editcategory($id);
            $data['category']=$this->Add_categories->editcategory($id);
            if($response == true)
            {
                $data['page_name']='categories/editcategories';
                $this->load->view($this->page_path,$data);
            }
            else{
                $this->session->set_flashdata('error','Category not found.');
                redirect('categories');
            }
           
        }
      
    }
}
 ?>