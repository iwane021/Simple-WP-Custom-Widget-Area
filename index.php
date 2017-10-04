<?php
/**
* Plugin Name: Front Page Banner Widget
* Plugin URI: http://127.0.0.1/plugins/myplugin/
* Description: Front Page Custom Banner by Iwan Prasetiyo
* Version: 1.0
* Author: Iwan Prasetiyo
* Author URI: iwan.webdeveloper@gmail.com
* License: GPL2
*/


/**
 * Front Page Banner Widget
 */
function custom_widget_init(){
	register_sidebar(array(
		'name' 			=> __( 'Front page banner', 'twentyseventeen' ),
		'id'			=> 'banner-fpage',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div id="fpage" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="fpage-title">',
		'after_title'   => '</h2>',
	));
}
add_action( 'widgets_init', 'custom_widget_init', 10, 4 );

function custom_banner_fpage_widget( $content ) {
	if ( is_active_sidebar( 'banner-fpage' ) ) {
		dynamic_sidebar('banner-fpage');
	}
	return $content;
}
add_filter( 'fp_content_banner', 'custom_banner_fpage_widget' );