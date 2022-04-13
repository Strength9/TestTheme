<?php
/*
Block Name: Block Contact Trio
Block Description: Videos and text
Post Types: post, page, custom-type
*/

if (!empty(get_field('contact_email_address','options'))) { 
	$addemail = '<a href="mailto:'.get_field('contact_email_address','options').'" title="Email The Team" >'.get_field('contact_email_address','options').'</a>';
} ;

if (!empty(get_field('contact_phone_number','options'))) { 
	$valye = str_replace("(0)", "", str_replace(" ", "", get_field('contact_phone_number','options'))); 
	$phone= '<a href="tel:'.$valye.'" title="Call The Team" >'.get_field('contact_phone_number','options').'</a>';
} ;



?>

<section id="ctrio">
<div class="contacttrio">
	<div class="cbutt orange">
		<h2>Request a Callback</h2>
		<p>We will aim to get back to your enquiry within 48 hours.</p>
		<a href="https://app.heronfinancial.co.uk/heron/referral-form/appointment-1" target="_new">Make Enquiry</a>
	</div>
	<div class="cdet" >
		<h2>Meet Us</h2>
		<ul>
			<li>t: <?php echo $phone;?></li>
			<li>e: <?php echo $addemail;?></li>
			<li><?php echo get_field('address','options');?></li>
		</ul>
	</div>
	<div class="mapblock">
		<iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Heron%20Financial&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
	</div>
</div>
</section>



