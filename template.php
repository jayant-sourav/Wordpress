

<?php
/*
Template Name: Home Page
*/
get_header('home');
the_post();
?>


<?php the_title(); ?>

<?php the_content(); ?>


// Display Field
<?php echo get_field('detail'); ?>

//Display Image
<img src="<?php echo get_field('box_1_img'); ?>" alt="<?php the_title(); ?>"/>

//Buttom Link and Text
<a href="<?php echo get_field('contact_link'); ?>" class="button"><?php echo get_field('contact_link_text'); ?></a>

//Viedo Play
<div class="playback-div"><iframe width="100%" height="auto" src="<?php echo get_field('video_box'); ?>" frameborder="0" allowfullscreen></iframe></div>

// Contact Form Display
  <?php echo do_shortcode('[contact-form-7 id="96" title="Contact form 1"]'); ?>


</section>

<?php get_footer() ?>
