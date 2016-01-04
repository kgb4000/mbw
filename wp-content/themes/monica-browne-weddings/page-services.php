<?php
/*
		Template Name: Services
*/
?>

<?php get_header(); ?>

    <section class="page-banner">
      <div class="container">
        <h1 class="page-title">Our Services</h1>
      </div>
    </section>

    <section class="services">
      <div class="wrap group">
        <section class="wedding-services">
          <div class="services-header">
            <h2 class="header">Planning</h2>
            <p><span>full service or</span> <span>day-of cordination</span></p>
          </div>

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
            <p class="value-title"><?php the_title(); ?></p>
            <div class="services-info">
              <p><?php the_content(); ?></p>
            </div>

          <?php endwhile; else : ?>

            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

          <?php endif; ?>
          
          <a class="services-btn" href="contact.html" >
            <img class="contact-arrow-back" src="<?php bloginfo( 'template_url'); ?>/img/back-of-arrow.svg" />
            <p><span>Contact</span> us</p>
            <img class="contact-arrow-front" src="<?php bloginfo( 'template_url'); ?>/img/arrow-front.svg" />
          </a>
        </section>
        <section class="wedding-services">
          <div class="services-header-2">
            <h2 class="header"><span class="script">Floral</span> <span class="uppcase">Design</span></h2>
          </div>

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		        
		        <p class="value-title"><?php the_title(); ?></p>
		        <div class="services-info">
		        	<p><?php the_content(); ?></p>
						</div>

					<?php endwhile; else : ?>

						<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

					<?php endif; ?>

          <a class="services-btn" href="gallery.html" >
            <img class="contact-arrow-back" src="<?php bloginfo( 'template_url'); ?>/img/back-of-arrow.svg" />
            <p>view <span>gallery</span></p>
            <img class="contact-arrow-front" src="<?php bloginfo( 'template_url'); ?>/img/arrow-front.svg" />
          </a>
        </section>
        <section class="wedding-services">
          <div class="services-header-3">
            <h2 class="header">D&Eacute;cor</h2>
          </div>

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		        
		        <p class="value-title"><?php the_title(); ?></p>
		        <div class="services-info">
		        	<p><?php the_content(); ?></p>
						</div>

					<?php endwhile; else : ?>

						<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

					<?php endif; ?>  

          <a class="services-btn" href="gallery.html" >
            <img class="contact-arrow-back" src="<?php bloginfo( 'template_url'); ?>/img/back-of-arrow.svg" />
            <p>view <span>gallery</span></p>
            <img class="contact-arrow-front" src="<?php bloginfo( 'template_url'); ?>/img/arrow-front.svg" />
          </a>
        </section>
      </div>
    </section>

<?php get_footer(); ?>