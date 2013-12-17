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

    	<footer id="colophon" class="site-footer" role="contentinfo">
          <div class="social-footer">
            <div class="site-info">
              <?php do_action( 'flannel_credits' ); ?>
              <a href="http://wordpress.org/" rel="generator"><?php printf( __( 'Proudly...? &nbsp;Powered by %s', 'flannel' ), 'WordPress' ); ?></a>
              <br>
              <?php printf( __( '%1$s Theme by %2$s built on <a href="https://github.com/Automattic/_s/">underscores (_s)</a>.', 'flannel' ), 'Flannel', '<a href="http://www.ryananthonyrichardson.com/" rel="designer">Ryan Richardson</a>' ); ?>
            </div><!-- .site-info -->
          </div>
    	</footer><!-- #colophon -->
    </div><!-- #page -->

    <?php wp_footer(); ?>
  </div>
  <div id="dynamic-sidebar">

    <aside id="search" class="widget widget_search">
      <?php get_search_form(); ?>
    </aside>

    <nav class="sidebar-social">
      <ul>
           <li><a href="https://www.facebook.com/rockingflannel"><img src="<?php echo home_url(); ?>/wp-content/themes/flannel_wp/images/rog.ie/facebook-a.png" alt=""></a></li><!--
        --><li><a href="https://twitter.com/rockingflannel"><img src="<?php echo home_url(); ?>/wp-content/themes/flannel_wp/images/rog.ie/twitter-a.png" alt=""></a></li><!--
        --><li><a href="https://soundcloud.com/rockingflannel"><img src="<?php echo home_url(); ?>/wp-content/themes/flannel_wp/images/rog.ie/soundcloud-a.png" alt=""></a></li><!--
        --><li><a href="http://www.youtube.com/rockingflannel"><img src="<?php echo home_url(); ?>/wp-content/themes/flannel_wp/images/rog.ie/youtube-a.png" alt=""></a></li><!--
           TODO: This feed URL wasn't working in dev. Disabling until we figure it out.
        --><li style="display:none;"><a href="<?php bloginfo('rss2_url'); ?>"><img src="wp-content/themes/flannel_wp/images/rog.ie/feed-a.png" alt=""></a></li><!--
    --></ul>
    </nav>
    <div class="dynamic-sidebar-content">

    <!-- <div class="soundcloud-widget">-->
    <!--   <iframe width="100%" height="450" scrolling="no" frameborder="no" -->
    <!--   src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/4308875&amp;color=31809F&amp;auto_play=false&amp;show_artwork=false">-->
    <!--   </iframe>-->
    <!-- </div>-->

      <?php get_sidebar(); ?>

      <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/rockingflannel"  data-widget-id="412469260397449217">Tweets by @rockingflannel</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    
    </div>
  </div>
  <script type="text/javascript" src=" <?php echo home_url(); ?>/wp-vote/client.js"> </script>
</body>
</html>