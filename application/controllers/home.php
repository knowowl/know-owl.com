<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {	
	public function  __construct(){
		parent::__construct();			
	}
	
	public function index()
	{
		$data["title"]="titulo";
		$data["main_content"]="home";
		$this->load->view('template', $data);
	}	
}