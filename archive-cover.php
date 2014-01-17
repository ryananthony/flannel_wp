<?php
/**
 * The template for displaying the 'shows' custom post type.
 *
 * This is the template that displays all shows by default.
 *
 * @package Flannel
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php query_posts(array('post_type'=>'cover')); ?>

      <?php while ( have_posts() ) : the_post(); ?>

        <article class="cover hentry">
         
          <h2><?php echo get_post_meta( get_the_ID(), 'artist', true); ?> &raquo; <?php the_title(); ?></h2>
          <h3>
            <?php 
              $album = get_post_meta( get_the_ID(), 'album', true); 
              if (!empty($album)) { ?>From &ldquo;<?php echo $album;
              }
            ?>&rdquo;<?php 
              $record_year = get_post_meta( get_the_ID(), 'year', true); 
              if (!empty($record_year)) { ?>, Released <?php echo $record_year;
              }
            ?>
          </h3>
          <div class="soundcloud-embed">
            <?php 
              $soundcloud = get_post_meta( get_the_ID(), 'soundcloud', true); 
              if (!empty($soundcloud)) {
                echo $soundcloud;
              }
            ?></div>
            
          <?php the_content(); ?>
      
        </article>


        <?php
          // If comments are open or we have at least one comment, load up the comment template
          if ( comments_open() || '0' != get_comments_number() )
            comments_template();
        ?>

      <?php endwhile; // end of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
