<?php

require_once('inc/ajax.php');
require_once('inc/admin-customization.php');
require_once('inc/posts-listing-custom-columns.php');
require_once('inc/custom-post-types.php');
require_once('inc/custom-login-style.php');

/* Add css sylesheets to header */
function enqueue_my_styles() {
	wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array('bootstrap', 'font-awesome'));
	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.css' );
	wp_enqueue_style( 'nivo-lightbox', get_stylesheet_directory_uri() . '/assets/css/nivo-lightbox/nivo-lightbox.css' );
	wp_enqueue_style( 'nivo-lightbox-default', get_stylesheet_directory_uri() . '/assets/css/nivo-lightbox/default.css', array('nivo-lightbox') );
	wp_enqueue_style( 'font-raleway', 'https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700' );
	wp_enqueue_style( 'font-open-sans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' );
	wp_enqueue_style( 'font-dancing-script', 'https://fonts.googleapis.com/css?family=Dancing+Script:400,700' );
	wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/assets/fonts/font-awesome/css/font-awesome.css' );

}
add_action( 'wp_enqueue_scripts', 'enqueue_my_styles' );

/* Add javascripts into footer */
function enqueue_my_scripts() {
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array ( 'jquery' ) );
	wp_enqueue_script( 'smoothscroll',  get_template_directory_uri() . '/assets/js/smooth-scroll.min.js"', array ( 'jquery' ) );
  wp_enqueue_script( 'nivo-lightbox', get_template_directory_uri() . '/assets/js/nivo-lightbox.js', array ( 'jquery' ) );
  wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/jquery.isotope.js', array ( 'jquery' ) );
  wp_enqueue_script( 'bootstrapvalidation', get_template_directory_uri() . '/assets/js/jqBootstrapValidation.js', array ( 'jquery' ) );
  wp_enqueue_script( 'contact-me', get_template_directory_uri() . '/assets/js/contact_me.js', array ( 'jquery','bootstrapvalidation' ) );
  wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array ( 'bootstrap', 'smoothscroll', 'nivo-lightbox', 'isotope', 'bootstrapvalidation', 'contact-me' ) );
}
add_action( 'wp_enqueue_scripts', 'enqueue_my_scripts' );

?>
