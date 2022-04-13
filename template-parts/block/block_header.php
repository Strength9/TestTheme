<?php
/*
Block Name: Block Header SEO Banners
Block Description: Header Banner
Post Types: post, page, custom-type
*/

$bgimage = '';
$blocknm = 'hb';
$block_id = 'id="top"';

$block_class  = $blocknm;
$block_class .= ! empty( $block['className'] ) ? ' ' . sanitize_html_class( $block['className'] ) : '';

$block_class .= ! empty( get_field('section_colour') ) ? ' ' . sanitize_html_class( get_field('section_colour') ) : '';
$block_class .= ! empty( get_field('showarrow') ) ? ' ' . sanitize_html_class( get_field('showarrow') ) : '';

$inner_animation = ! empty( get_field('animation') ) ? sanitize_html_class( get_field('animation') ) : '';
$headb_title = ! empty( get_field('headb_title') ) ? get_field('headb_title'): 'Create a Title';

if ( has_post_thumbnail() ) {
	 $featured_image = get_the_post_thumbnail_url();
};  
?>

<section>
<div class="hb" style="background-image: url('https://heron.s9/wp-content/uploads/2022/02/firsttimebuyers-HeronFinancialltd-1.webp')">
	<h1>First Time Buyers</h1>
</div>
<div class="pageintro blue showarrow">
<div>
	<p>First Time Buyers? You will experience an abundance of different emotions. From excitement to fear and everything in between, Heron Financial are here to guide and support first time buyers throughout the entire mortgage process. Begin your journey today using our Mortgage Calculator and contacting our experts for advice. Open seven days a week, there’s always someone to help.</p>
		
<p>As dedicated mortgage brokers, we focus strongly on building solid relationships with our clients. A first-time house purchase is HUGE and you need to feel confident in those looking after your interests. Allow us to instil certainty as we complete the necessary forms and directly liaise with professional bodies.</p>
		
<p>You’ll be given access to our secure online portal, Everglades. This allows you to update relevant documents and monitor progress. Our mission is to keep you updated every step of the way.</p>
		

<img src="https://heron.s9/wp-content/uploads/2022/02/trustpilot.svg" alt="">
</div>
</section>';

