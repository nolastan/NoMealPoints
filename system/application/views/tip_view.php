<h1>Give us a tip</h1>
<p style="margin:1em 0;">Know of a recurring event with free meals?  Let us know.</p>
<?php 

echo form_open('submit/tip'); 
echo form_label('Your tip', 'info');
echo form_textarea('info');
echo form_submit('', 'Submit tip', 'class="submit"');
echo form_close();

?>
<div style="clear:both;"></div>