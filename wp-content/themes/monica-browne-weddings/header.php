<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php wp_title(); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?> >
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Add your site or application content here -->
    <div class="wrap">
      <header class="group">
        <div class="header-container">
          <div class="header group">
            <a href="<?php bloginfo('url'); ?>" ><img id="logo" src="<?php bloginfo( 'template_url'); ?>/img/logo-1.svg" alt="Logo for Monica Browne Wedding" /></a>
            <div class="newsletter-form">
              <img src="<?php bloginfo( 'template_url'); ?>/img/newsletter-bg.svg" />
              <div class="signup-form">
                <input type="text" name="name" placeholder="First Name" />
                <input type="email" name="email" placeholder="Email Address" />
              </div>
            </div>
          </div>
          <div class="menu">
            <p class="menu-btn">Menu</p>
          </div>
          <nav>
            <?php
              $defaults = array(
                'container' => false,
                'theme_location' => 'primary-menu',
                'menu_class' => 'navigation'
              );

              wp_nav_menu( $defaults );

              ?>
          </nav>
            <ul class="icon-menu">
              <li><a href="http://facebook.com/monicabrowneweddings" target="_blank"><img class="nav-social-icon" src="<?php bloginfo( 'template_url'); ?>/img/facebook.svg" /></a></li>
              <li><a href="http://www.instagram.com/monicabrowneweddings/" target="_blank"><img class="nav-social-icon" src="<?php bloginfo( 'template_url'); ?>/img/instagram.svg" /></a></li>
              <li><a href="http://twitter.com/mbrowneweddings" target="_blank"><img class="nav-social-icon" src="<?php bloginfo( 'template_url'); ?>/img/twitter.svg" /></a></li>
              <li><a href="http://www.pinterest.com/mbrowneweddings" target="_blank"><img class="nav-social-icon" src="<?php bloginfo( 'template_url'); ?>/img/pinterest.svg" /></a></li>
            </ul>
          </ul>
        </div>
      </header>
    </div>