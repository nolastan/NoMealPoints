<?php // NO LONGER IN USE ?>

<div id="stayUpdated" class="interact" meebo:notsharable='true'>
			
		<h3>Stay Updated</h3>
	<ul>
		<li>
			<?php echo anchor('http://www.facebook.com/pages/No-Meal-Points/222492313269', img('images/facebook.png'), 'onClick="javascript: pageTracker._trackPageview(\'/outgoing/Facebook\');"'); ?>
			<p><?php echo anchor('http://www.facebook.com/pages/No-Meal-Points/222492313269', 'Facebook', 'onClick="javascript: pageTracker._trackPageview(\'/outgoing/Facebook\');"'); ?></p>
		</li>
		<li>
			<?php echo anchor('http://twitter.com/nomealpoints', img('images/twitter.png'), 'onClick="javascript: pageTracker._trackPageview(\'/outgoing/Twitter\');"'); ?>
			<p><?php echo anchor('http://twitter.com/nomealpoints', 'Twitter', 'onClick="javascript: pageTracker._trackPageview(\'/outgoing/Twitter\');"'); ?></p>
		</li>
		<li>
			<?php echo anchor('http://feeds.feedburner.com/nomealpoints', img('images/rss.png'), 'onClick="javascript: pageTracker._trackPageview(\'/outgoing/RSS\');"'); ?>
			<p><?php echo anchor('feed', 'RSS', 'onClick="javascript: pageTracker._trackPageview(\'/outgoing/RSS\');"'); ?></p>
		</li>
		<li>
			<?php echo anchor('http://www.google.com/calendar/render?cid=http://nomealpoints.com/calendar', img('images/google.png'), 'onClick="javascript: pageTracker._trackPageview(\'/outgoing/GoogleCal\');"'); ?>
			<p><?php echo anchor('http://www.google.com/calendar/render?cid=http://nomealpoints.com/calendar', "Google Cal", 'onClick="javascript: pageTracker._trackPageview(\'/outgoing/GoogleCal\');"'); ?></p>
		</li>
		<li>
			<?php echo anchor('webcal://nomealpoints.com/calendar', img('images/ical.png'), 'onClick="javascript: pageTracker._trackPageview(\'/outgoing/webcal\');"'); ?>
			<p><?php echo anchor('webcal://nomealpoints.com/calendar', "iCal Format", 'onClick="javascript: pageTracker._trackPageview(\'/outgoing/webcal\');"'); ?></p>
		</li>
	</ul>
</div>