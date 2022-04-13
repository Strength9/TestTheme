<?php
/*
Block Name: Block Single Text
Block Description: Block Template Description
Post Types: post, page, custom-type
*/ 

$blocknm = 'st';


$block_class  = $blocknm;
$block_class .= ! empty( $block['className'] ) ? ' ' . sanitize_html_class( $block['className'] ) : '';

$block_class .= ! empty( get_field('section_colour') ) ? ' ' . sanitize_html_class( get_field('section_colour') ) : '';
$block_class .= ! empty( get_field('showarrow') ) ? ' ' . sanitize_html_class( get_field('showarrow') ) : '';

$inner_animation = ! empty( get_field('animation') ) ? ' animate ' . sanitize_html_class( get_field('animation') ) : '';


$textinfo = ! empty( get_field('ist_text')) ? '' . get_field('ist_text').'' : '';



echo '<section class="'.$block_class.'">
	<div class="singletext '.$inner_animation.'">
		'.$textinfo.'
	</div>
</section>';



?>

