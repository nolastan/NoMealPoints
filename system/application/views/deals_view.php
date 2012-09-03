<div id="deals" class="interact" style="width:250px;">
	
	
	<?php /* 
	<h3>Good Deals</h3>
	<ul>
		
		<li style="margin-top:1em">
				<h4><a href="http://www.alice.com/referral/4B058B28" onClick="javascript: pageTracker._trackPageview('/outgoing/alice');" target="_blank">$10 off $50 at Alice.com</a></h4>
				</a>
				<p style="font-size:80%; line-height:120%;">Toiletries, snacks, and school supplies<br />Much cheaper than Bear Mart, free shipping.</p>
			</li>
		
			
			<?php

			define('MAGPIE_DIR', 'magpierss/');
			require_once(MAGPIE_DIR.'rss_fetch.inc');

			$url = "http://feeds.feedburner.com/grouponstlouis";

			if ( $url ) {
				$rss = fetch_rss( $url );
				foreach ($rss->items as $item) {
					$href = $item['link'];
					$title = $item['title'];	
					
				?>
				<li style="margin-top:1em; width:15em;">
				<h4><a href="http://www.groupon.com/r/uu1194068" onClick="javascript: pageTracker._trackPageview('/outgoing/groupon');" target="_blank">Daily Deal</a></h4>
				<p style="font-size:80%; line-height:120%;"><?php echo $title; ?></p>	
				</li>
				<?php
				}
			}
			?>
			
			

			
		<li style="margin-top:1em">
				<h4><a href="Javascript:beardiscountsform.submit();" onClick="javascript: pageTracker._trackPageview('/outgoing/beardiscounts');">Bear Discounts Card</a></h4>
				</a>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="beardiscountsform">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="8640189">
				<input type="hidden" name="on0" value="Who Referred U? ($10/referral)">
				<input type="hidden" name="os0" maxlength="60" value="info@nomealpoints.com">
				<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
				<p style="font-size:80%; line-height:120%;">Great deals at over 170 businesses<br />Get your card now for only $25!</p>
			</li>
				
				

	

	
	<ul>			
		<li style="margin-top:1.5em">
				<h4><a href="#yourdealhere" rel="facebox" onClick="javascript: pageTracker._trackPageview('/lightbox/yourdealhere');">Your deal here</a></h4>
				
				<p style="font-size:80%; line-height:120%;">Promote your event or fundraiser<br />to hungry Wash U students.</p>
			</li>
	</ul>
	
	
		
		<a href="http://www.alice.com/referral/4B058B28" onClick="javascript: pageTracker._trackPageview('/outgoing/alice');" target="_blank"><img style="border:1px solid #00f;	" src="images/alice.png"  /></a>

		<p style="margin-top:2em; font-size:70%; text-align:center;"><a href="#yourdealhere" rel="facebox" onClick="javascript: pageTracker._trackPageview('/lightbox/yourdealhere');">Your deal here</a></p>
	

	*/ ?>
<script type="text/javascript"><!--
google_ad_client = "pub-9039399315111453";
/* NMP 1 */
google_ad_slot = "2282609154";
google_ad_width = 250;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>

<!-- Lightboxes -->


<div id="yourdealhere" style="display:none;">
	<h1>Sponsored Posting</h1>
	<p style="margin:1em 0;">Have a restaurant, event, or fundraiser to promote?</p><p style="margin:1em 0;">Let's get in touch.</p>
	<?php 

	echo form_open('submit'); 
	echo form_label('Name', 'name');
	echo form_input('name');
	echo form_label('Email', 'email');
	echo form_input('email');
	echo form_label('Comments', 'comments');
	echo form_textarea('comments');
	echo form_submit('', 'Submit', 'class="submit"');
	echo form_close();

	?>
	<div style="clear:both"></div>
	
</div>
<!-- End Lightboxes -->