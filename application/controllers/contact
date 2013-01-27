<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Contact extends CI_Controller {	
	public function  __construct(){
		parent::__construct();			
	}
	
	public function index()
	{ 
		$data["title"]=substr ( $_SERVER [ "HTTP_ACCEPT_LANGUAGE" ], 0 , 5 );  
		$data["main_content"]="contact";
		$this->load->view('template-contact', $data);
	}	
}
