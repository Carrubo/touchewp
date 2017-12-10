
  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="menu-item">
      <div class="menu-item-name"><?php the_title() ?></div>
      <div class="menu-item-price"> <?php the_field('prezzo') ?> € </div>
      <div class="menu-item-description"> <?php the_field('ingredienti') ?> </div>
    </div>
  <?php endwhile; ?>
