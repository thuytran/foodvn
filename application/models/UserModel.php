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
}
?>