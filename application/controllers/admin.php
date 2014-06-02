<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this -> load -> model('adminModel', '', TRUE);
		$this -> load -> model('articleModel', '', TRUE);
				$this -> load -> model('restaurantModel', '', TRUE);
		$this -> load -> library('session');
		$this -> load -> helper('url');
		$this -> load -> helper('form');
	}
	public function login(){
			$admin = $_POST['admin'];
			$password = $_POST['password'];
			$ad = $this -> adminModel -> login($admin,$password);
			if($ad!=null)
			{
				$this -> session -> set_userdata('session_user',$ad);
				redirect('admin/admin_page/','refresh');
			}
			else
				{
					$result = array('result'=> "Error! Please try again!");
					$this -> load -> view('admin',$result);
				}	
	}
	
	private function isAdmin(){
		$data = $this -> session -> userdata('session_user');
		if($data!=null){
			return $data;
		}
		else{
			return FALSE;
		}
		
	}
	
	public function admin_page(){
		$result = $this -> articleModel -> blogs();
		$blogs = $result -> result_array();
		$data = array('blogs'=>$blogs);
		$data['restaurant'] = $this -> restaurantModel -> get_name();
		if($this -> isAdmin()){
			$this -> load -> view('adminpage',$data);
		}
		else{
			$this->no_permission();
			
		}
	}
	
	public function upload_file(){
		$status = "";
		$msg = "";
		$title = $this->input->post("title");
		$summary = $this->input->post("summary");
		$content = $this->input->post("content");
		$signature = $this->input->post("signature");
		if($title==null||$summary==null||$content==null||$signature==null)
		{
			echo "<script language=\"javascript\">
						window.location.href = 'http://localhost/foodvn/index.php/admin/admin_page';
						alert('You must enter all fields to upload! Try again!');</script>";
		}
		if($status!="error")
		{
			$config['upload_path'] = '.\upload';
			$config['allowed_types'] = 'png|jpg|gif';
			$config['max_size'] = 1024*8;
			$config['encrypt_name'] = TRUE;
			$this->load->library("upload",$config);
			if(!$this->upload->do_upload("file_name"))
				{
					$status="error";
					$msg = $this->upload->display_errors('<p>','</p>');
					echo $msg;
				}
			else
				{
					$this->load->model("ArticleModel");
					$data = $this->upload->data();
					$info = array("title"=>$_POST['title'],
					"summary"=>$_POST['summary'],
					"content"=>$_POST['content'],
					"signature"=>$_POST['signature'],
					"file_name"=>$data['file_name']);
					$fid = $this->ArticleModel->insert($info);
					if($fid){
							echo "<script language=\"javascript\">
						window.location.href = 'http://localhost/foodvn/index.php/admin/admin_page';
						alert('uploaded!');</script>";
					}
					else {
							echo "<script language=\"javascript\">
						window.location.href = 'http://localhost/foodvn/index.php/admin/admin_page';
						alert('You must enter all fields to upload! Try again!');</script>";
					}
				}
		}
		}

	public function delete_blog(){
		$id = $_GET['id'];
		if($this -> isAdmin()){
		$u = $this -> articleModel -> delete_blog($id);
		echo "<script language=\"javascript\">
		alert('deleted!');
		history.back();
		</script>";
		}
	}	
	
	public function upload_res(){
		$region = $this->input->post("region");
		$name_res = $this->input->post("name_res");
		$menu = $this->input->post("menu");
		$address = $this->input->post("address");
		if($region==null||$name_res==null||$menu==null||$address==null)
		{
			echo "<script language=\"javascript\">
						window.location.href = 'http://localhost/foodvn/index.php/admin/admin_page';
						alert('You must enter all fields to upload! Try again!');</script>";
		}
		else
		{
			if($this -> isAdmin()){
					$this->load->model("ArticleModel");
					$info = array("region"=>$_POST['region'],
					"name_res"=>$_POST['name_res'],
					"menu"=>$_POST['menu'],
					"address"=>$_POST['address']);
					$fid = $this->ArticleModel->insert_res($info);
					if($fid){
							echo "<script language=\"javascript\">
						window.location.href = 'http://localhost/foodvn/index.php/admin/admin_page';
						alert('uploaded!');</script>";
					}
			}
			}
			}
	
	public function search_res()
	{
		
		$result = $this -> articleModel -> blogs();
		$blogs = $result -> result_array();
		$data = array('blogs'=>$blogs);
		$data['restaurant'] = $this -> restaurantModel -> get_name();
		$this -> load -> view('adminpage',$data);
	}
	
	public function delete_res()
	{
		$id_res = $_GET['id_res'];
		if($this -> isAdmin()){
		$u = $this -> restaurantModel -> delete_res($id_res);
		echo "<script language=\"javascript\">
		alert('deleted!');
		history.back();
		</script>";
		}
	}
			
}
		