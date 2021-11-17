<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Before Wrapper
	 *
	 * @Preloader
	 *
	 */
	add_action( 'hus_preloader', 'hus_site_preloader', 10 );

	/**
	 * Header
	 *
	 * @Header Menu
	 * @Header Bottom
	 * 
	 */

	add_action( 'hus_header', 'hus_header_cb', 10 );

	/**
	 * Hook for footer
	 *
	 */
	add_action( 'hus_footer', 'hus_footer_area', 10 );

	/**
	 * Hook for Blog, single, page, search, archive pages wrapper.
	 */
	add_action( 'hus_wrp_start', 'hus_wrp_start_cb', 10 );
	add_action( 'hus_wrp_end', 'hus_wrp_end_cb', 10 );
	
	/**
	 * Hook for Blog, single, search, archive pages column.
	 */
	add_action( 'hus_blog_col_start', 'hus_blog_col_start_cb', 10 );
	add_action( 'hus_blog_col_end', 'hus_blog_col_end_cb', 10 );
	
	/**
	 * Hook for blog posts thumbnail.
	 */
	add_action( 'hus_blog_posts_thumb', 'hus_blog_posts_thumb_cb', 10 );

	/**
	 * Hook for blog details wrapper.
	 */
	add_action( 'hus_blog_details_wrap_start', 'hus_blog_details_wrap_start_cb', 10 );
	add_action( 'hus_blog_details_wrap_end', 'hus_blog_details_wrap_end_cb', 10 );

	/**
	 * Hook for blog posts title.
	 */
	add_action( 'hus_blog_posts_title', 'hus_blog_posts_title_cb', 10 );

	/**
	 * Hook for blog posts meta.
	 */
	add_action( 'hus_blog_posts_meta', 'hus_blog_posts_meta_cb', 10 );

	/**
	 * Hook for blog posts excerpt.
	 */
	add_action( 'hus_blog_posts_excerpt', 'hus_blog_posts_excerpt_cb', 10 );
	// add_action( 'hus_blog_posts_excerpt', 'hus_blog_read_more_cb', 10 );

	/**
	 * Hook for blog posts info links.
	 */
	add_action( 'hus_blog_posts_info_link', 'hus_blog_posts_info_link_cb', 10 );

	/**
	 * Hook for blog posts content.
	 */
	add_action( 'hus_blog_posts_content', 'hus_blog_posts_content_cb', 10 );
	
	/**
	 * Hook for blog single post social share option.
	 */
	add_action( 'hus_blog_posts_share', 'hus_blog_posts_share_cb', 10 );

	/**
	 * Hook for blog sidebar.
	 */
	add_action( 'hus_blog_sidebar', 'hus_blog_sidebar_cb', 10 );
	
	/**
	 * Hook for blog single post meta category, tag, next - previous link and comments form.
	 */
	add_action( 'hus_blog_single_meta', 'hus_blog_single_meta_cb', 10 );
	
	/**
	 * Hook for page content.
	 */
	add_action( 'hus_page_content', 'hus_page_content_cb', 10 );
	
	
	/**
	 * Hook for 404 page.
	 */
	add_action( 'hus_fof', 'hus_fof_cb', 10 );

	

?>