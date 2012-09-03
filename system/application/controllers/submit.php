<?php

class Submit extends Controller{
	
	function Submit(){
		parent::Controller();
		$this->load->helper('form');	
	}
	
	// for submitting a meal
	function index(){
		
		// send as email
		if($_POST){
			$emailmessage = "";
			
			$this->load->library('email');

			$this->email->from('website@nomealpoints.com', 'nomealpoints');
			$this->email->to('meals@nomealpoints.com');

			$this->email->subject($this->input->post('title'));
			foreach($_POST as $field=>$value){
				$emailmessage .= $field . ": ". $value . "\n";
			}
			$this->email->message($emailmessage);

			$this->email->send();
		}
		
		// load data for homepage
		$data['public'] = $this->meals_model->get_meals("6");
		$data['private'] = $this->meals_model->get_meals("3", TRUE);
		$header['message'] = "Thank you for your submission.";
		$header['style'] = "important";
		
		// load view
		$this->load->view('header', $header);
		$this->load->view('home_view',$data);
		$this->load->view('footer');
		
	}
	
	function tip(){
		if($_POST){			
			$this->load->library('email');

			$this->email->from('website@nomealpoints.com', 'nomealpoints');
			$this->email->to('meals@nomealpoints.com');

			$this->email->subject("Tip Submission");
			
			$this->email->message($this->input->post('info'));

			$this->email->send();
		}
		
		$data['public'] = $this->meals_model->get_meals("6");
		$data['private'] = $this->meals_model->get_meals("3", TRUE);
		$header['message'] = "Thank you for your tip.";
		$header['style'] = "important";
		
		// load view
		$this->load->view('header', $header);
		$this->load->view('home_view',$data);
		$this->load->view('footer');
		
	}
	

}

?>