<?php
/*
Block Name: Block Double Video
Block Description: Videos and text
Post Types: post, page, custom-type
*/

$blocknm = 'videosidebyside';
$block_id     = !empty( $block['anchor'] ) ? sanitize_title( $block['anchor'] ) : $blocknm.'-' . $block['id'];

$block_class  = $blocknm;
$block_class .= ! empty( $block['className'] ) ? ' ' . sanitize_html_class( $block['className'] ) : '';

$block_class .= ! empty( get_field('section_colour') ) ? ' ' . sanitize_html_class( get_field('section_colour') ) : '';
$block_class .= ! empty( get_field('showarrow') ) ? ' ' . sanitize_html_class( get_field('showarrow') ) : '';
$inner_animation = ! empty( get_field('animation') ) ? ' animate ' . sanitize_html_class( get_field('animation') ) : '';

$rightvideo = get_field('embed_code_vr');
$leftvideo = get_field('embed_code_vl');

switch (get_field('display_type')) {
	case 'videoleft':
		if (!empty($leftvideo)) { $leftContent = $leftvideo; } else { $leftContent = 'No Video'; };
		$rightContent = !empty( get_field('text_field_right') ) ? '' . get_field('text_field_right') : 'Need Content';
		break;
	case 'videoright':
		$leftContent =  !empty( get_field('text_field_left') ) ? '' . get_field('text_field_left') : 'Need Content';
		
		if (!empty($rightvideo)) { $rightContent = $rightvideo; } else { $rightContent = 'No Video'; };
		break;
	case 'dbletext':
		$leftContent =  !empty( get_field('text_field_left') ) ? '' . get_field('text_field_left') : 'Need Content';
		$rightContent = !empty( get_field('text_field_right') ) ? '' . get_field('text_field_right') : 'Need Content';
		break;
	
	case 'dblevideo':
		if (!empty($leftvideo)) { $leftContent = $leftvideo; } else { $leftContent = 'No Video'; };
		if (!empty($rightvideo)) { $rightContent = $rightvideo; } else { $rightContent = $rightvideo; };
		break;
	default:
	  $leftContent =  'No text';
	  if (!empty($rightvideo)) { $rightContent = $rightvideo; } else { $rightContent = 'No Video'; };
};




echo '<section id='.$block_id .' class="'.$block_class.'">

<div class="videodualsides '.$inner_animation.'">
	<div class="videoside1">'.$leftContent.'</div>
	<div class="videoside2">'.$rightContent.'
	</div>
</div>

</section>';

?>