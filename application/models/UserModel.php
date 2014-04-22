<?php
class UserModel extends CI_Model{
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
	
	public function update($iduser,$user)
	{
		$this->db->where('iduser',$iduser);
		$result = $this->db->update("user",$user);
		return $result;
	}
}
