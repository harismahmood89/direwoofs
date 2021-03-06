<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <div class="main">
      <div class="section section--titleSection">
        <div class="container">
          <h2><?php the_title(); ?></h2>
        </div> <!-- /.container -->
      </div>

      <div class="section section--content">
        <div class="container">
          <?php the_content(); ?>
        </div>
      </div>
    </div> <!-- /.main -->


    <?php endwhile; // end the loop?>

<?php get_footer(); ?>
