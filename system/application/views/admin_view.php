<?php 
session_start();
if ($_SESSION['loggedIn'] != "true") {
     header("Location: login");
}

$year = date('Y');
$month = date('m');
$day = date('d');

echo form_open('admin/add'); 
echo form_label('Meal Title', 'title');
echo form_input('title');
echo form_label('Meal Location', 'location');
echo form_input('location');
echo form_label('Start Date/Time', 'start');
echo form_input('start', $year.'-'.$month.'-'.$day.' ');
echo form_label('End Date/Time', 'end');
echo form_input('end');
echo form_label('Intended Audience', 'intended');
echo form_input('intended');
echo form_label('Additional Info', 'info');
echo form_textarea('info');
echo form_label('Private Meal', 'private');
echo form_checkbox('private', '1', FALSE);
echo form_label('Repeat Until May 5, 2010', 'repeat');
echo form_checkbox('repeat', '1', FALSE);
echo form_submit('', 'Add Meal');
echo form_close();


?>