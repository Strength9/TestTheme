<?php
/*
Block Name: Block Page Grid
Block Description: Block Template Description
Post Types: post, page, custom-type
*/



$block_class  = 'shortcutlinks';
$block_class .= ! empty( $block['className'] ) ? ' ' . sanitize_html_class( $block['className'] ) : '';

$block_class .= ! empty( get_field('section_colour') ) ? ' ' . sanitize_html_class( get_field('section_colour') ) : '';
$block_class .= ! empty( get_field('showarrow') ) ? ' ' . sanitize_html_class( get_field('showarrow') ) : '';
$inner_animation = ! empty( get_field('animation') ) ? ' animate ' . sanitize_html_class( get_field('animation') ) : '';

$toppost = ! empty( get_field('post_id') ) ? sanitize_html_class( get_field('post_id') ) : '';

$args = array(
	'post_type'      => 'page',
	'post_parent'    => $toppost,
	'depth' => 6,
	'orderby' => 'menu_order',
	'order'   => 'aSC',
	'posts_per_page' =>-1,
);
$vB_query = new WP_Query( $args );
?>
<section>
<div class="pagegrid ">

<?php	
if ( $vB_query->have_posts() ) :
while ( $vB_query->have_posts() ) : $vB_query->the_post();
	   
	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
?>

<a href="<?php echo esc_url( get_permalink() ); ?>" class="uc_article_grid_style_seven_box">
	  <div class="uc_image_box" style="background-image: url('<?php echo $image[0]; ?>'); height: 400px;">
		<div class="uc_box_content">
		  <div class="uc_title"><?php echo the_title();?></div>
		  
		</div>
		<div class="uc_overlay" style="background-color: #000;"></div>
	  </div>
</a>


<?php

endwhile;
endif; 

?>
</div>
</section>



</div>