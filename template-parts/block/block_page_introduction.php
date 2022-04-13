<?php
/*
Block Name: Block Page Introduction
Block Description: Block Template Description
Post Types: post, page, custom-type

*/

$blocknm = 'pageintro';

 
$block_class  = $blocknm;
$block_class .= ! empty( $block['className'] ) ? ' ' . sanitize_html_class( $block['className'] ) : '';

$block_class .= ! empty( get_field('section_colour') ) ? ' ' . sanitize_html_class( get_field('section_colour') ) : '';
$block_class .= ! empty( get_field('showarrow') ) ? ' ' . sanitize_html_class( get_field('showarrow') ) : '';



$inner_animation = ! empty( get_field('animation') ) ? 'class=" animate ' . sanitize_html_class( get_field('animation') ).'"' : '';



$texttitle = ! empty( get_field('text_title') ) ? '<h1>' . esc_html( get_field('text_title') ).'</h1>' : '';
$textinfo = ! empty( get_field('text_information')) ? '' . get_field('text_information').'' : '';



$image = ! empty( get_field('intro_image') ) ? '<img src="'.get_field('intro_image')['url'].'" alt="'.get_field('intro_image')['alt'].'" />' : '';



if (!empty(get_field('intro_link_button'))) {
	$linkdata = get_field('intro_link_button');
	$link = '<a href="'.$linkdata['url'].'" title="'.$linkdata['title'].'" target="'.$linkdata['target'].'" class="headlink">'.$linkdata['title'].'</a>';
	
} else {
	$link = '';
};


echo '<section class="'.$block_class.'">
	<div '.$inner_animation.'">
		'.$texttitle.$textinfo.$link.$image.'
	</div>
</section>';



?>

