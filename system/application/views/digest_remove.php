<p style="text-align:center; margin-bottom:1em;">Enter your e-mail address below to unsubscribe.</p>
<?php 

echo form_open('digest/remove');
echo form_submit('', 'Unsubscribe'); 
echo form_input('email');
echo form_close();
?>