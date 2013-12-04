<?php
include 'autocracy/autocracy.php';

//Theme Supports

add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

register_nav_menus( array(
	'Header_Nav' => 'Header Navigation Area',
	) );

//Sidebar Registration
register_sidebar( array(
	'name' => __( 'Blog Sidebar', 'wpb' ),
	'id' => 'sidebar-1',
	'description' => __( 'The blog sidebar appears on the right hand side.', 'wpb' ),
	'before_widget' => '<aside class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3><div class="widget-content">',
	) 
);

//Customized Exerpt
function custom_excerpt_length( $length ) {
	return 18;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

//Post Type Creation

function koni_create_post_type() {
	register_post_type('channels', array(
		'labels' => array(
			'name' => __('Channels'),
			'singular_name' => __('channel')
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'channels'),
		)
	);
	register_post_type('partners', array(
		'labels' => array(
			'name' => __('Partners'),
			'singular_name' => __('partner')
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'partners'),
		'supports' => array('title'),
		)
	);
	register_post_type('products', array(
		'labels' => array(
			'name' => __('Products'),
			'singular_name' => __('product')
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'products'),
		'supports' => array('thumbnail', 'title', 'editor'),
		)
	);
}

add_action('init', 'koni_create_post_type');

?>