<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this -> load -> model('userModel', '', TRUE);
		$this -> load -> model('articleModel', '', TRUE);
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
		$username_ex = $_POST['username'];
		$rs = $this->userModel->check_exist_user($username_ex);
		if($rs==0){
		$iduser = $this -> get_current_user_id();
		if($_POST['username']==null || $_POST['fullname']==null || $_POST['password']==null || $_POST['password_2'] != $_POST['password'] || strlen($_POST['password']<8))
		{
			$result = array('result'=>"Something are wrong or missing, try again!");
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
			$result = array ('result'=>"register successfully, go to sign in");
			$this -> load ->view("sign_up",$result);
		}
		}
		else{
			$result = array('result'=>"this username is exist!");
			$this -> load -> view("sign_up",$result);
		}
	}

	public function sign_in()
	{
		$result = array ('result' => "");
		$this -> load -> view("sign_in",$result);
	}

	public function signin()
	{
		$username = $_GET['username'];
		$password = $_GET['password'];
		$user = $this -> userModel -> signin($username,$password);
		if($user!=null)
		{
			$this -> session -> set_userdata('session_user',$user);
			redirect('/user/homepage/','refresh');
		}
		else
		{
			$result = array('result' => "Thông tin đăng nhập không đúng, đăng nhập lại!");
			$this -> load -> view("sign_in",$result );
		}
	}

	public function homepage(){
		
		// Lấy query parameter truyền lên (ở đây đặt tên là page) để thực hiện phân trang
		$page =0;
		if(array_key_exists ("page", $_GET)){
			$page = intval($_GET["page"]) - 1;
			if($page < 0){
				$page = 0;
			}
		}
		// Fix cứng mỗi trang lấy ra chỉ có 8 phần tử
		$end = 8 * (1+ $page);
		$start = 8 * $page;
		
		// Truyền start với end vào để phân trang
		// Xem hàm phân trang được viết trong file: ArticleModel.php
		$article = $this -> articleModel -> get_article_paging($start, $end);
		
		// Đếm tổng số bản ghi để hiện thị số trang ở trang .php
		$total = $this->articleModel->count_article();
		
		$iduser = $this -> get_current_user_id();
		$result=$this -> userModel -> select($iduser);
		$user = $result -> result_array();
		if(count($user)==1){
			$data = array('user'=>$user[0],'article'=> $article, 'total'=>$total);
			$this -> load -> view('user_homepage',$data);
		}
		else
		{
			$data = array('article'=> $article, 'total'=>$total);
			$this -> load -> view('homepage', $data);
		}
	}

	public function userhome_breakfast(){
		$data_article['article'] = $this -> articleModel -> get_article_breakfast();
		$iduser = $this -> get_current_user_id();
		$result=$this -> userModel -> select($iduser);
		$user = $result -> result_array();
		if(count($user)==1){
			$data = array('user'=>$user[0],'article'=> $data_article['article']);
			$this -> load -> view('user_homepage',$data);
		}
		else
		{
			$this -> load -> view('homepage');
		}
	}

	public function userhome_appetizer(){
		$data_article['article'] = $this -> articleModel -> get_article_appetizers();
		$iduser = $this -> get_current_user_id();
		$result=$this -> userModel -> select($iduser);
		$user = $result -> result_array();
		if(count($user)==1){
			$data = array('user'=>$user[0],'article'=> $data_article['article']);
			$this -> load -> view('user_homepage',$data);
		}
		else
		{
			$this -> load -> view('homepage');
		}
	}

	public function userhome_main(){
		$article = $this -> articleModel -> get_article_main();
		$total = $this->articleModel->count_article();
		$iduser = $this -> get_current_user_id();
		$result=$this -> userModel -> select($iduser);
		$user = $result -> result_array();
		if(count($user)==1){
			$data = array('user'=>$user[0],'article'=> $article, 'total'=>$total);
			$this -> load -> view('user_homepage',$data);
		}
		else
		{
			$data = array('article'=> $article, 'total'=>$total);
			$this -> load -> view('homepage', $data);
		}
	}

	public function userhome_dessert(){
		$data_article['article'] = $this -> articleModel -> get_article_dessert();
		$iduser = $this -> get_current_user_id();
		$result=$this -> userModel -> select($iduser);
		$user = $result -> result_array();
		if(count($user)==1){
			$data = array('user'=>$user[0],'article'=> $data_article['article']);
			$this -> load -> view('user_homepage',$data);
		}
		else
		{
			$this -> load -> view('homepage');
		}
	}

	public function userhome_drink(){
		$data_article['article'] = $this -> articleModel -> get_article_drink();
		$iduser = $this -> get_current_user_id();
		$result=$this -> userModel -> select($iduser);
		$user = $result -> result_array();
		if(count($user)==1){
			$data = array('user'=>$user[0],'article'=>$data_article['article'] );
			$this -> load -> view('user_homepage',$data);
		}
		else
		{
			$this -> load -> view('homepage');
		}
	}

	public function userhome_cake(){
		$data_article['article'] = $this -> articleModel -> get_article_cake();
		$iduser = $this -> get_current_user_id();
		$result=$this -> userModel -> select($iduser);
		$user = $result -> result_array();
		if(count($user)==1){
			$data = array('user'=>$user[0],'article'=> $data_article['article'] );
			$this -> load -> view('user_homepage',$data);
		}
		else
		{
			$this -> load -> view('homepage');
		}
	}


	public function logout($value = ''){
		$this->session->unset_userdata('session_user');
		redirect("http://localhost/foodvn/index.php","refresh");
	}

	public function userpage()
	{
		$iduser = $this -> get_current_user_id();
		$result=$this -> userModel -> select($iduser);
		$user = $result -> result_array();
		$result2 = $this -> userModel -> select_activity($iduser);
		$activity = $result2 -> result_array();
		$result3 = $this -> articleModel -> get_article_by_id($iduser);
		$list_article_byid = $result3 -> result_array();
		$result4 = $this -> userModel -> select_name_user_follow($iduser);
		$relative = $result4 -> result_array();

		if(count($user)==1){
		$data = array('user' => $user[0],'activity'=>$activity,'result' => "",'list_article_byid'=>$list_article_byid,'relative'=>$relative);
		$this -> load -> view('userpage',$data);
		}
		else{
			redirect('userpage','refresh');
		}
	}


	public function update()
	{
		$iduser = $this -> get_current_user_id();
		$fullname2 = $_POST['fullname2'];
		$dob2 = $_POST['dob2'];
		$regions2 = $_POST['regions2'];
		$password_old = $_POST['password_old'];
		$password_new = $_POST['password_new'];
		$query = $this->db->query("select * from user");
		foreach($query->result_array()as $row)
		{
			$pw_o = $row['password'];
		}
		if(($iduser!=null)&&($fullname2!=null)&&($dob2!=null)&&($password_old!=null)&&($password_new!=null)&&($password_old==$pw_o)&&(strlen($password_new)>=8))
		{
			$user = array('fullname'=>$fullname2,'dob'=>$dob2,'regions'=>$regions2,'password'=>$password_new);
			$update = $this -> userModel -> update($iduser,$user);
			$this->userpage();
		}
		else{
				echo "<script language=\"javascript\">
						window.location.href = 'http://localhost/foodvn/index.php/user/userpage';
						alert('Failed! Try again!');</script>";
		}
	}

	public function upload_new_recipe(){
		$id_category = $this->input->post("id_category");
		$title_article = $this->input->post("title_article");
		$ingredients = $this->input->post("ingredients");
		$step1_prepare = $this->input->post("step1_prepare");
		$step2_making = $this->input->post("step2_making");
		$iduser = $this -> get_current_user_id();
		$username = $this -> get_current_username();
		if($title_article==null||$ingredients==null||$step1_prepare==null||$step2_making==null){
				echo "<script language=\"javascript\">
						window.location.href = 'http://localhost/foodvn/index.php/user/userpage';
						alert('You must enter all fields to upload! Try again!');</script>";
		}

		else
			{
				$config['upload_path'] = '.\upload';
				$config['allowed_types'] = 'png|jpg|gif';
				$config['max_size'] = 1024 * 8;
				$config['encrypt_name'] = TRUE;
				$this->load->library("upload",$config);
				if(!$this->upload->do_upload("file_name"))
					{
						echo "<script language=\"javascript\">
						window.location.href = 'http://localhost/foodvn/index.php/user/userpage';
						alert('You did not choose image to upload! Try again!');</script>";

					}
				else
					{
						$this->load->model("ArticleModel");
						$data = $this->upload->data();
						$info = array("iduser"=>$iduser,
						"username" => $username,
						"id_category" => $_POST['id_category'],
						"title_article" => $_POST['title_article'],
						"ingredients" => $_POST['ingredients'],
						"step1_prepare" => $_POST['step1_prepare'],
						"step2_making" => $_POST['step2_making'],
						"file_name" => $data['file_name']);

				       	$date = date('Y/m/d H:i:s');
						$id_article = $this->articleModel->get_id_article_last()+1;
						$activity = array("iduser"=>$iduser,
						"username"=>$username,
						"activity"=>"upload new recipe",
						"time"=>$date,
						"id_article"=>$id_article);

						$iduser = $this -> get_current_user_id();
						$result=$this -> userModel -> select($iduser);
						$user = $result -> result_array();
						$act = $this->ArticleModel->insert_activity($activity);      
						$fid = $this->ArticleModel->upload_new_recipe($info);
						$data = array('user'=>$user[0],'result' => "Uploaded!");
						$this -> load -> view("userpage",$data );
						redirect('http://localhost/foodvn/index.php/user/userpage', 'refresh'); 
					}
				}

		}
		
	public function check_user(){
		//khi nguoi dung nhan vao link nguoi dung khac kiem tra xem nguoi dung nay da dang nhap chua neu chua thi tra ve trang dang ky neu roi thi tra ve trang ca nhan nguoi dung
		if($this->my_usession->logged_in){
		$iduser = $_GET["iduser"];
		$user = $this -> userModel -> select($iduser) -> result_array();
		$data["user"] = count($user) > 0 ? $user[0] : null;
		$iduser_current = $this -> get_current_user_id(); // lay id user dang dang nhap
		$is_follower = $this -> userModel -> check_follow($iduser_current, $iduser);	
		if($is_follower){
			echo "da follow";
		}
		else{
			echo "chua follow";
		}
		
		if(($iduser!=$iduser_current)){
			$this->load->view('profile_user',$data); // neu la user khac yeu cau xem trang ca nhan cua nguoi su dung thi tra ve trang cua nguoi do
			
		}
		else
			{
				$this->userpage(); // neu la user click vao chinh ten minh thi load trang ca nhan cua chinh nguoi do
			}
			}

		else{
			$result = array('result' => "You need to sign in before viewing this page!");
			$this -> load -> view("sign_in",$result );
		}
	}

	// public function profile_user(){
		// //ham thuc hien khi nguoi dung muon xem trang ca nhan cua nguoi dung khac
// 		
	// }

	public function detail_article()
	{
		$id_article = $_GET["id_article"];
		$article = $this -> articleModel -> get_one_article($id_article)->result_array();
		$data["point_article"] = $this -> userModel -> average_point_rating($id_article); 
		$data["article"] = count($article) > 0 ? $article[0] : null;
		$this->load->view('detail_recipes',$data);
	}

	public function rating()
	{
		if($this->my_usession->logged_in){
		$this -> load -> model('userModel','',TRUE);
		$this -> load -> model('articleModel','',TRUE);
		$point = $this->input->post('point_rating');
		$id_article = $this->input->post('id_article');
		$iduser = $this -> get_current_user_id();
		$data = array('iduser' => $iduser, 'id_article' => $id_article, 'point' => $point );

		$date = date('Y/m/d H:i:s');
		$username = $this -> get_current_username();
		$activity = array("iduser"=>$iduser,
						"username"=>$username,
						"activity"=>"rate a recipe",
						"time"=>$date,
						"id_article"=>$id_article);

		$act = $this -> articleModel -> insert_activity($activity); 
		$rating = $this -> userModel -> rating($data,$iduser,$id_article);
		echo "<script language=\"javascript\">
		alert('thank you!');
		history.back();
		</script>";
		}
		else{
		echo "<script language=\"javascript\">
		alert('You should signin to rate this recipe!');
		history.back();
		</script>";
		}

	}

	public function delete_article()
	{
		$id_article = $_GET['id_article'];
		$user = $this -> articleModel -> delete_article($id_article);
		echo "<script language=\"javascript\">
		alert('deleted!');
		history.back();
		</script>";

	}

	public function search_recipe(){
		$data['article'] = $this -> articleModel -> get_search();
		$this->load->view('recipes',$data);

	}

	public function follow_friend()
	{
		$iduser1 = $this->get_current_user_id();
		$iduser2 = $_GET['iduser'];
		$username2 = $this -> userModel -> select_username($iduser2)-> result_array();//list array chua rat nhieu user 
		if($username2 != null && count($username2)){
			$follower = $username2[0]["username"];
			$data = array('iduser' => $iduser1, 'iduser_follow' => $iduser2, 'username_follow' => $follower);
			$follow_friend = $this -> userModel -> follow_friend($data,$iduser1,$iduser2); 
			$user = $this -> userModel -> select($iduser2) -> result_array();
			$activity = $this -> userModel -> select_activity($iduser2) -> result_array();
			$relative = $this -> userModel ->  get_relative($iduser2) -> result_array();
			$list_article_byid = $this -> articleModel -> get_article_by_id($iduser2) -> result_array();			
			$data = array('user' => $user[0],'activity'=>$activity,'relative' => $relative,'list_article_byid'=>$list_article_byid);
			$this->load->view('friend_page',$data);

		}
		return;

	}


}