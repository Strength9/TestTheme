<?php
/*
Block Name: Block Call to Action
Block Description: Block Template Description
Post Types: post, page, custom-type
*/

$blocknm = 'ctoa';
$block_id     = !empty( $block['anchor'] ) ? sanitize_title( $block['anchor'] ) : $blocknm.'-' . $block['id'];

$block_class  = $blocknm;
$block_class .= ! empty( $block['className'] ) ? ' ' . sanitize_html_class( $block['className'] ) : '';

$block_class .= ! empty( get_field('section_colour') ) ? ' ' . sanitize_html_class( get_field('section_colour') ) : '';
$block_class .= ! empty( get_field('showarrow') ) ? ' ' . sanitize_html_class( get_field('showarrow') ) : '';
$inner_animation = ! empty( get_field('animation') ) ? ' animate ' . sanitize_html_class( get_field('animation') ) : '';


$texttitle = ! empty( get_field('text_title') ) ? '<h2>' . esc_html( get_field('text_title') ).'</h2>' : '';
$textinfo = ! empty( get_field('text_information')) ? '<p>' . esc_html( get_field('text_information') ).'</p>' : '';

if (!empty(get_field('call_to_action_link'))) {
	$linkdata = get_field('call_to_action_link');
	
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
	<div class="ctoamessage '.$inner_animation.'">
		'.$texttitle.$textinfo.$link.'
	</div>
</section>';



?>