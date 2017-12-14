<?php
// add a new logo to the login page
function my_login_logo() { ?>
  <style type="text/css">
    .login #login h1 a {
      height: 200px;
      width: 200px;
      background-image: url( <?php echo get_template_directory_uri() . '/img/logo.png'; ?> );
      background-size: contain;
    }
    .login #nav a, .login #backtoblog a {
      color: #72a411 !important;
    }
    .login #nav a:hover, .login #backtoblog a:hover
    {
      color: #628d0f !important;
    }
    .login #loginform .button-primary {
      background: #72a411;
      border-color: #72a411;
      box-shadow: 0 1px 0 #72a411;
      text-shadow: 0 -1px 1px #72a411, 1px 0 1px #72a411, 0 1px 1px #72a411, -1px 0 1px #72a411;
    }
    .login #loginform .button-primary:hover {
      background: #628d0f;
    }
    .login input[type=password]:focus,
    .login input[type=text]:focus,
    .login input[type=checkbox]:focus {
      border-color: #72a411;
      box-shadow: 0 0 2px rgba(114, 164, 17, 0.8);
    }
    .login input[type=checkbox]:checked:before {
      color: #72a411;
    }
  </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


// remove unwanted dashboard widgets for relevant users
function my_remove_dashboard_widgets() {
  $user = wp_get_current_user();
  if ( ! $user->has_cap( 'manage_options' ) ) {
    remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
  }
}
add_action( 'wp_dashboard_setup', 'my_remove_dashboard_widgets' );


// add new dashboard widgets
function my_add_dashboard_widgets() {
  $user = wp_get_current_user();
  if ( ! $user->has_cap( 'manage_options' ) ) {
    wp_add_dashboard_widget( 'my_dashboard_welcome', 'Benvenuto', 'my_add_welcome_widget' );
  }
}

function my_add_welcome_widget() { ?>

    Questo è il pannello di controllo del sito Pizzeria Napulé.

    Da qui puoi modificare il contenuto del menù visualizzato sul sito.

    Per modificare, aggiungere o eliminare gli elementi del menù usa le sezioni sulla sinistra.

    <ul>
        <li><strong>Antipasti</strong></li>
        <li><strong>Pizze Classiche</strong></li>
        <li><strong>Pizze Speciali</strong></li>
        <li><strong>Dolci</strong></li>
    </ul>

    In ognuna delle schermate troverai istruzioni che ti aiuteranno ad aggiungere e modificare i contenuti.

<?php }
add_action( 'wp_dashboard_setup', 'my_add_dashboard_widgets' );


// Rename Posts to News in Menu
function my_change_post_menu_label() {
  $user = wp_get_current_user();
  if ( ! $user->has_cap( 'manage_options' ) ) {
    global $menu;
    $menu[70][0] = 'Il mio Profilo';
  }
}
add_action( 'admin_menu', 'my_change_post_menu_label' );


// Remove some menu items for all but Administrators
function my_remove_comments_menu_items() {
  $user = wp_get_current_user();
  if ( ! $user->has_cap( 'manage_options' ) ) {
    remove_menu_page( 'edit-comments.php' );
    remove_menu_page( 'edit.php' );
    remove_menu_page( 'upload.php' );
    remove_menu_page( 'tools.php' );
    remove_menu_page( 'wpcf7' );
  }
}
add_action( 'admin_menu', 'my_remove_comments_menu_items' );

// Add help text to right of screen in a metabox
function my_metabox_top_right() {
    add_meta_box( 'after-title-help', 'Pubblicare e salvare le modifiche', 'my_top_right_help_metabox_content', array('antipasti', 'pizze-classiche', 'pizze-speciali', 'dolci'), 'side', 'high' );
}
// callback function to populate metabox
function my_top_right_help_metabox_content() { ?>
    <p>Assicurati di cliccare sul pulsante 'Pubblica' sottostante per pubblicare la nuova voce del menù, oppure 'Aggiorna' per salvare le modifiche.</p>
<?php }
add_action( 'add_meta_boxes', 'my_metabox_top_right' );


?>
