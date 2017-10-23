<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Sched_model','Sched');
	
	}
		
	public function index()
	{
		$data['pend']=$this->Sched->get_all_pending();
		$this->load->view('admin/admin.php',$data);	
	}	

	public function pendview($progname)
	{
		$progname=urldecode($progname);
		$data['pend']=$this->Sched->get_with_progname($progname);

		$data['pendrep']=$this->Sched->get_with_progname_pendrep($progname);
		$this->load->view('admin/pendingview.php',$data);		
	}	
	public function adminproglist()
	{
		$data['prog']=$this->Sched->get_all();
		$this->load->view('admin/adminproglist.php',$data);		
	}	

	public function adminprogview($id)
	{
		$data['prog']=$this->Sched->get_with_id($id);
		$this->load->view('admin/adminprogview.php',$data);		
	}
	public function success($email)
	{
		require 'assets/PHPMailerAutoload.php';
		$pend=$this->Sched->get_with_tupmail($email);
		$mail = new PHPMailer;
		
		//$mail->SMTPDebug = 3;                               // Enable verbose debug output
		
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'dexfornillos3@gmail.com';                 // SMTP username
		$mail->Password = 'linapo123';                           // SMTP password
		$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 465;                                    // TCP port to connect to
		
		$mail->setFrom('tuplive@tuplive.com', 'Tuplive Team');
		$mail->addAddress($email);     // Add a recipient
		
		
		$mail->isHTML(true);                                  // Set email format to HTML
		
		$mail->Subject = 'Thank you!';
		$mail->Body    = 'Your schedule request has been submitted!';
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		
		if(!$mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			echo ' ';
		}
		//print_r($pend);
		$id=$this->Sched->get_progid();
		foreach($pend as $p){
		$data=array(
				'tupmail' => $p['tupmail'],
				'progname' => $p['progname'],
				'streamer' => $p['streamer'],
				'college' => $p['college'],
				'startdate' => $p['startdate'], 
				'rep' => $p['rep'], 
				'prog_id' => $id, 
				'length' => $p['length'],
				'enddate' => $p['enddate'], 
				'starttime' => $p['starttime'], 
				'endtime' => $p['endtime'], 
				'description' => $p['description'],
			);
		}

		$days=$this->Sched->get_with_progname_pendrep($data['progname']);

		if($data['rep']== 'Weekly'){
						$days=$this->Sched->get_with_progname_pendrep($data['progname']);

						$this->Sched->create_sched($data);
						$this->Sched->create_repeats($data,$days);
						$this->Sched->delete_with_tupmail($email);
						$this->Sched->delete_with_progname($data['progname']);

						echo '<script> alert("Success! Verification mail has been sent to the user") </script>';
						redirect('admin','refresh');
					}
			else if($data['rep']== 'Daily' ||$data['rep']=='Never'){
					$this->Sched->create_sched($data);
					$this->Sched->delete_with_tupmail($email);
					echo '<script> alert("Success! Verification mail has been sent to the user") </script>';
					redirect('admin','refresh');
					}		
		
		
				
	}
	public function decline($email)
	{
		require 'assets/PHPMailerAutoload.php';

		$mail = new PHPMailer;
		
		//$mail->SMTPDebug = 3;                               // Enable verbose debug output
		
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'dexfornillos3@gmail.com';                 // SMTP username
		$mail->Password = 'linapo123';                           // SMTP password
		$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 465;                                    // TCP port to connect to
		
		$mail->setFrom('tuplive@tuplive.com', 'Tuplive Team');
		$mail->addAddress($email);    // Recipient format 	email, name
		
		
		$mail->isHTML(true);                                  // Set email format to HTML
		
		$mail->Subject = 'Sorry!';
		$mail->Body    = 'Due to restriction reasons, your schedule request has been declined.';
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		
		if(!$mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			echo ' ';
		}
		$pend=$this->Sched->get_with_tupmail($email);

		foreach($pend as $p){
		$data=array(
				'tupmail' => $p['tupmail'],
				'progname' => $p['progname'],
				'streamer' => $p['streamer'],
				'college' => $p['college'],
				'startdate' => $p['startdate'], 
				'rep' => $p['rep'], 
				'length' => $p['length'],
				'enddate' => $p['enddate'], 
				'starttime' => $p['starttime'], 
				'endtime' => $p['endtime'], 
				'description' => $p['description'],
			);
		}

		if($data['rep']== 'Weekly'){

						$this->Sched->delete_with_tupmail($email);
						$this->Sched->delete_with_progname($data['progname']);
						echo '<script> alert("Deleted! Verification mail has been sent to the user") </script>';
						redirect('admin','refresh');
					}
			else if($data['rep'] == 'Daily' || $data['rep'] =='Never'){
					$this->Sched->delete_with_tupmail($email);
					echo '<script> alert("Deleted! Verification mail has been sent to the user") </script>';
					redirect('admin','refresh');
					}			
	}
	public function canceled()
	{
		require 'assets/PHPMailerAutoload.php';

		$mail = new PHPMailer;
		
		//$mail->SMTPDebug = 3;                               // Enable verbose debug output
		
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'dexfornillos3@gmail.com';                 // SMTP username
		$mail->Password = 'linapo123';                           // SMTP password
		$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 465;                                    // TCP port to connect to
		
		$mail->setFrom('tuplive@tuplive.com', 'Tuplive Team');
		$mail->addAddress('jekjekfornillos@gmail.com', 'Dex Fornillos');     // Add a recipient
		
		
		$mail->isHTML(true);                                  // Set email format to HTML
		
		$mail->Subject = 'Apologies';
		$mail->Body    = 'We are sorry to tell you that the timeslot you have occupied has been canceled due to legitimate reasons.';
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		
		if(!$mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			echo ' ';
		}
		
		redirect('adminproglist','refresh');		
	}
}
