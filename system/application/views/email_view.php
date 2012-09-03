<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<style type="text/css">
	p{
		margin:0;
		color:red;
	}
	h4{
		margin:0;
	}
</style>

</head>
<body>

<p>Free meals today at Wash U:</p>

<ul>
<?php foreach($public->result() as $row): ?>
	<li style="margin:1em 0;">
		<h4 style="margin:0;"><?php echo anchor('meal/'.$row->id, $row->title); ?> <?php echo $row->friendly_date; ?>
		<?php if($row->location){ ?>
		at <?php echo $row->location; ?>
		<?php } ?>
		</h4>
		<?php if($row->intended){ ?>
		<p style="margin:0;">Intended for <?php echo $row->intended; ?></p>
		<?php } ?>
	</li>	
<?php endforeach; ?>
</ul>

<p>For more free meals, visit <a href="http://nomealpoints.com/tracker.php?utm_source=email&amp;utm_campaign=daily_digest&amp;utm_medium=email">NoMealPoints.com</a>.</p>
<p>To no longer receive digests, <a href="http://nomealpoints.com/digest/remove">click here</a>.

</body>
</html>