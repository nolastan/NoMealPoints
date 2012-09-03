<?php

class Meal extends Controller{

	function index(){
		// get meal info
		$data['meal'] = $this->meals_model->get_meal($this->uri->segment(2));
		$data['public'] = $this->meals_model->get_meals("4");
		$data['title'] = $data['meal']->title . " on ";
		$data['description'] = meal_to_english($data['meal']);
		$data['meal']->date = date("l, F d, Y", strtotime($data['meal']->start));
		$data['meal']->start = date("h:i a", strtotime($data['meal']->start));
		$data['meal']->message = meal_to_english($data['meal']);
		if(!$data['meal']->end) $data['meal']->end = "<em>unknown</em>";
		else $data['meal']->end = date("h:i a", strtotime($data['meal']->end));
		if(!$data['meal']->location) $data['meal']->location = "<em>unknown</em>";
		if($data['meal']->private == 1) $data['meal']->meal_msg = "This meal is closed to the public.";
		else $data['meal']->meal_msg = null;


		// load view
		$this->load->view('header',$data);
		$this->load->view('meal',$data);
		$this->load->view('footer');
	}
	
	function ics(){
		$this->load->helper('force_download');
		$data['meal'] = $this->meals_model->get_meal($this->uri->segment(2));
		$this->load->view('ical_view',$data);
		
	    
		
	
	}


}