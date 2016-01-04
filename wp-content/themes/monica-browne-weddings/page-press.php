<?php
/*
		Template Name: Press
*/
?>

<?php get_header(); ?>

<section class="page-banner">
  <div class="container">
    <h1 class="page-title">Press</h1>
  </div>
</section>

<div class="wrap">
  <section class="press-stuff group">
    <div class="press-content">
      <h2 class="press-title">Getting  noticed</h2>
      <p>We are proud to be represented in these amazing media outlets.</p> 
    </div>
    <a class="contact-btn" href="contact.html" >
      <img class="press-arrow-back" src="<?php bloginfo( 'template_url'); ?>/img/back-of-arrow.svg" />
      <p><span class="script-font">Contact <span class="down-case">us</span></p>
      <img class="press-arrow-front" src="<?php bloginfo( 'template_url'); ?>/img/arrow-front.svg" />
    </a>
  </section>

  <section class="big-blocks group">
    <div class="container">
      <div class="box-1 press"></div>
      <div class="box-2 press"></div>
      <div class="box-3 press"></div>
      <div class="box-4 press"></div>
      <div class="box-5 press"></div>
      <div class="box-6 press"></div>
    </div>
  </section>
</div>

<?php get_footer(); ?>