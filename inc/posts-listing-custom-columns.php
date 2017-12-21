<?php
/*
 * Custom columns for posts listing inside admin area
 */

// add stylesheet that resize columns
function my_admin_styles() {
    wp_register_style( 'my_admin_stylesheet', get_template_directory_uri() . '/assets/css/admin-customization.css');
    wp_enqueue_style( 'my_admin_stylesheet' );
}
add_action( 'admin_enqueue_scripts', 'my_admin_styles' );

// Remove date from custom posts listing screen
function my_custom_posts_listing_fields( $columns ) {
    error_log(print_r($columns, true));
    unset( $columns[ 'date' ] );
    return $columns;
}
add_action( 'manage_antipasti_posts_columns', 'my_custom_posts_listing_fields' );
add_action( 'manage_pizze-classiche_posts_columns', 'my_custom_posts_listing_fields' );
add_action( 'manage_pizze-speciali_posts_columns', 'my_custom_posts_listing_fields' );
add_action( 'manage_dolci_posts_columns', 'my_custom_posts_listing_fields' );


// Add custom columns to custom post types list
function add_custom_fields_columns ( $columns ) {
  return array_merge ( $columns, array (
    'ingredienti'   => __ ( 'Ingredienti' ),
    'prezzo' => __ ( 'Prezzo' )
  ) );
}
add_filter ( 'manage_antipasti_posts_columns', 'add_custom_fields_columns' );
add_filter ( 'manage_pizze-classiche_posts_columns', 'add_custom_fields_columns' );
add_filter ( 'manage_pizze-speciali_posts_columns', 'add_custom_fields_columns' );
add_filter ( 'manage_dolci_posts_columns', 'add_custom_fields_columns' );


// Get content for the custom fields columns in post list
function populate_custom_column ( $column, $post_id ) {
  switch ( $column ) {
    case 'prezzo':
      echo get_post_meta ( $post_id, 'prezzo', true ) . ' €';
      break;
    case 'ingredienti':
      echo get_post_meta ( $post_id, 'ingredienti', true );
      break;
  }
 }
 add_action ( 'manage_antipasti_posts_custom_column', 'populate_custom_column', 10, 2 );
 add_action ( 'manage_pizze-classiche_posts_custom_column', 'populate_custom_column', 10, 2 );
 add_action ( 'manage_pizze-speciali_posts_custom_column', 'populate_custom_column', 10, 2 );
 add_action ( 'manage_dolci_posts_custom_column', 'populate_custom_column', 10, 2 );

?>
