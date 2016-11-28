<?php
/*
Template Name: Basic Template for New Page
*/
?>




<?php get_header(); ?>

<main role="main">

  <section class="container">



    <article class="margin-top-bottom">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


        <!-- PLACE ALL CONTENT HERE ... -->

        <div class="row">

          <div class="col-xs-12">
            <h1><?php the_title(); ?></h1>
          </div>



          <div class="col-xs-12">

            <?php the_content(); ?>

          </div>

        </div>




      <!-- ENDING THE LOOP -->
      <?php endwhile; else: ?>
        <p>
          <?php _e( "The Page you're looking for could not be found." ); ?>
        </p>

      <?php endif; ?>

    </article>


  </section>

</main>


<?php get_footer(); ?>
