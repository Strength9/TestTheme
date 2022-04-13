<?php
/*
Block Name: Block Double Sided
Block Description: Block Template Description
Post Types: post, page, custom-type
*/

$blocknm = 'sidebyside';
$block_id     = !empty( $block['anchor'] ) ? sanitize_title( $block['anchor'] ) : $blocknm.'-' . $block['id'];

$block_class  = $blocknm;
$block_class .= ! empty( $block['className'] ) ? ' ' . sanitize_html_class( $block['className'] ) : '';

$block_class .= ! empty( get_field('section_colour') ) ? ' ' . sanitize_html_class( get_field('section_colour') ) : '';
$block_class .= ! empty( get_field('showarrow') ) ? ' ' . sanitize_html_class( get_field('showarrow') ) : '';
$inner_animation = ! empty( get_field('animation') ) ? ' animate ' . sanitize_html_class( get_field('animation') ) : '';

$rightimage = get_field('image_field_right');
$leftimage = get_field('image_field_left');

switch (get_field('display_type')) {
	case 'imageleft':
		if (!empty($leftimage)) { $leftContent = '<img src="'.$leftimage['url'].'" alt="'.$leftimage['alt'].'" />'; } else { $leftContent = 'No Image'; };
		$rightContent = !empty( get_field('text_field_right') ) ? '' . get_field('text_field_right') : 'Need Content';
		break;
	case 'imageright':
		$leftContent =  !empty( get_field('text_field_left') ) ? '' . get_field('text_field_left') : 'Need Content';
		if (!empty($rightimage)) { $rightContent = '<img src="'.$rightimage['url'].'" alt="'.$rightimage['alt'].'" />'; } else { $rightContent = 'No Image'; };
		break;
	case 'dbletext':
		$leftContent =  !empty( get_field('text_field_left') ) ? '' . get_field('text_field_left') : 'Need Content';
		$rightContent = !empty( get_field('text_field_right') ) ? '' . get_field('text_field_right') : 'Need Content';
		break;
	
	case 'dbleimage':
		if (!empty($leftimage)) { $leftContent = '<img src="'.$leftimage['url'].'" alt="'.$leftimage['alt'].'" />'; } else { $leftContent = 'No Image'; };
		if (!empty($rightimage)) { $rightContent = '<img src="'.$rightimage['url'].'" alt="'.$rightimage['alt'].'" />'; } else { $rightContent = 'No Image'; };
		break;
	default:
	  $leftContent =  'A';
	  if (!empty($rightimage)) { $rightContent = '<img src="'.$rightimage['url'].'" alt="'.$rightimage['alt'].'" />'; } else { $rightContent = 'No Image'; };
};




echo '<section class="'.$block_class.'">

<div class="dualsides '.$inner_animation.'">
	<div class="side1">'.$leftContent.'</div>
	<div class="side2">'.$rightContent.'
	</div>
</div>

</section>';

?>