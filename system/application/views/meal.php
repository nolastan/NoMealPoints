<p style='font-size:80%; margin-bottom:.5em;'><a href="<?php echo site_url(); ?>" title="Homepage">&laquo;Back</a>	</p>

<div id="meal">	
	<h3><?php echo $meal->title; ?></h3>
	<?php if($meal->meal_msg){ ?><p class="message"><?php echo $meal->meal_msg; ?></p><?php } ?>
	<p><strong>Day:</strong> 				<?php echo $meal->date; ?></p>
	<p><strong>Start time:</strong> 		<?php echo $meal->start; ?></p>
	<p><strong>End time:</strong> 			<?php echo $meal->end; ?></p>
	<p><strong>Location:</strong> 			<?php echo $meal->location; ?></p>
	<p><strong>Intended Audience:</strong> 	<?php if($meal->intended) echo $meal->intended; else echo "<em>unknown</em>"; ?></p>
	<p><strong>More info:</strong></p>
	<blockquote>							<?php echo $meal->info; ?></blockquote>

	<?php
	// TOFIX: Don't alter the object; set new vars in controller.
	dates_to_ical($meal); 
	?>

	<div class="export">
		<p><strong>Export:</strong> <a href="http://www.google.com/calendar/event?action=TEMPLATE&text=<?php echo $meal->title; ?>&dates=<?php echo $meal->start; ?>/<?php echo $meal->end; ?>&details=<?php echo $meal->info; ?>&location=<?php echo $meal->location; ?>&trp=false&sprop<?php echo site_url('meal/'.$meal->id); ?>&sprop=name:No%20Meal%20Points" target="_blank">Google Calendar</a> - <?php echo anchor('meal/'.$meal->id.'.ics', "iCal, Outlook, etc"); ?> </p>
		<p><strong>Share:</strong> <a href="http://www.facebook.com/sharer.php?u=<?php echo site_url('/meal/'.$meal->id); ?>&amp;t=<?php echo $meal->message; ?>">Facebook</a> - <a target="_blank" href="http://twitter.com/home?status=RT @nomealpoints <?php echo $meal->message . " " . $meal->tinyurl; ?>">Twitter</a>
	</div>
</div>

<div id="sidebar">
	<?php $this->load->view('social_view'); ?>
	<div style="clear:both;"></div>
	<?php $this->load->view('public_meals',$data['public'] = $public); ?>
</div>

<script type="text/Javascript">
Meebo('makeSharable', {
		title:"Free Meal: <?php echo $meal->title; ?>",
        element:document.getElementById('meal'), 
        url:"<?php echo site_url('/meal/'.$meal->id); ?>",
        description:"<?php echo $meal->message; ?>",
		tweet:"<?php echo $meal->message; ?>",
        thumbnailWidth:0,
        thumbnailHeight:0});
</script>