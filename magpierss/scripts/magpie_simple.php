<?php

define('MAGPIE_DIR', '../');
require_once(MAGPIE_DIR.'rss_fetch.inc');

$url = "http://feeds.feedburner.com/grouponstlouis";

if ( $url ) {
	$rss = fetch_rss( $url );
	echo "Channel: " . $rss->channel['title'] . "<p>";
	foreach ($rss->items as $item) {
		$href = $item['link'];
		$title = $item['title'];	
		echo "<a href=$href>$title</a>";
	}
}
?>