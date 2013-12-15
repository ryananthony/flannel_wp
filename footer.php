<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Flannel
 */
?>

    	 </div><!-- #content -->

    	<footer id="colophon" class="alpha grid_24 omega l site-footer" role="contentinfo">
    		<div class="site-info">
    			<?php do_action( 'flannel_credits' ); ?>
    			<a href="http://wordpress.org/" rel="generator"><?php printf( __( 'Proudly powered by %s', 'flannel' ), 'WordPress' ); ?></a>
    			<span class="sep"> | </span>
    			<?php printf( __( 'Theme: %1$s by %2$s.', 'flannel' ), 'Flannel', '<a href="http://ryananthonyrichardson.com/" rel="designer">Ryan Anthony Richardson</a>' ); ?>
    		</div><!-- .site-info -->
    	</footer><!-- #colophon -->
    </div><!-- #page -->

    <?php wp_footer(); ?>
  </div>
  <div id="dynamic-sidebar">
    <nav class="sidebar-social">
      <ul>
           <li><img src="wp-content/themes/flannel_wp/images/rog.ie/facebook-a.png" alt=""></li><!--
        --><li><img src="wp-content/themes/flannel_wp/images/rog.ie/twitter-a.png" alt=""></li><!--
        --><li><img src="wp-content/themes/flannel_wp/images/rog.ie/soundcloud-a.png" alt=""></li><!--
        --><li><img src="wp-content/themes/flannel_wp/images/rog.ie/youtube-a.png" alt=""></li><!--
        --><li><img src="wp-content/themes/flannel_wp/images/rog.ie/feed-a.png" alt=""></li><!--
    --></ul>
    </nav>
    <div class="dynamic-sidebar-content">

      <?php get_sidebar(); ?>

      <div class="soundcloud-widget">
        <iframe width="100%" height="450" scrolling="no" frameborder="no" 
        src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/4308875&amp;color=31809F&amp;auto_play=false&amp;show_artwork=false">
        </iframe>
      </div>
    
    </div>
  </div>
</body>
</html>