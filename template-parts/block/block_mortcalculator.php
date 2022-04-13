<?php
/*
Block Name: Block Mortgage Calculator
Block Description: Block Template Description
Post Types: post, page, custom-type
*/ 


$block_class  = $blocknm;
$block_class .= ! empty( $block['className'] ) ? ' ' . sanitize_html_class( $block['className'] ) : '';

$block_class .= ! empty( get_field('section_colour') ) ? ' ' . sanitize_html_class( get_field('section_colour') ) : '';
$block_class .= ! empty( get_field('showarrow') ) ? ' ' . sanitize_html_class( get_field('showarrow') ) : '';

$inner_animation = ! empty( get_field('animation') ) ? ' animate ' . sanitize_html_class( get_field('animation') ) : '';


$text_titlemc = ! empty( get_field('text_titlemc')) ? '<h2>' . get_field('text_titlemc').'</h2>' : 'No Text';



echo '<section class="'.$block_class.'">
	<div class="mortgagecalc '.$inner_animation.'">
		<div class="headingtitleblock">
		<h1>'.$text_titlemc.'</h1>
		</div>
		
		<iframe width="100%" height="1250" src="https://webtools.twenty7tec.com/Sourcing/BestBuysSearch/N9xSMVbG" frameborder="0" class="no-lazyload"></iframe>
		
	</div>
</section>';



?>

