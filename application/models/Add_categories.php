<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Add_categories extends CI_Model{

	function getcategories(){
		return $this->db->order_by('id','desc')->get('categories')->result();
	}
	function storecategory($data)
	{
        $response=$this->db->insert('categories',$data);
		return $this->db->insert_id();
		// if($id>0){
		// }
		// if($response){
		// 	return true;
		// }else{
		// 	return false;
		// } 
	}

	function updatecategory($data,$id)
	{
		$this->db->where('id',$id);
		$response=$this->db->update('categories',$data);
		//return $this->db->insert_id();
		if($response){
			return true;
		}
		else{
			return false;
		}
	}
	function deletecategory($id)
	{
		$this->db->where("id", $id);
		$response=$this->db->delete('categories');
		if($response){
			return true;
		}
		else{
			return false;
		}
	}
	function editcategory($id)
	{
        // $this->db->where('id',$id);
        // $response= $this->db->update('categories');
		// if($response)
		// {
		// 	return true;
		// }
		$query=$this->db->get_where('categories', ['id'=>$id]);
		if($query){
			return $query->row();
		}
		else{
			return false;
		}
	}

}