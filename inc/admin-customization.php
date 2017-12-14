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

  ?>
