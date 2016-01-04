<?php get_header(); ?>

	<div class="bx-wrap">
	  <ul class="bxslider">
	    <li><img src="img/img-1.jpg"/></li>
	    <li><img src="img/img-2.jpg"/></li>
	    <li><img src="img/img-3.jpg"/></li>
	    <li><img src="img/img-4.jpg"/></li>
	    <li><img src="img/img-5.jpg"/></li>
	  </ul>
	</div>
	<div class="wrap">
	  <section class="bride-proposition group">
	    <div class="container">
	      <section class="value-proposition">

	      	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		        
		        <h2 class="section-title"><?php the_title(); ?></h2>
		        <p><?php the_content(); ?></p>

					<?php endwhile; else : ?>

						<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

					<?php endif; ?>

	      </section>
	      <a class="help-btn" href="services.html" >
	        <p><span class="normal-font">See how we</span></p>
	        <img class="arrow-back" src="img/back-of-arrow.svg" />
	        <p class="script-font">help brides like you!</p>
	        <img class="arrow-front" src="img/arrow-front.svg" />
	      </a>
	    </div>
	  </section>

	  <section class="big-blocks group">
	    <div class="box-1">
	      <div class="box-content">
	        <p class="get-inspired">Get Inspired</p>
	        <p class="over-on-the">over on the</p>
	        <p class="big">Blog</p>
	      </div>
	    </div>
	    <div class="box-2">
	      <div class="box-content">
	        <p>As seen on</p>
	        <img class="ww-logo" src="img/WeddingWireLogo.jpg" />
	        <img class="ww-logo" src="img/WeddingWireLogo.jpg" />
	      </div>
	    </div>
	    <div class="box-3">
	      <div class="box-content">
	        <img class="heart-img-small" src="img/love-notes.svg" />
	        <p>From clients</p>
	        <p>Who love us</p>
	      </div>
	    </div>
	    <div class="box-4">
	      <div class="box-content">
	        <img class="monica-front-page-img" src="img/monica-pic-1.jpg" />
	        <p class="monica-name"><span class="about">About</span> <span class="script">Monica</span></p>
	      </div>
	    </div>
	    <div class="box-5">
	      <div class="box-content">
	        <p><span class="normal-font">Our</span> <span class="script">Services</span></p>
	        <ul class="fp-services">
	          <li><p>Planning</p></li>
	          <li><p>Floral Design</p></li>
	          <li><p>D&Eacute;cor</p></li>
	        </ul>
	      </div>
	    </div>
	    <div class="box-6">
	      <div class="box-content">
	        <p><span class="normal-font">Connect</span> <span class="script">with</span></p>
	        <p class="mbw">MBW</p>
	        <ul class="social-links">
	          <li><a href="http://facebook.com/monicabrowneweddings" target="_blank"><img class="social-icon" src="img/facebook.svg" /></a></li>
	          <li><a href="http://www.instagram.com/monicabrowneweddings/" target="_blank"><img class="social-icon" src="img/instagram.svg" /></a></li>
	          <li><a href="http://twitter.com/mbrowneweddings" target="_blank"><img class="social-icon" src="img/twitter.svg" /></a></li>
	          <li><a href="http://www.pinterest.com/mbrowneweddings" target="_blank"><img class="social-icon" src="img/pinterest.svg" /></a></li>
	        </ul>
	      </div>
	    </div>
	  </section>
	</div>

<?php get_footer(); ?>