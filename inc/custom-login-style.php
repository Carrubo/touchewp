<?php

/*
 * Change colors and logo of login page
 */

function login_style() {
  wp_register_style( 'napule_login_stylesheet', get_stylesheet_directory_uri() . '/assets/css/login-style.css');
  wp_enqueue_style( 'napule_login_stylesheet' );
}

 add_action( 'login_enqueue_scripts', 'login_style');

 ?>
