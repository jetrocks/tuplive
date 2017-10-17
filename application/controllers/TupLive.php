<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tuplive extends CI_Controller {

	public function __construct(){
		parent::__construct();
	
	}
		
	public function index()
	{	


		$this->load->view('include/startup');

	}
	
	public function logged()
	{
		$this->load->view('include/Tliveface');	
	}
	
	public function about()
	{
		$this->load->view('include/about');	
	}

	
	public function about()
	{
		$this->load->view('include/about.html');		
	}	
	
	public function admin()
	{
		$this->load->view('include/admin.html');		
	}	
	
	public function adminacctlist()
	{
		$this->load->view('include/adminacctlist.html');		
	}	
	
	public function adminwritenews()
	{
		$this->load->view('include/adminwritenews.html');		
	}
	
	

}
