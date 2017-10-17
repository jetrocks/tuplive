<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tuplive extends CI_Controller {

	public function __construct(){
		parent::__construct();
	
	}
		
	public function index()
	{	
		// echo "Bootstrap Controller";

		$this->load->view('include/Tliveface.php');
	}
	
	public function login()
	{
		$this->load->view('include/login');		
	}
	
	public function logged()
	{
		$this->load->view('include/Tliveface_logged');		
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
