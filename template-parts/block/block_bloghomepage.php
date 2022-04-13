<?php
/*
Block Name: Block Home Page Blogs
Block Description: Block Template Description
Post Types: post, page, custom-type
*/


$block_id     = !empty( $block['anchor'] ) ? sanitize_title( $block['anchor'] ) : $blocknm.'-' . $block['id'];

$block_class  = $blocknm;
$block_class .= ! empty( $block['className'] ) ? ' ' . sanitize_html_class( $block['className'] ) : '';

$block_class .= ! empty( get_field('section_colour') ) ? ' ' . sanitize_html_class( get_field('section_colour') ) : '';
$block_class .= ! empty( get_field('showarrow') ) ? ' ' . sanitize_html_class( get_field('showarrow') ) : '';
$inner_animation = ! empty( get_field('animation') ) ? ' class="'. sanitize_html_class( get_field('animation') ).'"' : '';



$args = array(
	'post_type'      => 'page',
	'post_parent'    => 2595,
	'depth' => 6,
	'orderby' => 'menu_order',
	'order'   => 'desc',
	'posts_per_page' =>3,
);
$vB_query = new WP_Query( $args );


?>
<div <?php echo $inner_animation;?>>
	<div class="blogtitleblock">
		<h1>The Heron Financial Blog</h1>
	</div>
<?php	
if ( $vB_query->have_posts() ) :
while ( $vB_query->have_posts() ) : $vB_query->the_post();
	$id = get_the_ID();
	$title = get_the_title();
	$image = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'single-post-thumbnail' );
?>


<div class="news_text_linkbox" style="background-image:url('<?php echo $image[0]; ?>');">
  <div class="news_container">
	  <div class="news_data">
		  <h2><?php echo $title;?></h2>
		  <h3><?php echo the_field('page_sub_title',$id);?></h3>
		  <p><?php echo the_field('page_extract',$id);?></p>
		  <a href="<?php echo esc_url( get_permalink($id) ); ?>" title="<?php echo $title;?>" class="buttonbox">Discover More</a>
	  </div>
  </div>
</div>
<?php

endwhile;
endif; 

?>
</div>
