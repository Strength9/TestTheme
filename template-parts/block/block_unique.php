<?php
/*
Block Name: Block Unique
Block Description: Side By Side Content
Post Types: post, page, custom-type
*/

$blocknm = 'block-hero';
$block_id     = ! empty( $block['anchor'] ) ? sanitize_title( $block['anchor'] ) : $blocknm.'-' . $block['id'];

$block_class  = $blocknm;
$block_class .= ! empty( $block['className'] ) ? ' ' . sanitize_html_class( $block['className'] ) : '';

$block_class .= ! empty( get_field('section_colour') ) ? ' ' . sanitize_html_class( get_field('section_colour') ) : '';
$block_class .= ! empty( get_field('showarrow') ) ? ' ' . sanitize_html_class( get_field('showarrow') ) : '';
$inner_animation = ! empty( get_field('animation') ) ? ' animate ' . sanitize_html_class( get_field('animation') ) : '';


$rows = ! empty( get_field('list_data') ) ? get_field('list_data') : '';
/*
list_data'
'text_line';

*/


echo '<section>


	<div class="uniquepoints">
		<div class="strap">
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="88" height="32" viewBox="0 0 88 32">
			<path fill="#ee8b11" d="M0 32h88.175v-32h-88.175v32zM85.439 2.799v26.402h-82.64v-26.402h82.64z"/>
			<path fill="#ee8b11" d="M11.451 17.177h5.089v6.171h2.926v-14.759h-2.926v5.789h-5.089v-5.789h-2.99v14.759h2.99z"/>
			<path fill="#ee8b11" d="M33.909 20.549h-6.68v-3.372h5.408v-2.799h-5.408v-2.99h6.68v-2.799h-9.67v14.759h9.67z"/>
			<path fill="#ee8b11" d="M41.288 17.877h2.354l2.354 5.471h3.181l-2.481-5.598c1.209-0.318 2.036-1.4 2.036-2.799v-3.499c0-1.718-1.209-2.926-2.926-2.926h-7.443v14.759h2.926v-5.408zM41.288 11.388h3.817c0.445 0 0.7 0.254 0.7 0.7v2.354c0 0.445-0.254 0.7-0.7 0.7h-3.817v-3.753z"/>
			<path fill="#ee8b11" d="M56.111 23.412h4.962c1.718 0 2.926-1.209 2.926-2.926v-9.097c0-1.718-1.209-2.926-2.926-2.926h-4.962c-1.718 0-2.926 1.209-2.926 2.926v9.097c0 1.781 1.209 2.926 2.926 2.926zM56.175 11.96c0-0.445 0.254-0.7 0.7-0.7h3.499c0.445 0 0.7 0.254 0.7 0.7v7.952c0 0.445-0.254 0.7-0.7 0.7h-3.499c-0.445 0-0.7-0.254-0.7-0.7v-7.952z"/>
			<path fill="#ee8b11" d="M71.125 13.296l5.471 10.052h3.181v-14.759h-2.799v10.052l-5.408-10.052h-3.181v14.759h2.736z"/>
			</svg>
			<h2>What makes us<span>&nbsp;unique?</span></h2>
		</div>
		<div class="points">';
		
		$i = 0;
		if( $rows ) {
			echo '<ul class="">';
			foreach( $rows as $row ) {
				$i++;
				
				echo '<li>'.$row['text_line'].'</li>';
		
			}
			echo '</ul>';
		};
		
echo '</div>
	</div>
</section>';








