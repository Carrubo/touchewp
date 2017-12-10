<?php
// Register new post type
function register_custom_types() {

  /*
    Antipasti
  */
  $labels = array(
    'name' => __( 'Antipasti' ),
    'singular_name' => __( 'Antipasto' ),
    'all_items' => __( 'Tutti gli antipasti' )
  );
  // options for the new post type
  $args = array(
    'labels' => $labels,
    'show_ui' => true,
    'show_in_menu' => true,
    // 'menu_position' => 1,
    'supports' => array( 'title')
  );
  register_post_type( 'antipasti', $args);

  /* Pizze classiche */
  $labels = array(
    'name' => __( 'Pizze Classiche' ),
    'singular_name' => __( 'Pizza Classica' ),
    'all_items' => __( 'Tutte le Pizze Classiche' )
  );
  // options for the new post type
  $args = array(
    'labels' => $labels,
    'show_ui' => true,
    'show_in_menu' => true,
    // 'menu_position' => 1,
    'supports' => array( 'title')
  );
  register_post_type( 'pizze-classiche', $args);

  /*
    Pizze Speciali
  */
  $labels = array(
    'name' => __( 'Pizze Speciali' ),
    'singular_name' => __( 'Pizza Speciale' ),
    'all_items' => __( 'Tutte le Pizze Speciali' )
  );
  // options for the new post type
  $args = array(
    'labels' => $labels,
    'show_ui' => true,
    'show_in_menu' => true,
    // 'menu_position' => 1,
    'supports' => array( 'title')
  );
  register_post_type( 'pizze-speciali', $args);

  /*
    Dolci
  */
  $labels = array(
    'name' => __( 'Dolci' ),
    'singular_name' => __( 'Dolce' ),
    'all_items' => __( 'Tutti i dolci' )
  );
  // options for the new post type
  $args = array(
    'labels' => $labels,
    'show_ui' => true,
    'show_in_menu' => true,
    // 'menu_position' => 1,
    'supports' => array( 'title')
  );
  register_post_type( 'dolci', $args);
}

// Hooking up our function to theme setup
add_action( 'init', 'register_custom_types' );
