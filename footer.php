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
      </div>

      <!-- End Main Content -->

      <div class="alpha grid_4 omega l">
        <p>this is the sidebar of the "L". Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
          Suscipit, rem quibusdam sapiente obcaecati unde quod sed tempore nam perspiciatis veritatis 
          laudantium quis eos non labore ullam aliquid ipsum cupiditate repellendus culpa consequatur 
          incidunt. Ex, laboriosam sit ab nostrum eaque assumenda excepturi quisquam illum eum 
          molestias. Expedita, rerum, voluptas dolore praesentium recusandae officia quidem fugit 
          veniam hic assumenda corrupti eum qui minus minima eos deserunt quaerat aspernatur modi 
          incidunt consectetur. A, aspernatur, vitae, sunt deserunt dolor aperiam animi perferendis 
          modi libero ducimus dignissimos necessitatibus quasi quia tenetur accusamus excepturi 
          molestias nam. Sed, sit nulla voluptatum nobis quasi rem magni odit dolorum</p>
      </div>



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
</body>
</html>