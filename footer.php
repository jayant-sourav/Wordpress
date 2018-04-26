
<a href="<?php echo get_settings('home'); ?>" class="foot-sleep-study-specialists" title="<?php bloginfo('name'); ?>"><img src="<?php echo get_field('footer_logo','option'); ?>" alt="<?php bloginfo('name'); ?>"></a>


<p><a href="tel:<?php echo get_field('footer_number','option'); ?>" class="link"><?php echo get_field('footer_number','option'); ?></a></p>


<p><a href="mailto:<?php echo get_field('footer_mail','option'); ?>" class="link"><?php echo get_field('footer_mail','option'); ?></a></p>

<div class="foot-right-div">

  <ul><li><?php wp_nav_menu(array( 'theme_location' =>'footer-menu1' ) ); ?></li></ul>
  <ul><li><?php wp_nav_menu(array( 'theme_location' =>'footer-menu-2' ) ); ?></li></ul>

</div>

<ul class="social-media">

  <li><a href="<?php echo get_field('facebook_link','option'); ?>" target="_blank"><i class="fa">&#xf09a;</i></a></li>
  <li><a href="<?php echo get_field('linkedin_link','option'); ?>" target="_blank"><i class="fa">&#xf0e1;</i></a></li>
</ul>



</footer>
</div><!-- #wrapper -->

//It is used to show edit page option in all pages WP-ADMIN

<?php wp_footer() ?>
<script>
var $ = jQuery.noConflict();
</script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>
<!-- #footer -->
</body>
</html>
