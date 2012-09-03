<?php

class Admin extends Controller{
	
	function Admin(){
		parent::Controller();
		$this->load->helper('form');
	}
	
	function index(){
		// load view
		$this->load->view('header');
		$this->load->view('admin_view');
		$this->load->view('footer');
	
	}
	
	function add(){
		// Insert meal into database and get array
		$id = $this->meals_model->insert_meal($_POST);
		$meal = $this->meals_model->get_meal($id);
				
		// Generate tiny URL			
		$this->load->helper('bitly_helper');
		$bitly = new Bitly();
		$bitly->set('nomealpoints','R_cffca0da875cf25106cfeb75291148a5');
		$url = $bitly->shorten(site_url("/meal/".$id));
		
		// Add tiny URL to DB for future access
		$this->meals_model->set_url($id, $url);
				
		// Tweet it
		$tweet = meal_to_english($meal) . " " . $url['url'];
		$this->load->helper('twitter_helper');
		if($meal->private == false){
			$this->load->library('twitter');
			$this->twitter->auth('','');
			$this->twitter->update($tweet);
		}

		
		// Output
		$this->load->view('header', $message['message'] = $tweet);
		$this->load->view('admin_view');
		$this->load->view('footer');
	}
	
}
	
?>