<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Add_products');
        $this->page_path='admin/layouts/main';
	}
    public function index()
    {
       $data['page_name']='products/showproducts';
       $data['products_list']=$this->Add_products->getproducts();
       $this->load->view($this->page_path,$data);
    }
   public function addproducts()
    {
       $data['page_name']='products/addproducts';
       $this->load->view($this->page_path,$data);
    }
    public function addproduct()
    {
       //$this->load->view('admin/products/showproducts');
       $this->form_validation->set_rules('name', 'name', 'required');
       $this->form_validation->set_rules('description', 'description', 'required');
       $this->form_validation->set_rules('price', 'price', 'required');
       $this->form_validation->set_rules('quantity', 'quantity', 'required');

       if ($this->form_validation->run() == FALSE)
       {
           $this->session->set_flashdata('error','Enter the Valid Input');
           redirect('products/addproducts');
       }
       else
       {
            /*Check submit button */
            if($this->input->post('submit'))
            {
                $data['name']=$this->input->post('name');
                $data['description']=$this->input->post('description');
                $data['price']=$this->input->post('price');
                $data['quantity']=$this->input->post('quantity');
                $data['image']=$this->input->post('image');
                $response=$this->Add_products->storeproduct($data);
                if($response>0)
                {
                    move_uploaded_file($_FILES["image"]["tmp_name"],'uploads/products/'.$response.'.png' );
                    $this->session->set_flashdata('success','Data Added Successfully');
                    redirect('products');
                }
                else{
                    echo "Insert error !";
                }
            }

        }
    }

    public function updateproducts()
    {
         /*Check submit button */
       if($this->input->post('usubmit'))
       {
            $id=$this->input->get('id');
           $data['name']=$this->input->post('uname');
           $data['description']=$this->input->post('udescription');
           $data['price']=$this->input->post('uprice');
           $data['quantity']=$this->input->post('uquantity');
           
           $response=$this->Add_products->updateproduct($data,$id);
           //print_r($response);die;
           if($response>0)
           {
               $this->session->set_flashdata('success','Data Updated Successfully');
                redirect('products');
           }
           else{
                //echo "Insert error !";
                $this->session->set_flashdata('error','Data not Updated');
                redirect('products');
           }
       }
    }
    public function deleteproducts()
    {
        if($this->input->get('id'))
        {
            $id=$this->input->get('id');
            $response=$this->Add_products->deleteproduct($id);
            $this->session->set_flashdata('error','Data Delated Successfully');
            if($response==true)
            {
                //echo "Data deleted successfully !";
                $this->session->set_flashdata('error','Data Deleted Successfully');
                redirect('products');
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
    public function editproduct()
    {
        if($this->input->get('id'))
        {
            $id = $this->input->get('id');
            $response=$this->Add_products->editproduct($id);
            $data['product']=$this->Add_products->editproduct($id);
            if($response == true)
            {
                $data['page_name']='products/editproducts';
                $this->load->view($this->page_path,$data);
            }
            else{
               $this->session->set_flashdata('error','Invalid  "id"  Product not found.');
               redirect('products');
            }
           
        }
      
    }
}
 ?>