<?php
/**
 * This is the homepage.
 * Based off index.php...
 *
 * @package Flannel
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <div class="front-page-slider">
        <ul>
            <li class="slide slide-first">
              <h1>We play 90's Songs</h1>
              <h2>And we really do like rocking flannel...</h2>
              
              
            </li>
            <li class="slide">
              <h1>At the Buff...</h1>
              <div class="slide-comment">
                <p>With Stay-Tuned's halloween-esque fog machine making the vernue look like rush hour in Beijing.</p>
              </div>
              
            </li>
              <li class="slide slide-last">
                <h1>And the Shakedown</h1>
                <div class="slide-comment">
                  <p>Mixin' things up with some Ben Folds Five and a dash 
                    <br>of the Real Slim Shady.</p>
                </div>
                
              </li>
        </ul>
      </div>

    <?php if ( have_posts() ) : ?>

      <?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <?php
          /* Include the Post-Format-specific template for the content.
           * If you want to override this in a child theme, then include a file
           * called content-___.php (where ___ is the Post Format name) and that will be used instead.
           */
          get_template_part( 'content', get_post_format() );
        ?>

      <?php endwhile; ?>

      <?php flannel_content_nav( 'nav-below' ); ?>

    <?php else : ?>

      <?php get_template_part( 'content', 'none' ); ?>

    <?php endif; ?>

    </main><!-- #main -->
  </div><!-- #primary -->

  <script type="text/javascript" src=" <?php echo home_url(); ?>/wp-content/themes/flannel_wp/js/vendor/unslider.min.js"></script>
  <script type="text/javascript">

    $('.front-page-slider').unslider({
      speed: 1000,               //  The speed to animate each slide (in milliseconds)
      delay: 5000,              //  The delay between slide animations (in milliseconds)
      complete: function() {},  //  A function that gets called after every slide animation
      keys: true,               //  Enable keyboard (left, right) arrow shortcuts
      dots: true,               //  Display dot navigation
      fluid: false              //  Support responsive design. May break non-responsive designs
    });

  </script>

<?php get_footer(); ?>
