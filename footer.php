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
  <div id="dynamic-sidebar" class="alpha omega sidebar_container_8">
    <div class="dynamic-sidebar-content grid_8">
      <p>test</p>
      <p>test</p>
      <p>test</p>
      <p>test</p>
      <p>test</p>
      <p>test</p>
      <p>test</p>
      <p>test</p>
    </div>
  </div>
</body>
</html>