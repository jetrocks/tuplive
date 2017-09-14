<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Students_model','Students');
	}
		
	public function index()
	{	
		$students = $this->Students->read();
		
		$data['students'] = $students;
		
		$this->load->view('students_welcome',$data);
	}
	
	public function view_student(){
		
	}
	
	public function update_student(){
		
	}
	
	public function delete_student(){
		
	}
}
