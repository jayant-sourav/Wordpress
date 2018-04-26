
<?php
/*
Template Name: Our Services Page
*/
get_header();
the_post();
?>

			<div class="our-service-banner">
			<h1><?php echo get_field('header_title'); ?></h1>
            </div>
		<div class="container">
       
	<?php
	    if( have_rows('service') ):
	?>
		
		
		<?php 
				$i = 0;
				while( have_rows('service') ): the_row();
				if($i%2 == 0){
		?>
		
		
	
    
    			 <div class="row service">
                 	<div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    	<div class="service-detail">
  						<h1><?php echo get_sub_field('title'); ?></h1>
	            		<?php echo get_sub_field('discription'); ?>
                        </div>
               		 </div>
                	<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12">	
 							<img src="<?php echo get_sub_field('image'); ?>" alt="<?php echo get_sub_field('title'); ?>" class="img-responsive" />
                     </div>
                   </div>
                     
                     
                     <?php
						} 
					else
						 {
						?>
                     
                   <div class="row service second">
                     <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    		<img src="<?php echo get_sub_field('image'); ?>" alt="<?php echo get_sub_field('title'); ?>" class="img-responsive" />
               		 </div>
                	<div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-xs-12">	
 						<div class="service-detail ourserv">
  						<h1><?php echo get_sub_field('title'); ?></h1>
	            		<?php echo get_sub_field('discription'); ?>
                        </div>
                     </div>
                    </div>
                  
			<?php
			}
			$i++;
			endwhile;
			 ?>
       <?php endif;
	      ?>
          
          </div>
			<div class="container">
				<?php
						if( have_rows('work') ):
						while( have_rows('work') ): the_row();
				?>
                			<div class="gallery-box">
								<img src="<?php echo get_sub_field('image'); ?>" alt="<?php echo get_sub_field('work'); ?>" class="img-responsive" />
								<p><b><?php echo get_sub_field('title'); ?></b></p>
							</div>
				<?php
					endwhile;
						endif;
							?>
           </div>

<?php get_footer() ?>
