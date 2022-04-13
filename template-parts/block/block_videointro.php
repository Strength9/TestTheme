<?php
/*
Block Name: Block Video Intro
Block Description: Videos and text
Post Types: post, page, custom-type
*/

$blocknm = 'videointro';
$block_id     = !empty( $block['anchor'] ) ? sanitize_title( $block['anchor'] ) : $blocknm.'-' . $block['id'];

$block_class  = $blocknm;
$block_class .= ! empty( $block['className'] ) ? ' ' . sanitize_html_class( $block['className'] ) : '';

$block_class .= ! empty( get_field('section_colour') ) ? ' ' . sanitize_html_class( get_field('section_colour') ) : '';
$block_class .= ! empty( get_field('showarrow') ) ? ' ' . sanitize_html_class( ('showarrow') ) : '';
$inner_animation = ! empty( get_field('animation') ) ? ' animate ' . sanitize_html_class( get_field('animation') ) : '';


$leftvideo = get_field('video_embed');

$block_class .= ! empty( get_field('showarrow') ) ? ' ' . sanitize_html_class( get_field('showarrow') ) : '';

$texttitle .= ! empty( get_field('text_title') ) ? get_field('text_title')  : '';

$textdata .= ! empty( get_field('text_data') ) ? get_field('text_data')  : '';


	
if (!empty(get_field('button_link'))) {
	$linkdata = get_field('button_link');
	
	if ( $linkdata['target'] == '_blank' ) {
		$target = ' target="'.$linkdata['target'].'" rel="noopener noreferrer"';
	} else {
		$target = ' target="'.$linkdata['target'].'"';
	}
	
	
	
	$link = '<a href="'.$linkdata['url'].'" title="'.$linkdata['title'].'"'.$target.'">'.$linkdata['title'].'</a>';
	
} else {
	$link = '';
};


echo '<section class="'.$block_class.'">

<div class="videoctoa '.$inner_animation.'">
	<div class="videoctoaside1">'.$leftvideo.'</div>
	<div class="videocalltoaction"><h3>'.$texttitle.'</h3><p>'.$textdata.'</p>'.$link.'
	</div>
</div>

</section>';

?>