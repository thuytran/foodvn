<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Restaurant extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->database();
		$this -> load -> model('restaurantModel');
	
	}
	public function search(){
		$data['restaurant'] = $this -> restaurantModel -> get_search();
		// echo "<pre>";
		// var_dump($data['restaurant']);
		$this->load->view('restaurants',$data);
		
	}
	 
}