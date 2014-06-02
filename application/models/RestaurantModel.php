<?php
class RestaurantModel extends CI_Model{
	public $_table = "restaurant";
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	 public function get_search(){
	 	$key_search = $this->input->post('key_search');
		$region = $this->input->post('region');
		if($key_search){
			$this->db->select("*");
			$this->db->from("restaurant");
			$this->db->like("menu", $key_search);
			$this->db->like("region",$region);
			return $this->db->get()->result_array();
		}
		return array();
	 	
	 }
	 
	 public function get_name(){
	 	$key_search = $this->input->post('key_search');
		// $get_name = $this->db->query("select * from restaurant where name_res like '%".$key_search."%' ");
		// return $get_name;
			if($key_search){
			$this->db->select("*");
			$this->db->from("restaurant");
			$this->db->like("name_res", $key_search);
			return $this->db->get()->result_array();
		}
		return array();
	 }
	 
	 public function delete_res($id_res){
	 	$this->db->where("id_res",$id_res);
		$this->db->delete($this->_table);
		return TRUE;
	 }
}

