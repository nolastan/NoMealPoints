<?php
class Cron extends Controller 
{

    function Cron()
    {
        parent::Controller();
        $this->load->helper('xml');
        $this->load->model('digest_model');
    }
    
    function index()
    {
		//If there are any meals today
		if($this->meals_model->has_meals_today()){
	
			$config = array (
			                  'mailtype' => 'html',
			                  'charset'  => 'utf-8',
			                  'priority' => '1'
			               );
			$this->load->library('email', $config);
			$data['public'] = $this->meals_model->get_meals_today();
			$emails = $this->digest_model->get_emails();
			foreach($emails->result() as $email){
				$this->email->to($email->email); 
				$this->email->from('meals@nomealpoints.com', 'NoMealPoints.com');
				$this->email->subject('Daily Meal Digest');
				$this->email->message($this->load->view('email_view', $data, TRUE));
				$this->email->send();
				echo $this->email->print_debugger();
			}		
			echo "Done.";
		}
		else{
			echo "No meals today";
		}
    }
}
?>