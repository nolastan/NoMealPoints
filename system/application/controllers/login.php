<?php

class Login extends Controller{

	function index(){
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
		


	}
	function submit(){
		session_start();
		
		// Get the data passed from the form
		$username = $_POST['user'];
		$password = $_POST['pass'];

		// Do some basic sanitizing
		$username = stripslashes($username);
		$password = stripslashes($password);

		$sql = "select * from users where username = '$username' and password = '$password'";
		$result = mysql_query($sql) or die ( mysql_error() );

		$count = 0;

		while ($line = mysql_fetch_assoc($result)) {
		     $count++;
		}

		if ($count == 1) {
		     $_SESSION['loggedIn'] = "true";
		     header("Location: ../admin"); // This is wherever you want to redirect the user to
		} else {
		     $_SESSION['loggedIn'] = "false";
		     header("Location: ../login"); // Wherever you want the user to go when they fail the login
		}
	}
	
}
