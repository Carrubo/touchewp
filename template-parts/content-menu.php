<div id="restaurant-menu">
  <div class="section-title text-center center">
    <div class="overlay">
      <h2>Menu</h2>
      <hr>
      <p>Se si fa in quattro per renderti felice, è una pizza.</p>
    </div>
  </div>
  <div class="container">
    <div class="row">

      <div class="col-xs-12 col-sm-6 col-sm-offset-3">
      <!-- <div class="col-xs-12 col-sm-6"> -->
        <div class="menu-section">
          <h2 class="menu-section-title">Antipasti</h2>
          <hr>
          <?php
          $args = array( 'post_type' => 'antipasti' );
          $loop = new WP_Query( $args );
          include(locate_template('template-parts/content-menu-section.php'));
          ?>
        </div>
      </div>

      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">Pizze Classiche</h2>
          <hr>
          <?php
            $args = array( 'post_type' => 'pizze-classiche' );
            $loop = new WP_Query( $args );
            include(locate_template('template-parts/content-menu-section.php'));
          ?>
        </div>
      </div>

      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">Pizze Speciali</h2>
          <hr>
          <?php
          $args = array( 'post_type' => 'pizze-speciali' );
          $loop = new WP_Query( $args );
          include(locate_template('template-parts/content-menu-section.php'));
          ?>
        </div>
      </div>

      <div class="col-xs-12 col-sm-6 col-sm-offset-3">
      <!-- <div class="col-xs-12 col-sm-6"> -->
        <div class="menu-section">
          <h2 class="menu-section-title">Dolci</h2>
          <hr>
          <?php
            $args = array( 'post_type' => 'dolci' );
            $loop = new WP_Query( $args );
            include(locate_template('template-parts/content-menu-section.php'));
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
