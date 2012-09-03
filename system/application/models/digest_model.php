<?php

class Digest_model extends Model{

	function add_email($email){
		$sql = "INSERT INTO mailinglist (email) 
		        VALUES (".$this->db->escape($email).")";

		$this->db->query($sql);
	}
	
	function remove_email($email){
		$this->db->where('email', $email);
		$this->db->delete('mailinglist');
	}
	
	function get_emails(){
		$results = $this->db->query('SELECT * FROM mailinglist');
		return $results;
	}
	
}