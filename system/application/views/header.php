<?php 

// set default values
if(!isset($description)) $description = "Free food for Wash U Students";
if(!isset($title)) $title = "";
if(!isset($style)) $style = "";
if(!isset($message)) $message = "";

// redefine set values
if($style == "important") $style = " style='font-weight:bold; color: #f00;'";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $title; ?>NoMealPoints.com - Free food for Wash U Students</title>
<link href="<?php echo base_url(); ?>/style.css" rel="stylesheet" type="text/css">
<link rel="alternate" type="application/rss+xml"  title="Public Meals RSS Feed"   href="http://feeds.feedburner.com/nomealpoints" />
<link rel="icon" href="http://nomealpoints.com/favicon.ico">

<meta name="description" content="<?php echo $description; ?>" />
<meta name="keywords" content="Free food wustl washington university washu bears st louis clayton missouri" />
<meta name="author" content="Stanford Rosenthal" />
<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1" />

<script src="<?php echo base_url(''); ?>jquery.js" type="text/javascript"></script>
<link href="<?php echo base_url(''); ?>/facebox/facebox.css" media="screen" rel="stylesheet" type="text/css"/>
<script src="<?php echo base_url(''); ?>facebox/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
  $('a[rel*=facebox]').facebox()
})
</script>

</head>
<body>
	<script type="text/javascript">
	if (typeof Meebo == 'undefined') {
	Meebo=function(){(Meebo._=Meebo._||[]).push(arguments)};
	(function(q){
		var args = arguments;
		if (!document.body) { return setTimeout(function(){ args.callee.apply(this, args) }, 100); }
		var d=document, b=d.body, m=b.insertBefore(d.createElement('div'), b.firstChild); s=d.createElement('script');
		m.id='meebo'; m.style.display='none'; m.innerHTML='<iframe id="meebo-iframe"></iframe>';
		s.src='http'+(q.https?'s':'')+'://'+(q.stage?'stage-':'')+'cim.meebo.com/cim/cim.php?network='+q.network;
		b.insertBefore(s, b.firstChild);

	})({network:'nomealpoints_pe84da'});
	}
	
		
	</script>
	<div id="container">
		<div id="header">
			<div id="logo">
				<a href="<?php echo site_url(); ?>" title="Homepage"><?php echo img('images/logo.png'); ?></a>
			</div>
			<?php if($message){ ?><p<?php echo $style; ?>><?php echo $message; ?></p><?php } ?>
		</div>
