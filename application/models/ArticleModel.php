<?php
class ArticleModel extends CI_Model{
	protected $_table1 = "blogs";
	protected $_table2="article";
	protected $_table3="activity";
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
	
	public function get_id_article_last()
	{
		$this->db->select_max('id_article');
		$query = $this->db->get('article');
		return $query->row()->id_article;
	}
	
	public function get_article()
	{
		
		$select_article = $this->db->query("select * from article ORDER BY id_article DESC");
		return $select_article->result_array();
	}
	
	public function get_article_by_id($iduser)
	{
		$select_article_byid = $this->db->query("select * from article where iduser=$iduser ORDER BY id_article DESC");
		return $select_article_byid;
	}
	
	public function get_article_breakfast()
	{
		$select_article_breakfast = $this->db->query("select * from article where id_category=1 ORDER BY id_article DESC");
		return $select_article_breakfast->result_array();
	}
	
	public function get_article_appetizers()
	{
		$select_article_appetizers = $this->db->query("select * from article where id_category=2 ORDER BY id_article DESC");
		return $select_article_appetizers->result_array();
	}
	
	public function get_article_main()
	{
		$select_article_main = $this->db->query("select * from article where id_category=3 ORDER BY id_article DESC");
		return $select_article_main->result_array();
	}
	
	public function get_article_dessert()
	{
		$select_article_main = $this->db->query("select * from article where id_category=4 ORDER BY id_article DESC");
		return $select_article_main->result_array();
	}
	
	public function get_article_drink()
	{
		$select_article_main = $this->db->query("select * from article where id_category=5 ORDER BY id_article DESC");
		return $select_article_main->result_array();
	}
	
	public function get_article_cake()
	{
		$select_article_main = $this->db->query("select * from article where id_category=6 ORDER BY id_article DESC");
		return $select_article_main->result_array();
	}
	
	
	
	public function get_one_article($id_article)
	{
		$result = $this->db->query("select * from article where id_article=?",array($id_article));
		return $result;
	}
	
	public function insert_activity($activity){
		$this->db->insert($this->_table3,$activity);
		return $this->db->insert_id();
	}
	
	public function delete_article($id_article){
		$this->db->where("id_article",$id_article);
		$this->db->delete($this->_table2);
		return TRUE;
	}
	
	public function get_search()
	{
		$key_search = $this->input->post('key_search');
		if($key_search){
			$this->db->select("*");
			$this->db->from("article");
			$this->db->like("title_article", $key_search);
			return $this->db->get()->result_array();
		}
		return array();
	}

}
?>