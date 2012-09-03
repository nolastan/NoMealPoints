<div id="addMeal" class="interact" style="padding-bottom:0">
	<h3>Contribute</h3>
	<ul>
		<li><a href="#facebookimport" rel="facebox" onClick="javascript: pageTracker._trackPageview('/lightbox/import-facebook');">Import an event from Facebook &raquo;</a></li>
		<li><a href="#submitmeal" rel="facebox" onClick="javascript: pageTracker._trackPageview('/lightbox/submit-meal');">Submit a meal &raquo;</a></li>
		<li><a href="#submittip" rel="facebox" onClick="javascript: pageTracker._trackPageview('/lightbox/give-tip');">Give us a tip &raquo;</a></li>
		<li><a href="#forwardemail" rel="facebox" onClick="javascript: pageTracker._trackPageview('/lightbox/forward-email');">Forward e-mail to us &raquo;</a></li>
	</ul>
</div>

<!-- Lightboxes -->
<div id="facebookimport" style="display:none;">
	<h1>Import from Facebook</h1>
	<p style="margin:1em 0;">Invited to an event with free food on Facebook?</p>
	<p>Let us know about it!</p>
	<ol>
		<li>Go to the event page and click "Export"</li>
		<li>Select "Send Email"</li>
		<li>When you receive the email, forward it to meals@nomealpoints.com</li>
	</ol>
	<p>We appreciate your help.</p>
	<p style="text-align:center;"><?php echo img('images/facebook-tutorial1.jpg'); ?></p>
</div>

<div id="forwardemail" style="display:none;">
	<h1>Forward email to us</h1>
	<p>If you get an email about a free meal at Wash U, simply forward the email to <strong>meals@nomealpoints.com</strong> and we'll add it to the site.  It's that simple</p>
	<h2>Email Expert?</h2>
	<p>Setup a filter in your email client to forward club emails to us.  We'll cipher through and find the good stuff. </p>
	<h2>Run a club?</h2>
	<p>Just add meals@nomealpoints.com to the mailing list.</p>
</div>

<div id="submitmeal" style="display:none;">
	<?php $this->load->view('submit_view'); ?>
</div>
<div id="submittip" style="display:none;">
	<?php $this->load->view('tip_view'); ?>
</div>
<!-- End Lightboxes -->