<?php

      // ( repeater)
      if( have_rows('video') ): ?>
                           <div class=" et_pb_row et_pb_row_5 about-gallery">
       <?php
       $i=1;
       // loop through rows (sub repeater)
       while( have_rows('video') ): the_row();
        if($i%3 == 0){
         $rClass = 'mr0';
        } else {
         $rClass = '';
        }
                                  ?>


   <div class="et_pb_column et_pb_column_1_3 bordered-bottom <?php echo $rClass; ?>">

   <div class="et_pb_code et_pb_module et_pb_code_3">
   <h3><?php echo get_sub_field('video_title'); ?></h3><br>
                <a class="venobox venobox-block vbox-item" data-overlay="rgba(0,0,0,0.8)" data-type="youtube" href="http://www.youtu.be/<?php echo get_sub_field('video_url'); ?>">
                <img src="http://img.youtube.com/vi/<?php echo get_sub_field('video_url'); ?>/0.jpg" alt="..."><i class="fa fa-play-circle fa-fw"></i></a>

  </div> <!-- .et_pb_code -->
  </div> <!-- .et_pb_column -->




       <?php
       $i++;
       endwhile; ?>
                                  </div> <!-- .et_pb_row -->
      <?php endif; //if( get_sub_field('items') ): ?>
