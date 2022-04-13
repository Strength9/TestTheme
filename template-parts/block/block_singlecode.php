<?php
/*
Block Name: Block Single Code
Block Description: Block Template Description
Post Types: post, page, custom-type
*/ 

$blocknm = 'st';


$block_class  = $blocknm;
$block_class .= ! empty( $block['className'] ) ? ' ' . sanitize_html_class( $block['className'] ) : '';

$block_class .= ! empty( get_field('section_colour') ) ? ' ' . sanitize_html_class( get_field('section_colour') ) : '';
$block_class .= ! empty( get_field('showarrow') ) ? ' ' . sanitize_html_class( get_field('showarrow') ) : '';

$inner_animation = ! empty( get_field('animation') ) ? ' animate ' . sanitize_html_class( get_field('animation') ) : '';


$rightContent = '';
$code = get_field('text_code');
if (!empty($code)) { $rightContent = $code; } 

echo $rightContent;



?>

