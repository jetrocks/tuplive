<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tuplive extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('date');
		$this->load->helper('url');
		$this->load->model('Sched_model','Sched');
	
	}
		
	public function index()
	{	
		$this->load->view('include/nowstreaming');
	}
	
	public function watchlist()
	{
		$localtime=now();
		$ph_time=gmt_to_local($localtime, 'UP7', TRUE);
		$data['date']=date("M d,Y - l",$ph_time);

		$date=date("M d,Y - l",$ph_time);
		$data['prog']=$this->Sched->get_all();
		$data['rep']=$this->Sched->get_all_repeats();
		
		$this->load->view('include/watchlist',$data);		
	}
	
	public function request()
	{
		$this->load->view('include/request');		
	}
	public function about()
	{
		$this->load->view('include/about');		
	}

	public function request_success()
	{
		$this->load->view('include/requestsuccess');		
	}
	
	public function confirmation()
	{
		
		require 'assets/PHPMailerAutoload.php';

		$mail = new PHPMailer;
		
		//$mail->SMTPDebug = 3;                               // Enable verbose debug output
		$receiver=$_POST['email'];
		
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'dexfornillos3@gmail.com';                 // SMTP username
		$mail->Password = 'linapo123';                           // SMTP password
		$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 465;                                    // TCP port to connect to
		
		$mail->setFrom('tuplive@tuplive.com', 'Tuplive Team');
		$mail->addAddress($receiver);     // Add a recipient
		
		
		$mail->isHTML(true);                                  // Set email format to HTML
		
		$mail->Subject = 'Schedule Request Pass.';
		$mail->Body    = 'Thank you for your request!<br />
							To complete schedule request please click on the link to go to the request form<br />
							<a href="localhost/tuplive2/schedrequest/'.$receiver.'">TUP Live Timeslot Request Form</a>';
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		
		if(!$mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			echo ' ';
		}

		redirect(base_url('request_success'),'refresh');
		
		
		
	}
	
}
