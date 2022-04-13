<?php
/*
Block Name: Block Header Banners
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

echo '<section class="'.$block_class.'" style="background-image: url(\''.$featured_image.'\')">
	<h1>'.$headb_title.'</h1>
</section>';

?>