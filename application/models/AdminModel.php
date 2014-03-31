<?php
class AdminModel extends CI_Model{
	public function __construct(){
		parent::__construct();
		
	}
	
	public function login()
	{
		$query = "select admin, password from admin where admin=? and password=?";
		$squery = $this->db->query($query,array($admin,$password));
		if($squery!=null&&$squery->num_rows()==1){
			return $squery->row();
		}
		return null;
	}
}

?> 