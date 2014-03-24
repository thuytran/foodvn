<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this -> load -> model('userModel', '', TRUE);
		$this -> load -> library('session');
		$this -> load -> helper('form');
		$this -> load -> helper('url');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 function get_current_user_id() {
		$data = $this -> session -> userdata('session_user');
		if ($data != null) {
			return $data -> iduser;
		} else {
			return null;
		}
	}
	
	
	function get_current_username(){
		$data = $this -> session -> userdata('session_user');
		if($data != null){
			return $data -> username;
		}
		else{
			return null;
		}
	}
	
	
	public function sign_up()
	{
		$result = array ('result' => "");
		$this -> load -> view("sign_up",$result);
	}


	public function register(){
		$iduser = $this -> get_current_user_id();
		$this -> load -> model('userModel','',TRUE);
		if($_POST['username']==null || $_POST['fullname']==null || $_POST['password']==null || $_POST['password_2'] != $_POST['password'] || strlen($_POST['password']<8))
		{
			$result = array('result'=>"Nhập thiếu hoặc sai các trường đề nghị đăng ký lại!");
			$this -> load -> view("sign_up",$result);
		}
		else
			{
			$username = $_POST['username'];
			$fullname = $_POST['fullname'];
			$password = $_POST['password'];
			$email = $_POST['email'];
			$dob = $_POST['dob'];
			$regions = $_POST['regions'];
			$user = array('iduser'=>$iduser,'username'=>$username,'fullname'=>$fullname,'dob'=>$dob,'regions'=>$regions,'email'=>$email,'password'=>$password);
			$insert_new_user = $this -> userModel ->insert_new_user($user);
			$result = array ('result'=>"Đăng ký thành công quay lại trang chủ để đăng nhập!");
			$this -> load ->view("sign_up",$result);
			}
		
	}
	
	public function sign_in()
	{
		$result = array ('result' => "");
		$this -> load -> view("sign_in",$result);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */