<?php

class Home extends Controller{
	
	function Home(){
		parent::Controller();
		$this->load->helper('form');		
	}
	
	function index(){
		$header['message'] = "";
		$data['public'] = $this->meals_model->get_meals("15");
		// $data['private'] = $this->meals_model->get_meals("3", TRUE);
		
		// load view
		$this->load->view('header', $header);
		$this->load->view('home_view',$data);
		$this->load->view('footer');
		
	}

}

?>