<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Boot extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Students_model','Students');
	}
		
	public function index()
	{	
		// echo "Bootstrap Controller";

		$data['title']="Bootstrap intro";
		$data['contents']="Display Bootstrap Contents";
		$this->load->view('include/header', $data);
		$this->load->view('include/footer', $data);
		$this->load->view('students/list_students');
	}
	
}
