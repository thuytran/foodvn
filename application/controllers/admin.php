<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this -> load -> model('adminModel', '', TRUE);
	}
	public function login(){
			$admin = $_POST['admin'];
			$password = $_POST['password'];
			$ad = $this -> adminModel -> login($admin,$password);
			if($ad!=null)
			{
				redirect('/admin/adminpage/','refresh');
			}
			else
				{
					$result = array('result'=> "Error! Please try again!");
					$this -> load -> view('admin',$result);
				}
				
	}
}