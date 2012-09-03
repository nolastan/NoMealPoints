<?php

class Meals_model extends Model{
	
	function get_meals($numrows = 10, $private=FALSE){
		if($private) $private = 1; else $private = 0;
		$curtime = date('Y-m-d H:i:s');  // To make site independent of MySQL time
		$results = $this->db->query('SELECT * FROM meals WHERE private = '.$private.' AND (start > "'.$curtime.'") ORDER BY start ASC LIMIT '.$numrows);

		// set friendly_date
		foreach($results->result() as $row):
			$row->friendly_date = friendly_date($row->start,$row->end);
		endforeach;
		return $results;
	}
	
	function has_meals_today($private='FALSE'){
		$curtime = date('Y-m-d');  // To make site independent of MySQL time
		$curtime .= '%';
		$query = $this->db->query('SELECT * FROM meals WHERE private = '.$private.' AND start LIKE "'.$curtime.'" ORDER BY start ASC');
		if($query->num_rows() > 0)
		return true;
		else return false;
		
	}
	
	function get_meals_today($private='FALSE'){
		$curtime = date('Y-m-d');  // To make site independent of MySQL time
		$curtime .= '%';
		$results = $this->db->query('SELECT * FROM meals WHERE private = '.$private.' AND start LIKE "'.$curtime.'" ORDER BY start ASC');
		// set friendly_date
		foreach($results->result() as $row):
			$row->friendly_date = friendly_date($row->start,$row->end);
		endforeach;
		return $results;
		
	}
	
	function get_meal($id){
		$this->db->where('id', $id);
		$query = $this->db->get('meals');
		$meal = $query->row();
		$meal->friendly_date = friendly_date($meal->start, $meal->end);
		return $meal;
	}
	
	function insert_meal($vars){
		// inserts meal into db and returns confirmation message
		if($vars['start'] != "") $vars['start'] = date('Y-m-d H:i:s', strtotime($vars['start']));
		else $vars['start'] = NULL;
		if($vars['end'] != "") $vars['end'] = date('Y-m-d H:i:s', strtotime($vars['end']));
		else $vars['end'] = NULL;
		
		$this->db->insert('meals', $vars);	
		$first_id = $this->db->insert_id();
		if($vars['repeat'] == 1){
			while(strtotime($vars['start']) < (1273017600 - 604800)){ // TOFIX: Hard coded May 5, 2010
				if($vars['start'] != NULL) $vars['start'] = date('Y-m-d H:i:s', strtotime($vars['start']) + 604800); // add a week
				if($vars['end'] != NULL) $vars['end'] = date('Y-m-d H:i:s', strtotime($vars['end']) + 604800);
				$this->db->insert('meals', $vars);
				
				// This is repeated in the controller for the first instance
				
				// Generate tiny URL			
				$this->load->helper('bitly_helper');
				$bitly = new Bitly();
				$bitly->set('nomealpoints','R_cffca0da875cf25106cfeb75291148a5');
				$url = $bitly->shorten(site_url("/meal/".$this->db->insert_id()));
				
				// Add tiny URL to DB for future access
				$this->meals_model->set_url($this->db->insert_id(), $url);
			}
		}
		return $first_id;
	}
	
	function set_url($meal_id, $url){
		$data = array('tinyurl' => $url['url']);
		$where = "id = $meal_id";
		$this->db->query($this->db->update_string('meals', $data, $where));
	}

}