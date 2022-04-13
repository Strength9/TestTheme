<?php
/*
Block Name: Block Partner Logos
Block Description: Block Partner Logos
Post Types: post, page, custom-type
*/

$blocknm = 'partnerlogos';
$block_id     = !empty( $block['anchor'] ) ? sanitize_title( $block['anchor'] ) : $blocknm.'-' . $block['id'];

$block_class  = $blocknm;
$block_class .= ! empty( $block['className'] ) ? ' ' . sanitize_html_class( $block['className'] ) : '';
$block_class .= ! empty( get_field('section_colour') ) ? ' ' . sanitize_html_class( get_field('section_colour') ) : '';
$block_class .= ! empty( get_field('showarrow') ) ? ' ' . sanitize_html_class( get_field('showarrow') ) : '';
$inner_animation = ! empty( get_field('animation') ) ? 'class=" animate ' . sanitize_html_class( get_field('animation') ).'"' : '';


switch (get_field('select_image_grid')) {
	case '--':
		$rows = '';
		$blocktitle = 'No Grid Selected';
		break;
	case 'mortgages':
		$blocktitle = !empty( get_field('override_title') ) ? get_field('override_title') : get_field('mortgage_introduction_text', 'options');
		$rows = !empty( get_field('mortgage_images', 'options') ) ? get_field('mortgage_images', 'options') : '';
		break;
	case 'insurance':
		$blocktitle = !empty( get_field('override_title') ) ? get_field('override_title') : get_field('insurer_introduction_text', 'options');
		$rows = !empty( get_field('insurer_images', 'options') ) ? get_field('insurer_images', 'options') : 'Empty';
		break;
	case 'workingwith':
		$blocktitle = !empty( get_field('override_title') ) ? get_field('override_title') : get_field('working_with_introduction_text', 'options');
		$rows = !empty( get_field('workingwith_images', 'options') ) ? get_field('workingwith_images', 'options') : '';
		break;
	default:
		$rows = '';
		$blocktitle = 'No Grid Selected';
};


echo '<section class="'.$block_class.'">
	<div '.$inner_animation.'">
	
	<h2>'.$blocktitle.'</h2>';
	
	if( $rows ) {
		  echo '<ul class="partnergrid">';
		  foreach( $rows as $row ) {
			  $imageAlt = $row['alt_text'];
			  $imageGS = wp_get_attachment_image_src($row['greyscale_image'],'full');
			  $imageCL = wp_get_attachment_image_src($row['colour_image'],'full');
			  echo '<li><img src="'.$imageGS[0].'" onmouseover="this.src=\''.$imageCL[0].'\'" onmouseout="this.src=\''.$imageGS[0].'\'" border="0" alt="'.$imageAlt.'" class="no-lazyload"></li>';
			  }
			  echo '</ul>';
	  } else {
		  echo 'Please Select a Grid';
	  };
echo '</div>
</section>';



?>