<?php
/*
Block Name: Block Image Title Text
Block Description: Block Template Description
Post Types: post, page, custom-type
*/ 

$blocknm = 'itt';
$block_id     = !empty( $block['anchor'] ) ? sanitize_title( $block['anchor'] ) : $blocknm.'-' . $block['id'];

$block_class  = $blocknm;
$block_class .= ! empty( $block['className'] ) ? ' ' . sanitize_html_class( $block['className'] ) : '';

$block_class .= ! empty( get_field('section_colour') ) ? ' ' . sanitize_html_class( get_field('section_colour') ) : '';
$block_class .= ! empty( get_field('showarrow') ) ? ' ' . sanitize_html_class( get_field('showarrow') ) : '';

$inner_animation = ! empty( get_field('animation') ) ? ' animate ' . sanitize_html_class( get_field('animation') ) : '';

$inner_imagebg = ! empty( get_field('imagebackcontainer') ) ? ' class="' . sanitize_html_class( get_field('imagebackcontainer') ).'"' : '';
$image = ! empty( get_field('itt_image') ) ? '<div '.$inner_imagebg.'><img src="'.get_field('itt_image')['url'].'" alt="'.get_field('itt_image')['alt'].'" /></div>' : '';
$texttitle = ! empty( get_field('itt_title') ) ? '<h1>' . esc_html( get_field('itt_title') ).'</h1>' : '';
$textinfo = ! empty( get_field('itt_text')) ? '' . get_field('itt_text').'' : '';



echo '<section class="'.$block_class.'">
	<div class="ittb '.$inner_animation.'">
		'.$image.$texttitle.$textinfo.'
	</div>
</section>';



?>

