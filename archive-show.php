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

      <?php query_posts(array('post_type'=>'show')); ?>

      <?php while ( have_posts() ) : the_post(); ?>

        <article class="show hentry">
          <div class="post-date">
            <?php 
              $post_date_string = get_post_meta( get_the_ID(), 'date', true);
              $post_year = substr($post_date_string, 0, 4);
              $post_month = substr($post_date_string, 5, 2);
              $post_day = substr($post_date_string, 6, 2);

              switch ($post_month) {
                case '01':
                  $post_month = 'JAN';
                  break;
                case '02':
                  $post_month = 'FEB';
                  break;
                case '03':
                  $post_month = 'MAR';
                  break;
                case '04':
                  $post_month = 'APR';
                  break;
                case '05':
                  $post_month = 'MAY';
                  break;
                case '06':
                  $post_month = 'JUN';
                  break;
                case '07':
                  $post_month = 'JUL';
                  break;
                case '08':
                  $post_month = 'AUG';
                  break;
                case '09':
                  $post_month = 'SEP';
                  break;
                case '10':
                  $post_month = 'OCT';
                  break;
                case '11':
                  $post_month = 'NOV';
                  break;
                case '12':
                  $post_month = 'DEC';
                  break;
              }

            ?>
            <p class="post-year"><?php echo $post_year; ?></p>
            <p class="post-month"><?php echo $post_month; ?></p>
            <p class="post-day"><?php echo $post_day; ?></p>
          </div>
          
          <h2><?php the_title(); ?></h2>
          <p><strong>
            <?php echo get_post_meta( get_the_ID(), 'time', true); ?> 
            At the <?php echo get_post_meta( get_the_ID(), 'venue', true); ?>
            <?php 
              $guests = get_post_meta( get_the_ID(), 'guests', true); 
              if (!empty($guests)) { ?>
                With <?php echo $guests; 
              } 
            ?></strong></p>
            
          <?php the_content(); ?>
          
          
          <li style="margin-left: 12px;"><a href="<?php echo get_post_meta( get_the_ID(), 'fb_link', true); ?>">Click here to RSVP.</a></li>

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
