<?php
class Feed extends Controller 
{

    function Feed()
    {
        parent::Controller();
        $this->load->helper('xml');
    }
    
    function index()
    {
        $data['encoding'] = 'utf-8';
        $data['feed_name'] = 'No Meal Points';
        $data['feed_url'] = 'http://nomealpoints.com';
        $data['page_description'] = 'Free food for Wash U students';
        $data['page_language'] = 'en-ca';
        $data['creator_email'] = 'meals@nomealpoints.com';
        $data['meals'] = $this->meals_model->get_meals();    
        header("Content-Type: application/rss+xml");
        $this->load->view('rss', $data);
    }
}
?>