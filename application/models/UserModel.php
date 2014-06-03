<?php
class UserModel extends CI_Model{
	protected $_table="user";
	public function __construct(){
		parent::__construct();
	}

	public function insert_new_user($user)
	{
		$insert_new_user = $this->db->insert("user",$user);
		return $insert_new_user;
	}

	public function signin($username,$password)
	{
		$sql = "select iduser, username, fullname from user where username=? and password =?";
		$query = $this->db->query($sql,array($username,$password));
		if($query != null && $query->num_rows()==1){
			return $query->row();
		}
		return null;
	}

	public function select($iduser)
	{
		$result = $this->db->query("select * from user where iduser=?",array($iduser));
		return $result;
	}

		public function select_username($iduser)
	{
		$result = $this->db->query("select username from user where iduser=?",array($iduser));
		return $result;

	}

	public function select_activity($iduser)
	{
		$result2 = $this->db->query("select * from activity where iduser=?" ,array($iduser));
		return $result2;

		}

		public function update($iduser,$user)
		{
			$this->db->where('iduser',$iduser);
			$result = $this->db->update("user" ,$user);
			return $result;
		}

		public function rating($data,$iduser,$id_article)
		{

			$sql = "select iduser, id_article from rating where iduser=? and id_article =?";
			$query = $this->db->query($sql,array($iduser,$id_article));
			if($query !=null && $query->num_rows()==1){
				echo "<script language=\"javascript\">
				alert('You rated this recipe and can not rate again!');
				</script>";
				return null;
		}
		else{
			$this->db->insert("rating",$data);
			return $this->db->insert_id();
		}

	}

		public function average_point_rating($id_article){
			$this->db->select_avg('point');
			$this->db->where('id_article', $id_article);
			$query = $this->db->get('rating')->result_array();
			return count($query)?$query[0]["point"]:null;
		}

		public function follow_friend($data,$iduser1,$iduser2){
			$sql = "select * from relative where iduser = $iduser1 and iduser_follow = $iduser2";
			$query = $this->db->query($sql,array($iduser1,$iduser2));
			if($query!= null & $query->num_rows()==1){
				echo "<script language=\"javascript\">
				alert('this user was your friend!');
				</script>";
				return null;
			}
			else{
				$this->db->insert("relative",$data);
				return $this->db->insert_id();		
			}
		}

		public function get_relative($iduser2){
			$result = $this->db->query("select * from relative where iduser=?" ,array($iduser2));
			return $result;
			$result2 = $this->db->query("select * from user where iduser=?",array($result));
			return $result2;

		}
		
		public function get_user(){
			$key_search = $this->input->post('key_search');
			if($key_search){
				$this->db->select("*");
				$this->db->from("user");
				$this->db->like("username",$key_search);
				return $this->db->get()->result_array();
			}
			return array();
		}
		
		public function delete_user($iduser){
			$this->db->where("iduser",$iduser);
			$this->db->delete($this->_table);
			return TRUE;
		}

}