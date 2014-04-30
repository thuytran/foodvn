<?php
class RestaurantModel extends CI_Model{
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
}

