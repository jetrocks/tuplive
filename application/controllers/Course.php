<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {

	public function __construct(){
		parent::__construct();
	
	}
		
	public function index()
	{	
		$this->load->view('course/dashy.php');
	}
	
	public function create_course()
	{	
		$this->load->view('course/newcourse');
	}
	
	public function read_course()
	{	
	
	}
	
	public function update_course()
	{	
	
	}
	
	public function delete_course()
	{	
	
	}
	
}
