<?php
   if( have_rows('overview') ):
    $i=0;
   while( have_rows('overview') ): the_row();
   $evenOddClass = ($i%2) ? 'even' : 'odd';
  ?>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
  <div class="box <?php echo $evenOddClass; ?>">
   <!--<img src="<?php echo get_sub_field('image'); ?>" alt="<?php echo get_sub_field('title'); ?>" />-->

   <h1><span><?php echo get_sub_field('title'); ?></span></h1>
   <p><?php echo get_sub_field('description'); ?></p>
            <?php if((get_sub_field('image1') !='') AND (get_sub_field('image2') !=''))
   {
   ?>
   <div class="inner-img">
   <img src="<?php echo get_sub_field('image1'); ?>" alt="<?php echo get_sub_field('title'); ?>" class="img-responsive" />
            <?php echo get_sub_field('image1_title'); ?>

   <img src="<?php echo get_sub_field('image2'); ?>" alt="<?php echo get_sub_field('title'); ?>" class="img-responsive"/>
            <?php echo get_sub_field('image2_title'); ?>

   </div>
          <?php } ?>

   <a href="<?php echo get_sub_field('button_link'); ?>" class="button"><?php echo get_sub_field('button_text'); ?></a>
            </div>
            </div>

<?php
  endwhile;
  $i++;
  endif;
 ?>
