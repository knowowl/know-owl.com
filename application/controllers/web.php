<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Web extends CI_Controller {
	public $css=array("estilo.css", "footer.css", "header.css");
	public $js=array("jquery.js","ciclo.js", "codigo.js");
	public $fonts=array("http://fonts.googleapis.com/css?family=Open+Sans:300");
	public $template=array();
	public function  __construct(){
		parent::__construct();	
		$this->load->helper('url');
		$this->load->helper('form');		
		$this->header["nav"]="";

		$this->nav["nav"]=array(
	        "Acerca"     =>base_url(""),
		    "Servicios"  =>base_url("index.php/web/service"),
		    "Productos"  =>base_url("index.php/web/product"),
			"Contactanos"=>base_url("index.php/web/contact"));	

		$this->footer["nav"]="";
	}
	private function build($content, $data, $title="KnowOwl"){
		$this->head["title"]=$title;
		$this->head["css"]=$this->css;
		$this->head["js"]=$this->js;
		$this->head["fonts"]=$this->fonts;
		$this->template["header"]=$this->load->view('layouts/header', $this->header, true);
		$this->template["head"]=$this->load->view('layouts/head', $this->head, true);
		$this->template["nav"]=$this->load->view('layouts/nav', $this->nav, true);
		$this->template["footer"]=$this->load->view('layouts/footer', $this->footer, true);	
		$this->template["content"]=$this->load->view($content, $data, true);	
		$this->load->view('layouts/main', $this->template);
	}
	public function index()
	{
		$this->nav["btn_active"]=1;
		$data="";
		$this->build('web/index', $data);	
	}
	public function services()
	{
		$this->nav["btn_active"]=2;
		$data="";
		$this->build('web/services', $data);	
	}
	public function products()
	{
		$this->nav["btn_active"]=3;
		$data="";
		$this->build('web/products', $data);	
	}
	public function contacts()
	{
		$this->nav["btn_active"]=4;
		$data="";
		$this->build('web/contacts', $data);	
	}
}
