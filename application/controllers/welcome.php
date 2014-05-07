<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this -> load -> model('articleModel', '', TRUE);
		$this -> load -> model('restaurantModel', '', TRUE);
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
	public function index()
	{
		$data['article'] = $this -> articleModel -> get_article();
		$this->load->view("homepage",$data);
	}
	
	public function breakfast()
	{
		$data['article'] = $this -> articleModel ->get_article_breakfast();
		$this->load->view("homepage",$data);
	}
	
	public function appetizers(){
		$data['article'] =$this->articleModel ->get_article_appetizers();
		$this->load->view("homepage",$data);
	}
	
	public function main()
	{
		$data['article'] = $this->articleModel->get_article_main();
		$this->load->view("homepage",$data);
	}

	public function dessert()
	{
		$data['article'] = $this->articleModel->get_article_dessert();
		$this->load->view("homepage",$data);
	}

	public function drink()
	{
		$data['article'] = $this->articleModel->get_article_drink();
		$this->load->view("homepage",$data);
	}
	
	public function cake()
	{
		$data['article'] = $this->articleModel->get_article_cake();
		$this->load->view("homepage",$data);
	}
	
	public function admin()
	{
		$result = array('result'=>"");
		$this->load->view('admin',$result);
	}
	
	public function about()
	{
		$this->load->view('about_us');
	}
	public function recipes()
	{
		$data['article']=$this -> articleModel -> get_search();
		$this->load->view("recipes",$data);
	}
	public function restaurants()
	{
		$data['restaurant'] = $this -> restaurantModel -> get_search();
		
		$this->load->view("restaurants",$data);
	}
	public function blogs()
	{		
		$data['blogs'] = $this -> articleModel -> blogs();
		$this->load->view("blogs",$data);		
	}

	public function detail()
	{
		$id = $_GET["id"];
		$blogs = $this -> articleModel -> get_one($id)->result_array();
		$data["blogs"] = count($blogs) > 0 ? $blogs[0] : null;
		$this->load->view('blogs_detail',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */