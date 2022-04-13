<?php
/*
Block Name: Block Staff List
Block Description: Block Template Description
Post Types: post, page, custom-type
*/

$blocknm = 'stafflist';
$block_id     = !empty( $block['anchor'] ) ? sanitize_title( $block['anchor'] ) : $blocknm.'-' . $block['id'];

$block_class  = $blocknm;
$block_class .= ! empty( $block['className'] ) ? ' ' . sanitize_html_class( $block['className'] ) : '';

$block_class .= ! empty( get_field('section_colour') ) ? ' ' . sanitize_html_class( get_field('section_colour') ) : '';
$block_class .= ! empty( get_field('showarrow') ) ? ' ' . sanitize_html_class( get_field('showarrow') ) : '';
$inner_animation = ! empty( get_field('animation') ) ? ' animate ' . sanitize_html_class( get_field('animation') ) : '';

$founder = $management = $mortgage_team = $protection = $general = $progression = $compliance = $application = $new_build= '';

$args = array('post_type' => 'team_member', 'post_status' => 'publish', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC', 'tag' => 'Founder',);
$loop = new WP_Query( $args ); 
while ( $loop->have_posts() ) : $loop->the_post(); 
	$post_id = get_the_ID();
	$thumb_url_array = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail-size', true);
	$jobtitle = ! empty( get_field('job_title', $post_id) ) ?  get_field('job_title', $post_id ) : '';
	$founder .= '<div><div class="staffimage" style="background-image:url(\''.$thumb_url_array[0].'\');"></div><h4>'.get_the_title().'</h4> <span>'.$jobtitle.'</span></div>';
endwhile;
 wp_reset_postdata(); 

$args = array('post_type' => 'team_member', 'post_status' => 'publish', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC', 'tag' => 'management',);
$loop = new WP_Query( $args ); 
while ( $loop->have_posts() ) : $loop->the_post(); 
	 $post_id = get_the_ID();
	 $thumb_url_array = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail-size', true);
	 $jobtitle = ! empty( get_field('job_title', $post_id) ) ?  get_field('job_title', $post_id ) : '';
	 $management .= '<div><div class="staffimage" style="background-image:url(\''.$thumb_url_array[0].'\');"></div><h4>'.get_the_title().'</h4> <span>'.$jobtitle.'</span></div>';
endwhile;
wp_reset_postdata(); 				
	
	$args = array('post_type' => 'team_member', 'post_status' => 'publish', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC', 'tag' => 'mortgage_team',);
	$loop = new WP_Query( $args ); 
	while ( $loop->have_posts() ) : $loop->the_post(); 
		 $post_id = get_the_ID();
		 $thumb_url_array = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail-size', true);
		 $jobtitle = ! empty( get_field('job_title', $post_id) ) ?  get_field('job_title', $post_id ) : '';
		 $mortgage_team .= '<div><div class="staffimage" style="background-image:url(\''.$thumb_url_array[0].'\');"></div><h4>'.get_the_title().'</h4> <span>'.$jobtitle.'</span></div>';
	endwhile;
	wp_reset_postdata(); 
	
	$args = array('post_type' => 'team_member', 'post_status' => 'publish', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC', 'tag' => 'protection',);
	$loop = new WP_Query( $args ); 
	while ( $loop->have_posts() ) : $loop->the_post(); 
		 $post_id = get_the_ID();
		 $thumb_url_array = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail-size', true);
		 $jobtitle = ! empty( get_field('job_title', $post_id) ) ?  get_field('job_title', $post_id ) : '';
		 $protection .= '<div><div class="staffimage" style="background-image:url(\''.$thumb_url_array[0].'\');"></div><h4>'.get_the_title().'</h4> <span>'.$jobtitle.'</span></div>';
	endwhile;
	wp_reset_postdata(); 
	
	$args = array('post_type' => 'team_member', 'post_status' => 'publish', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC', 'tag' => 'management',);
	$loop = new WP_Query( $args ); 
	while ( $loop->have_posts() ) : $loop->the_post(); 
		 $post_id = get_the_ID();
		 $thumb_url_array = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail-size', true);
		 $jobtitle = ! empty( get_field('job_title', $post_id) ) ?  get_field('job_title', $post_id ) : '';
		 $general .= '<div><div class="staffimage" style="background-image:url(\''.$thumb_url_array[0].'\');"></div><h4>'.get_the_title().'</h4> <span>'.$jobtitle.'</span></div>';
	endwhile;
	wp_reset_postdata(); 

	$args = array('post_type' => 'team_member', 'post_status' => 'publish', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC', 'tag' => 'progression',);
	$loop = new WP_Query( $args ); 
	while ( $loop->have_posts() ) : $loop->the_post(); 
		 $post_id = get_the_ID();
		 $thumb_url_array = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail-size', true);
		 $jobtitle = ! empty( get_field('job_title', $post_id) ) ?  get_field('job_title', $post_id ) : '';
		 $progression .= '<div><div class="staffimage" style="background-image:url(\''.$thumb_url_array[0].'\');"></div><h4>'.get_the_title().'</h4> <span>'.$jobtitle.'</span></div>';
	endwhile;
	wp_reset_postdata(); 
	
	$args = array('post_type' => 'team_member', 'post_status' => 'publish', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC', 'tag' => 'progression',);
	$loop = new WP_Query( $args ); 
	while ( $loop->have_posts() ) : $loop->the_post(); 
		 $post_id = get_the_ID();
		 $thumb_url_array = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail-size', true);
		 $jobtitle = ! empty( get_field('job_title', $post_id) ) ?  get_field('job_title', $post_id ) : '';
		 $application .= '<div><div class="staffimage" style="background-image:url(\''.$thumb_url_array[0].'\');"></div><h4>'.get_the_title().'</h4> <span>'.$jobtitle.'</span></div>';
	endwhile;
	wp_reset_postdata(); 

	$args = array('post_type' => 'team_member', 'post_status' => 'publish', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC', 'tag' => 'progression',);
	$loop = new WP_Query( $args ); 
	while ( $loop->have_posts() ) : $loop->the_post(); 
		 $post_id = get_the_ID();
		 $thumb_url_array = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail-size', true);
		 $jobtitle = ! empty( get_field('job_title', $post_id) ) ?  get_field('job_title', $post_id ) : '';
		 $compliance .= '<div><div class="staffimage" style="background-image:url(\''.$thumb_url_array[0].'\');"></div><h4>'.get_the_title().'</h4> <span>'.$jobtitle.'</span></div>';
	endwhile;
	wp_reset_postdata(); 
	
	$args = array('post_type' => 'team_member', 'post_status' => 'publish', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC', 'tag' => 'new_build',);
	$loop = new WP_Query( $args ); 
	while ( $loop->have_posts() ) : $loop->the_post(); 
		 $post_id = get_the_ID();
		 $thumb_url_array = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail-size', true);
		 $jobtitle = ! empty( get_field('job_title', $post_id) ) ?  get_field('job_title', $post_id ) : '';
		 $new_build .= '<div><div class="staffimage" style="background-image:url(\''.$thumb_url_array[0].'\');"></div><h4>'.get_the_title().'</h4> <span>'.$jobtitle.'</span></div>';
	endwhile;
	wp_reset_postdata(); 
			
			
			 
	 echo   '<section id="MeetTheTeam" class="'.$block_class.'">
			 	<div class="stafflist_container'.$inner_animation.'">
				   <div class="staff_intro">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="88" height="32" viewBox="0 0 88 32"><path fill="#ee8b11" d="M0 32h88.175v-32h-88.175v32zM85.439 2.799v26.402h-82.64v-26.402h82.64z"></path><path fill="#ee8b11" d="M11.451 17.177h5.089v6.171h2.926v-14.759h-2.926v5.789h-5.089v-5.789h-2.99v14.759h2.99z"></path><path fill="#ee8b11" d="M33.909 20.549h-6.68v-3.372h5.408v-2.799h-5.408v-2.99h6.68v-2.799h-9.67v14.759h9.67z"></path><path fill="#ee8b11" d="M41.288 17.877h2.354l2.354 5.471h3.181l-2.481-5.598c1.209-0.318 2.036-1.4 2.036-2.799v-3.499c0-1.718-1.209-2.926-2.926-2.926h-7.443v14.759h2.926v-5.408zM41.288 11.388h3.817c0.445 0 0.7 0.254 0.7 0.7v2.354c0 0.445-0.254 0.7-0.7 0.7h-3.817v-3.753z"></path><path fill="#ee8b11" d="M56.111 23.412h4.962c1.718 0 2.926-1.209 2.926-2.926v-9.097c0-1.718-1.209-2.926-2.926-2.926h-4.962c-1.718 0-2.926 1.209-2.926 2.926v9.097c0 1.781 1.209 2.926 2.926 2.926zM56.175 11.96c0-0.445 0.254-0.7 0.7-0.7h3.499c0.445 0 0.7 0.254 0.7 0.7v7.952c0 0.445-0.254 0.7-0.7 0.7h-3.499c-0.445 0-0.7-0.254-0.7-0.7v-7.952z"></path><path fill="#ee8b11" d="M71.125 13.296l5.471 10.052h3.181v-14.759h-2.799v10.052l-5.408-10.052h-3.181v14.759h2.736z"></path></svg>
				   
						   <h2>Meet the<br>team</h2>
				   </div>
				   <div class="staff_details">
					   		<h3>Founders</h3>
					  		<div>'.$founder.'</div>
			 		 		<h3>Management Team</h3>
			 		 		<div>'.$management.'</div>
							<h3>Mortgage Advisor Team</h3>
							<div>'.$mortgage_team.'</div>
							<h3>Protection Advisor Team</h3>
							<div>'.$protection.'</div>
							<h3>General Insurance Team</h3>
							<div>'.$general.'</div>
							<h3>Case Progression Team</h3>
							<div>'.$progression.'</div>
							<h3>Application Team</h3>
							<div>'.$application.'</div>
							<h3>Compliance Team</h3>
							<div>'.$compliance.'</div>
							<h3>New Build Team</h3>
							<div>'.$new_build.'</div>
					</div>
				</div>
			</section>';

?>