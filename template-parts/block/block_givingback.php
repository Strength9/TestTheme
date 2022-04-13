<?php
/*
Block Name: Block Giving Back
Block Description: Side By Side Content
Post Types: post, page, custom-type
*/



$block_class  = $blocknm;
$block_class .= ! empty( $block['className'] ) ? ' ' . sanitize_html_class( $block['className'] ) : '';

$block_class .= ! empty( get_field('section_colour') ) ? ' ' . sanitize_html_class( get_field('section_colour') ) : '';
$block_class .= ! empty( get_field('showarrow') ) ? ' ' . sanitize_html_class( get_field('showarrow') ) : '';
$inner_animation = ! empty( get_field('animation') ) ? ' animate ' . sanitize_html_class( get_field('animation') ) : '';





echo '
<section id="giveb">
<div class="givingback">
  <div class="gbackcontent">
	  <h3>Giving Back</h3>
	<p></p><p>Help us to empower young people’s lives!</p>
<p>Together we can make a difference through our charitable partners <a href="https://createarts.org.uk/" target="_new" rel="nofollow noopener">Create Arts</a>.<br>
Refer us to a friend and we’ll donate £50 to  <a href="https://createarts.org.uk/" target="_new" rel="nofollow noopener">Create Arts</a>.</p><p></p>
	<a href="/about/giving-back/" title="Discover More" class="buttonlink" target="_self">Discover More</a>
  </div>
</div></section>';








