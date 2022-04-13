<?php
/*
Block Name: Block Timeline
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
$textheading = ! empty( get_field('section_title') ) ? get_field('section_title') : '';

echo '<section class="'.$block_class.'">
<div class="'.$inner_animation.'">
<div class="headingtitleblock">
<h1>'.$textheading.'</h1>
</div>';



$rows = get_field('time_line_elements');
$i = 0;
if( $rows ) {
	echo '<ul class="blox-alternating-classic-pointer-timeline '.$inner_animation.'">';
	foreach( $rows as $row ) {
		$i++;
		$image = $row['image'];
		echo '<li>
		<div class="blox-wrapper">
			<span class="blox-dote"></span>
		  <h3 class="blox-heading"><span class="listno">'.$i.'</span>'.$row['sub_title'].'</h3>	
			<div class="blox-content"><p><strong>'.$row['bold_text'].'</strong><br>
	<span></span><br>'.$row['normal_text'].'</p>
	</div>
		</div>
	</li>';
	}
	echo '</ul>';
}

echo '</div></section>';
?>