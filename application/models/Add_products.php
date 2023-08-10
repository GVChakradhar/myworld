<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Add_products extends CI_Model{

	function getproducts(){
		return $this->db->order_by('id','desc')->get('products')->result();
	}
	function storeproduct($data)
	{
        $response=$this->db->insert('products',$data);
		return $this->db->insert_id();
	}
	function deleteproduct($id)
	{
		$this->db->where("id", $id);
		$response=$this->db->delete('products');
		if($response){
			return true;
		}
		else{
			return false;
		}
	}

	function editproduct($id)
	{
		$query=$this->db->get_where('products', ['id'=>$id]);
		if($query){
			return $query->row();
		}
		else{
			return false;
		}
	}
	function updateproduct($data,$id)
	{
		$this->db->where('id',$id);
		$response=$this->db->update('products',$data);
		//return $this->db->insert_id();
		if($response){
			return true;
		}
		else{
			return false;
		}
	}

}