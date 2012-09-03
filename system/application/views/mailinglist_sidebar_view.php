<div id="mailinglist" class="interact" style="padding-bottom:0">
	<h3>Daily Meal Digest</h3>
	<p>Enter your e-mail address below to get an email each morning with all the day's free meals.</p>
	<?php 

	echo form_open('digest/add'); 
	echo form_input('email');
	echo form_submit('', 'Sign up');
	echo form_close();

	?>
</div>