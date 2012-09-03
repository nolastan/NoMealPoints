<?php

class Digest extends Controller{
	
	function Digest(){
		parent::Controller();
		$this->load->helper('form');
		$this->load->model('digest_model');	
	}
	
	function add(){

		$this->digest_model->add_email($_POST['email']);
		
		// load data for homepage
		$data['public'] = $this->meals_model->get_meals("6");
		$data['private'] = $this->meals_model->get_meals("3", TRUE);
		$header['message'] = "You will now receive the Daily Meal Digest.";
		$header['style'] = "important";
		
		// load view
		$this->load->view('header', $header);
		$this->load->view('home_view',$data);
		$this->load->view('footer');
	}
	
	function remove(){
		
		if($_POST){
			$this->digest_model->remove_email($_POST['email']);
			
			// load data for homepage
			$data['public'] = $this->meals_model->get_meals("6");
			$data['private'] = $this->meals_model->get_meals("3", TRUE);
			$header['message'] = "You will no longer receive the Daily Meal Digest.";
			$header['style'] = "important";

			// load view
			$this->load->view('header', $header);
			$this->load->view('home_view',$data);
			$this->load->view('footer');
			
		}else{
		
		// load data for homepage
		$header['message'] = "Unsubscribe from the Daily Meal Digest.";

		// load view
		$this->load->view('header', $header);
		$this->load->view('digest_remove');
		$this->load->view('footer');
		}
	}
}
		
?>