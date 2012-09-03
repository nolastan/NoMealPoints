<?php

class Calendar extends Controller{
	
	function index(){
		$data['meals'] = $this->meals_model->get_meals();
		$this->load->view('ical_feed_view', $data);

	}

}

?>