<?php get_header(); ?>

<div class="blog-container group">
  <section class="main-content">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <article>
        <img class="blog-title-img" src="<?php bloginfo( 'template_url'); ?>/img/blog-ring.svg" >

        <h1 class="blog-title"><?php the_title(); ?></h1>
        <p class="date"><?php the_date(); ?> | <?php the_author(); ?> | Comments</p>

        <section class="article-content">
  	      <p><?php the_content(); ?></p>
  			</section>

        <div class="share-links">
          Share: 
          <ul class="blog-social-links">
            <li>
              <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share on Facebook."><img class="social-icon" src="<?php bloginfo( 'template_url'); ?>/img/facebook.svg" />
              </a>
            </li>
            <li>
              <a href="http://www.instagram.com/monicabrowneweddings/" target="_blank"><img class="social-icon" src="<?php bloginfo( 'template_url'); ?>/img/instagram.svg" />
              </a>
            </li>
            <li>
              <a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Tweet this!"><img class="social-icon" src="<?php bloginfo( 'template_url'); ?>/img/twitter.svg" />
              </a>
            </li>
            <li>
              <a href="http://www.pinterest.com/mbrowneweddings" target="_blank"><img class="social-icon" src="<?php bloginfo( 'template_url'); ?>/img/pinterest.svg" />
              </a>
            </li>
          </ul>
        </div>
    </article>

    <?php endwhile; else : ?>

      <p><?php _e( 'Sorry, no pages found.'); ?></p>

    <?php endif; ?>
  </section>

  <aside>
    <section class="newsletter-form">
      <img src="<?php bloginfo( 'template_url'); ?>/img/newsletter-bg.svg" />
      <div class="signup-form">
        <input type="text" name="name" placeholder="First Name" />
        <input type="email" name="email" placeholder="Email Address" />
      </div>
    </section> 

    <section class="social group">
      <span class="icon-twitter"></span>
      <a class="twitter-timeline" href="https://twitter.com/mbrowneweddings" 
        data-widget-id="666286978103689217"
        data-chrome="noheader nofooter noborders noscrollbar transparent"
        data-tweet-limit="1"
        data-aria-polite="assertive"> 
      </a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
      </script>
    </section>

    <section class="archives">
      <h2>Archives</h2>
    </section>

    <section class="categories">
      <h2>Categories</h2>
    </section>

    <section class="press-section">
      <h2>As Seen on</h2>
    </section>
  </aside>
</div>

<?php get_footer(); ?>