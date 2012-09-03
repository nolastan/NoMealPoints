<h1>Submit a meal</h1>
<p style="text-align:center;">Just fill in whatever you can.</p>
<?php 

echo form_open('submit'); 
echo form_label('Meal Title', 'title');
echo form_input('title');
echo form_label('Meal Location', 'location');
echo form_input('location');
echo form_label('Date', 'date');
echo form_input('date');
echo form_label('Start time', 'start');
echo form_input('start');
echo form_label('End Time', 'end');
echo form_input('end');
echo form_label('Intended Audience', 'intended');
echo form_input('intended');
echo form_label('Additional Info', 'info');
echo form_textarea('info');
echo form_label('This is a private meal', 'private');
echo form_checkbox('private', '1', FALSE);
echo form_submit('', 'Submit Meal', 'class="submit"');
echo form_close();

?>
<div style="clear:both;"></div>