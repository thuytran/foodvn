<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this -> load -> model('adminModel', '', TRUE);
		$this -> load -> model('articleModel', '', TRUE);
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
		if($this -> isAdmin()){
			$this -> load -> view('adminpage');
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
			$status ="error";
			$msg = "try again!";
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
						$status = "Success";
						$msg = "uploaded";
					}
					else {
						$status = "error";
						$msg = "try again!";
					}
				}
		}
		echo json_encode(array('status'=>$status,'msg' => $msg));

			}			
}
		