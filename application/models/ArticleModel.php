<?php
class ArticleModel extends CI_Model{
	protected $_table1 = "blogs";
	protected $_table2="article";
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
		$this->db->insert($this->_table1,$data);
		return $this->db->insert_id();
	}
	
	public function upload_new_recipe($data){
		$this->db->insert($this->_table2,$data);
		return $this->db->insert_id();
	}
	
	public function get_article()
	{
		$select_article = $this->db->query("select * from article ORDER BY id_article DESC");
		return $select_article->result_array();
	}
	
	public function get_one_article($id_article)
	{
		$result = $this->db->query("select * from article where id_article=?",array($id_article));
		return $result;
	}
}
?>