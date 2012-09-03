<?php

class Test extends Controller{
	
	function Test(){
		parent::Controller();
		$this->load->helper('form');		
	}
	
	function index(){
		$header['message'] = "Click an event title for more information or to export to Google Calendar, iCal, or Outlook.";
		$data['public'] = $this->meals_model->get_meals("10");
		$data['private'] = $this->meals_model->get_meals("3", TRUE);
		
		// load view
		?>
 <script src="http://static.ak.connect.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php/en_US" type="text/javascript"></script><script type="text/javascript">FB.init("9140152e12033577a4e413a997206fb9");</script>
		<script type="text/javascript">
		function callPublish(msg, attachment, action_link) {
		  FB.ensureInit(function () {
		    FB.Connect.streamPublish('', attachment, action_link);
		  });
		}</script>
		<input type="button" onclick="callPublish('',{'name':'I just donated a meal to Haiti','href':'http://nomealpoints.com','description':'I just found a free meal on NoMealPoints and donated $5 to the Haiti Relief Fund!','media':[{'type':'image','src':'http://nomealpoints.com/images/logo.png','href':'http://nomealpoints.com'}]},[{'text':'Donate a meal to Haiti!','href':'http://nomealpoints.com/haiti'}]);return false;" value="Preview Dialog" />
		<?php
		
	}

}

?>



