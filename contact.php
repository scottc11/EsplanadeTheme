<?php
/*
Template Name: Contact Page
*/
?>

<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact.css">


  <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
  <!--          HEADER                -->
  <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

  <div class="contact-bg box-shadow">

    <section class="container padding-top-bottom-40">

      <div class="row">

        <div class="contact-heading col-xs-12">
          <div class="underlined-header-container">
            <h1 class="margin-none margin-top-20 color-accent-white">Contact Us</h1>
            <hr class="underline-hr">
          </div>
        </div>

      </div>

      <div class="row">
        <div class="contact-container col-xs-12 col-md-6">

          <div class="margin-top-20">
            <h4>Give us a call at:</h4>
            <h3><a href="tel:416-777-9727" class="gold-font">416-777-9727</a></h3>
          </div>

          <div class="margin-top-20">
            <h4>Contact Form</h4>
          </div>

          <?php echo do_shortcode(' [contact-form-7 id="8" title="Contact form 1" ]'); ?>

        </div>


        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!--          GOOGLE MAP            -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

        <div class="map-container col-xs-12 col-md-6">

          <div>
            <h4 class="color-accent-white">Or visit us in person:</h4>
            <h4><a class="gold-font" href="http://maps.apple.com/?q=43.646234,-79.375499">25 The Esplanade, Toronto, ON M5E 1W5</a></h4>
          </div>

          <div id="google-map">

          </div>

        </div>

      </div>

    </section>
  </div>





<?php get_footer(); ?>
