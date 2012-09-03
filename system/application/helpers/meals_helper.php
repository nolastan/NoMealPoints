<?php


function plural($num) {
	if ($num != 1)
		return "s";
}

function meal_to_english($meal){
	$mealtoenglish = clone $meal;
	if($mealtoenglish->title) $mealtoenglish->location = " at ".$mealtoenglish->location;
	if($mealtoenglish->intended) $mealtoenglish->intended = " (for " . $mealtoenglish->intended .")";
	$mealtoenglish->date = friendly_date($mealtoenglish->start, $mealtoenglish->end);
	return $mealtoenglish->title .  $mealtoenglish->location . " " . $mealtoenglish->date . $mealtoenglish->intended;

}

function dates_to_ical($meal){
	// NOTE: CENTRAL TIMEZONE IS HARD CODED
	// addhour is for the endtime, if starttime is not set
	if($meal->end == null){
		$addhour = true;
		$end = strtotime($meal->start)+22200;
	}
	else{
		$addhour = false;
		$end = strtotime($meal->end)+21600;
	} 
		
	$start = strtotime($meal->start)+21600;
	$meal->start = date("Ymd", $start);
	$meal->start .= "T";
	$meal->start .= date("H", $start);
	$meal->start .= date("is", $start);
	//$meal->start .= "Z";
	
	
	$meal->end = date("Ymd", $end);
	$meal->end .= "T";
	$meal->end .= date("His", $end);
	//$meal->end .= "Z";
	
	$updated = strtotime($meal->updated)+21600;
	$meal->updated = date("Ymd", $updated);
	$meal->updated .= "T";
	$meal->updated .= date("H", $updated);
	$meal->updated .= date("is", $updated);
	
}

function time_of_day($date, $m = TRUE){
	// $m is whether or not AM or PM shows
	if($m) $a = " a"; 
	else $a = "";
	$time = strtotime($date);
	if(date('i', $time) == 0)
		return date('g'.$a, $time);
	else
		return date('g:i'.$a, $time);
	
}

function friendly_date($start, $end){
	$diff = time() - strtotime($start);
	$day = date("j", strtotime($start));
	$todayDay = date("j");
	if($end != ""){
		$endtime = time_of_day($end, true);
		$starttime = time_of_day($start, false);	
		$preposition = "from";
		$suffix = " to ".$endtime;
	} 
	else{
		$starttime = time_of_day($start, true);
		$preposition = "at";
		$suffix = "";
	} 
	if($diff < 0) {
		$diff = round($diff/60);
		$diff = round($diff/60);
		if ($diff>-24 && $day == $todayDay)
			return "today ".$preposition." ".$starttime.$suffix;
		$diff = round($diff/24);
		if ($diff>-2 && $day == $todayDay+1)
			return "tomorrow ".$preposition." ". $starttime.$suffix;
		return "on " . date("M j", strtotime($start)) . " at " . $starttime;
	}
	return "going on now";
}