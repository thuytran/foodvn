<?php
class ArticleModel extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function blogs()
	{
	
		$select = $this->db->query("select * from blogs ORDER BY id DESC");
		return $select->result_array();
	}
	
	public function get_one($id){
		$result = $this->db->query("select * from blogs where id=?",array($id));
		return $result;
	}
}

?> 