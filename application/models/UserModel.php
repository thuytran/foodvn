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
	
	public function select_activity($iduser)
	{
		$result2 = $this->db->query("select * from activity where iduser=?",array($iduser));
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

			if($query != null){
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

	
}
		