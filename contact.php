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
            <h3 class="gold-font">(416) 777-9727</h3>
          </div>

          <div class="margin-top-20">
            <h4>Contact Form</h4>
          </div>

          <?php echo do_shortcode(' [contact-form-7 id="4" title="Contact form 1" ]'); ?>

        </div>


        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!--          GOOGLE MAP            -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

        <div class="map-container col-xs-12 col-md-6">

          <div>
            <h4 class="color-accent-white">Or visit us in person:</h4>
            <h4 class="gold-font">25 The Esplanade, Toronto, ON M5E 1W5</h4>
          </div>

          <div id="google-map">

          </div>

        </div>

      </div>

    </section>
  </div>





<?php get_footer(); ?>
