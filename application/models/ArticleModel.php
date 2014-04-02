<?php
class ArticleModel extends CI_Model{
	protected $_table = "blogs";
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
	
	public function insert($data){
		$this->db->insert($this->_table,$data);
		return $this->db->insert_id();
	}
	
	public function get_all_files($file_id=""){
		if($file_id !=""){
			$this->db->where("id",$file_id);
		}
		return $this->db->get($this->_table)->result_array();
	}
}


?> 