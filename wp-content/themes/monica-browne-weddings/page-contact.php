<?php
/*
		Template Name: Contact
*/
?>

<?php get_header(); ?>

<section class="page-banner">
  <div class="container">
    <h1 class="page-title">Contact</h1>
  </div>
</section>

<div class="wrap">
  <section class="contact group">
    <figure class="contact-img" >
      <img src="img/model-back.jpg" />
    </figure>
    
    <form class="contact-form" action="/my-handling-form-page" method="post">
      <section class="email">
        <address>
          <h2>Phone</h2>
          <p><a href="tel:+12404810658">(240) 481-0658</a></p>
          <h2>Email</h2>
          <p><a href="mailto:monica@monicabrowneweddings.com">Monica@monicabrowneweddings.com</a></p>
        </address>
      </section>
      <h2>Hire me</h2>
      <div>
        <input type="text" id="name" placeholder="Enter your name" />
      </div>
      <div>
        <input type="email" id="mail" placeholder="Enter your email" />
      </div>
      <div>
        <textarea id="msg"  placeholder="Write your questions and leave messages here"></textarea>
      </div>
      <button type="submit">Send</button>
    </form>
  </section>
</div>


<?php get_footer(); ?>