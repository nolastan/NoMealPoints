<?php
class Bitly {
	
	private $user;
	private $api;
	
	function Bitly()
	{
	}
	
	function set($user,$api)
	{
		if(!$user || !$api)
		{
			return FALSE;
		}
		$this->user=$user;
		$this->api=$api;
	}
	
	function shorten($url)
	{
		$response=json_decode(file_get_contents('http://api.bit.ly/shorten?version=2.0.1&longUrl='.$url.'&login='.$this->user.'&apiKey='.$this->api),TRUE);
		return array('url' => $response['results'][$url]['shortUrl'], 'hash' => $response['results'][$url]['hash']);
	}
	
	function expand($url,$hash)
	{
		$response=json_decode(file_get_contents('http://api.bit.ly/expand?version=2.0.1&hash='.$hash.'&longUrl='.$url.'&login='.$this->user.'&apiKey='.$this->api),TRUE);
		return $response['results'][$hash]['longUrl'];
	}
	
	function info($url) //in progress
	{
		$response=json_decode(file_get_contents('http://api.bit.ly/info?version=2.0.1&shortUrl='.$url.'&login='.$this->user.'&apiKey='.$this->api),TRUE);
		return $response['results'];
	}
	
	function stats($url)
	{
		$response=json_decode(file_get_contents('http://api.bit.ly/stats?version=2.0.1&shortUrl='.$url.'&login='.$this->user.'&apiKey='.$this->api),TRUE);
		return $response['results'];
	}
	
}
?>