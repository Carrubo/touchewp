<?php get_header(); ?>

<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 ">
        <div class="about-img"><img src="<?php bloginfo('template_directory') ?>/img/about.jpg" class="img-responsive" alt=""></div>
      </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2>La nostra pizzeria</h2>
          <hr>
          <p>La vera pizza è alimento, simbolo e rito. Alimento povero e nobile. Disco festoso di pasta, colorato di rosso. Ma è anche qualcosa di più di un impasto di acqua e farina, condito con olio e pomodoro e cotto al forno a legna. La pizza si fa non si cucina. Nasce povera. Si fa con le mani e con la sola abilità delle palme (Alfetra).</p>
          <h3>Piatto Universale</h3>
          <p>Se c’è un piatto universale, quello non è l’hamburger bensì la pizza, perché si limita a una base comune – l’impasto – sul quale ciascuno può disporre, organizzare ed esprimere la sua differenza (Attali).</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Restaurant Menu Section -->
<?php include(locate_template('template-parts/content-menu.php')); ?>

<!-- Portfolio Section -->
<div id="portfolio">
  <div class="section-title text-center center">
    <div class="overlay">
      <h2>Gallery</h2>
      <hr>
      <p>Fatte ‘na pizza c’a pummarola ‘ncoppa</p>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="categories">
        <ul class="cat">
          <li>
            <ol class="type">
              <li><a href="#" data-filter="*" class="active">Tutti</a></li>
              <li><a href="#" data-filter=".breakfast">Colazione</a></li>
              <li><a href="#" data-filter=".lunch">Pranzo</a></li>
              <li><a href="#" data-filter=".dinner">Cena</a></li>
            </ol>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php bloginfo('template_directory') ?>/img/portfolio/01-large.jpg" title="Piatto delizioso" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Piatto delizioso</h4>
              </div>
              <img src="<?php bloginfo('template_directory') ?>/img/portfolio/01-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 dinner">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php bloginfo('template_directory') ?>/img/portfolio/02-large.jpg" title="Piatto delizioso" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Piatto delizioso</h4>
              </div>
              <img src="<?php bloginfo('template_directory') ?>/img/portfolio/02-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php bloginfo('template_directory') ?>/img/portfolio/03-large.jpg" title="Piatto delizioso" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Piatto delizioso</h4>
              </div>
              <img src="<?php bloginfo('template_directory') ?>/img/portfolio/03-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php bloginfo('template_directory') ?>/img/portfolio/04-large.jpg" title="Piatto delizioso" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Piatto delizioso</h4>
              </div>
              <img src="<?php bloginfo('template_directory') ?>/img/portfolio/04-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 dinner">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php bloginfo('template_directory') ?>/img/portfolio/05-large.jpg" title="Piatto delizioso" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Piatto delizioso</h4>
              </div>
              <img src="<?php bloginfo('template_directory') ?>/img/portfolio/05-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 lunch">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php bloginfo('template_directory') ?>/img/portfolio/06-large.jpg" title="Piatto delizioso" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Piatto delizioso</h4>
              </div>
              <img src="<?php bloginfo('template_directory') ?>/img/portfolio/06-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 lunch">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php bloginfo('template_directory') ?>/img/portfolio/07-large.jpg" title="Piatto delizioso" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Piatto delizioso</h4>
              </div>
              <img src="<?php bloginfo('template_directory') ?>/img/portfolio/07-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php bloginfo('template_directory') ?>/img/portfolio/08-large.jpg" title="Piatto delizioso" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Piatto delizioso</h4>
              </div>
              <img src="<?php bloginfo('template_directory') ?>/img/portfolio/08-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 dinner">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php bloginfo('template_directory') ?>/img/portfolio/09-large.jpg" title="Piatto delizioso" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Piatto delizioso</h4>
              </div>
              <img src="<?php bloginfo('template_directory') ?>/img/portfolio/09-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 lunch">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php bloginfo('template_directory') ?>/img/portfolio/10-large.jpg" title="Piatto delizioso" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Piatto delizioso</h4>
              </div>
              <img src="<?php bloginfo('template_directory') ?>/img/portfolio/10-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 lunch">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php bloginfo('template_directory') ?>/img/portfolio/11-large.jpg" title="Piatto delizioso" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Piatto delizioso</h4>
              </div>
              <img src="<?php bloginfo('template_directory') ?>/img/portfolio/11-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php bloginfo('template_directory') ?>/img/portfolio/12-large.jpg" title="Piatto delizioso" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Piatto delizioso</h4>
              </div>
              <img src="<?php bloginfo('template_directory') ?>/img/portfolio/12-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Team Section -->
<div id="team" class="text-center">
  <div class="overlay">
    <div class="container">
      <div class="col-md-10 col-md-offset-1 section-title">
        <h2>Il nostro staff</h2>
        <hr>
        <p>In un ristorante scegli il tavolo vicino al cameriere.</p>
      </div>
      <div id="row">
        <div class="col-md-4 team">
          <div class="thumbnail">
            <div class="team-img"><img src="<?php bloginfo('template_directory') ?>/img/team/01.jpg" alt="..."></div>
            <div class="caption">
              <h3>Mario</h3>
              <p>Il nostro pizzaiolo.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 team">
          <div class="thumbnail">
            <div class="team-img"><img src="<?php bloginfo('template_directory') ?>/img/team/02.jpg" alt="..."></div>
            <div class="caption">
              <h3>Luigi</h3>
              <p>Il nostro cuoco.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 team">
          <div class="thumbnail">
            <div class="team-img"><img src="<?php bloginfo('template_directory') ?>/img/team/03.jpg" alt="..."></div>
            <div class="caption">
              <h3>Daniele</h3>
              <p>Responsabile della sala.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Call Reservation Section -->
<div id="call-reservation" class="text-center">
  <div class="container">
    <h2>Vuoi prenotare un tavolo? Chiama il <strong>1-887-654-3210</strong></h2>
  </div>
</div>
<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="container">
    <div class="section-title text-center">
      <h2>Form di contatto</h2>
      <hr>
      <p>Puoi comunicare con noi inviandoci un messaggio da questo form.</p>
    </div>
    <div class="col-md-10 col-md-offset-1">
      <!-- <form name="sentMessage" id="contactForm" action="contact_send" novalidate>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" name="contact-name" class="form-control" placeholder="Nome" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" name="contact-email" id="email" class="form-control" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="contact-message" id="message" class="form-control" rows="4" placeholder="Messaggio" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-custom btn-lg">Invia il messagio</button>
      </form> -->

      <!-- Contact form -->
      <?php echo do_shortcode('[contact-form-7 id="29" title="Form di contatto"]'); ?>
      <!-- End Contact form -->

    </div>
  </div>
</div>
<?php get_footer(); ?>
