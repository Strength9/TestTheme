<?php

define( 'xray_VERSION', 1.0 ); // Define the version so we can easily replace it throughout the theme

$SiteName = 'Site';
$settingslink = 'site-settings';
/*-----------------------------------------------------------------------------------*/
/* Remove the auto p tag removal
/*-----------------------------------------------------------------------------------*/

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );


/*-----------------------------------------------------------------------------------*/
/* Set Theme Supports
/*-----------------------------------------------------------------------------------*/
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'menus' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'editor-styles' ); 
	add_editor_style( 'style-editor.css' );

	// Woocomerce Support For the image gallerys and sliders
	add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

	function xray_add_woocommerce_support() {
		add_theme_support( 'woocommerce' );
	}
	add_action( 'after_setup_theme', 'xray_add_woocommerce_support' );  




/*-----------------------------------------------------------------------------------*/
/* WordPress Clean Ups
/*-----------------------------------------------------------------------------------*/
		function website_remove_version() { return ''; }

		remove_action('wp_head', 'rest_output_link_wp_head', 10);
		remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
		remove_action('template_redirect', 'rest_output_link_header', 11, 0);
		remove_action ('wp_head', 'rsd_link');
		remove_action( 'wp_head', 'wlwmanifest_link');
		remove_action( 'wp_head', 'wp_shortlink_wp_head');

		add_filter('the_generator', 'website_remove_version');
		add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
		add_filter( 'rank_math/frontend/remove_credit_notice', '__return_true' );
		add_filter( 'script_loader_src', 'website_cleanup_query_string', 15, 1 ); 
		add_filter( 'style_loader_src', 'website_cleanup_query_string', 15, 1 );

		function website_cleanup_query_string( $src ){ 
			$parts = explode( '?', $src ); 
			return $parts[0]; 
		}  
		function remove_jquery_migrate($scripts)
		{
			if (!is_admin() && isset($scripts->registered['jquery'])) {
				$script = $scripts->registered['jquery'];
				
				if ($script->deps) { // Check whether the script has any dependencies
					$script->deps = array_diff($script->deps, array(
						'jquery-migrate'
					));
				}
			}
		}
		add_action('wp_default_scripts', 'remove_jquery_migrate');

		function disable_emojis() {
			remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
			remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
			remove_action( 'wp_print_styles', 'print_emoji_styles' );
			remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
			remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
			remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
			remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
			add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
			add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
		}
		add_action( 'init', 'disable_emojis' );
		
		function disable_emojis_tinymce( $plugins ) {
			if ( is_array( $plugins ) ) {
			return array_diff( $plugins, array( 'wpemoji' ) );
			} else {
			return array();
			}
		}
		
		function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
			if ( 'dns-prefetch' == $relation_type ) {
			$emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );
		
		$urls = array_diff( $urls, array( $emoji_svg_url ) );
			}
		
		return $urls;
		}

		function try_remove_wp_block_library_css(){
			wp_dequeue_style( 'wp-block-library' );
			wp_dequeue_style( 'wp-block-library-theme' );
			wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
			wp_dequeue_style( 'global-styles' ); // Remove theme.json
		}
		add_action( 'wp_enqueue_scripts', 'try_remove_wp_block_library_css', 100 );
		
		remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
		remove_action( 'wp_footer', 'wp_enqueue_global_styles', 1 );
/*-----------------------------------------------------------------------------------*/
/* Menu Registration and Tidy Up
/*-----------------------------------------------------------------------------------*/
	register_nav_menus( array( 'primary'	=>	__( 'Primary Menu', 'xray' ), ));


	function wp_nav_menu_remove($var) {
		return is_array($var) ? array_intersect($var, array('current-menu-item','menu-item-has-children','current-menu-parent')) : '';
	}
	add_filter('page_css_class', 'wp_nav_menu_remove', 100, 1);
	add_filter('nav_menu_item_id', 'wp_nav_menu_remove', 100, 1);
	add_filter('nav_menu_css_class', 'wp_nav_menu_remove', 100, 1);

/*-----------------------------------------------------------------------------------*/
/* Enqueue Styles and Scripts
/*-----------------------------------------------------------------------------------*/
	function xray_scripts()  { 
		// get the theme directory style.css and link to it in the header
		wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/style.css?v='.rand(111,999));
		wp_enqueue_script( 'jquery-core' );
		wp_enqueue_script( 'xray', get_template_directory_uri() . '/assets/js/script.js');

		wp_dequeue_style( 'wp-block-library' );
		wp_dequeue_style('hoverIntent');
	}
	add_action( 'wp_enqueue_scripts', 'xray_scripts' ); 

	
	remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
	remove_action( 'wp_footer', 'wp_enqueue_global_styles', 1 );


/*-----------------------------------------------------------------------------------*/
/* Add Custom Theme Section (For Use With ACF)
/*-----------------------------------------------------------------------------------*/
if( function_exists('acf_add_options_page') ) {
		acf_add_options_page(array(
			'page_title' 	=> $SiteName.' General Settings',
			'menu_title'	=> $SiteName.' Settings',
			'menu_slug' 	=> $settingslink,
			'capability'	=> 'edit_posts',
			'position'      => 1,
			'redirect'		=> false
		));	
}




/*-----------------------------------------------------------------------------------*/
/* Add Custom Blocks
/*-----------------------------------------------------------------------------------*/

/* Custom block category's */
add_action('acf/init', 'custom_acf_init');
function custom_acf_init() {
	  // Get an array of theme PHP templates
	  $theme = wp_get_theme();
	  $files = $theme->get_files('php', 2, false);
	
	  // Iterate over and ignore non-block templates
	  foreach ($files as $filename => $filepath) {
		if (preg_match('#^template-parts/(block|container)s?/#', $filename, $matches) !== 1) {
		  continue;
		}
		// Read the PHP comment meta data for the block
		$meta = get_file_data($filepath, array(
		  'name'        => 'Block Name',
		  'description' => 'Block Description',
		  'post_types'  => 'Post Types',
		  'mode'        => 'Block Mode',
		  'align'       => 'Block Align'
		));
		// Skip template if a name is not provided
		if (empty($meta['name'])) {
		  continue;
		}
		// Convert the post types to an array (or use defaults)
		$post_types = array_filter(
		  array_map('trim', explode(',', $meta['post_types']))
		);
		if (empty($post_types)) {
		  $post_types = array('page', 'post');
		}
		// Register the ACF block using the meta data
		acf_register_block_type(array(
		  'name'              => "{$matches[1]}_" . sanitize_title($meta['name']),
		  'title'             => $meta['name'],
		  'description'       => $meta['description'],
		  'category'          => "theme_{$matches[1]}s",
		  'post_types'        => $post_types,
		  'render_template'   => $filepath,
		  'supports'          => array(
			'mode'            => $meta['mode'] !== 'false',
			'customClassName' => true,
			
		  ),
		));
	  }
	}
	

