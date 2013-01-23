<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Services extends CI_Controller {	
	public function  __construct(){
		parent::__construct();			
	}
	
	public function index()
	{

 
		$data["title"]=substr ( $_SERVER [ "HTTP_ACCEPT_LANGUAGE" ], 0 , 5 );  
		$data["main_content"]="services";
		$this->load->view('template-services', $data);
	}	
}
