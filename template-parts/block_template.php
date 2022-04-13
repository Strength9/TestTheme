<?php
/*
Block Name: Block Template
Block Description: Side By Side Content
Post Types: post, page, custom-type
*/

$blocknm = 'block-hero';
$block_id     = ! empty( $block['anchor'] ) ? sanitize_title( $block['anchor'] ) : $blocknm.'-' . $block['id'];

$block_class  = $blocknm;
$block_class .= ! empty( $block['className'] ) ? ' ' . sanitize_html_class( $block['className'] ) : '';

$block_class .= ! empty( get_field('showarrow') ) ? ' ' . sanitize_html_class( get_field('showarrow') ) : '';
$block_class .= ! empty( get_field('animation') ) ? ' ' . sanitize_html_class( get_field('animation') ) : '';

echo '<section id='.$block_id .' class="'.$block_class.'">'.$blocknm.'<br>'.$block_id .' <br>- '.$block_class.'<br></section>';
?>