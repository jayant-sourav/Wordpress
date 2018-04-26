<?php
/*
Template Name: Home Page
*/
get_header();
the_post();
?>
<div class="banner-img">
<div class="container">
<div class="button-logo">
<h1><?php echo get_field('header_title'); ?></h1>

<span><a href="<?php echo get_field('header_button_link'); ?>"><?php echo get_field('header_button_name'); ?><i class="fa arrow">&#xf061;</i></a></span>
</div>
</div>
</div>


<div class="container section-1">
<div class="row">

<?php
		 if( have_rows('overview') ):
		  $i=0;
		 while( have_rows('overview') ): the_row();
		 $evenOddClass	= ($i%2) ? 'even' : 'odd';
		?>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<div class="box <?php echo $evenOddClass; ?>" uk-scrollspy="cls:uk-animation-fade;repeat: true;">
			<!--<img src="<?php echo get_sub_field('image'); ?>" alt="<?php echo get_sub_field('title'); ?>" />-->

			<h1><span><?php echo get_sub_field('title'); ?></span></h1>
			<?php echo get_sub_field('description'); ?>

            <?php if((get_sub_field('image1') !='') AND (get_sub_field('image2') !=''))
			{
			?>
			<div class="inner-img">
            <div class="img-1 uk-overflow-hidden">
			<img src="<?php echo get_sub_field('image1'); ?>" alt="<?php echo get_sub_field('title'); ?>" class="img-responsive" uk-scrollspy="cls: uk-animation-kenburns; repeat: true" />
            <p><?php echo get_sub_field('image1_title'); ?></p></div>
			<div class="img-2 uk-overflow-hidden">
			<img src="<?php echo get_sub_field('image2'); ?>" alt="<?php echo get_sub_field('title'); ?>" class="img-responsive" uk-scrollspy="cls: uk-animation-kenburns; repeat: true" />
            <p><?php echo get_sub_field('image2_title'); ?></p>
            </div>

			</div>
          <?php } ?>

			<span><a href="<?php echo get_sub_field('button_link'); ?>" class="button"><?php echo get_sub_field('button_text'); ?><i class="fa fa-angle-right" aria-hidden="true"></i></a></span>
            </div>
            </div>

<?php
		$i++;
		endwhile;

		endif;
	?>
</div>
</div>

	<?php
		//Cutom Post Type Loop
		$args = array( 'post_type' => 'project', 'posts_per_page' => 7 );
			$loop = new WP_Query( $args );
			$i=0;
			$imgs	= array();
			$addr	= array();
			$titl	= array();

			while ( $loop->have_posts() ) : $loop->the_post();
				$i++;
				$imgs[$i]	= get_field('image');
				$addr[$i]	= get_field('address');
				$titl[$i]	= get_the_title();
			endwhile;
	?>

	<?php wp_reset_postdata(); //End Cutom Post Type Loop ?>


 <div class="section-project">
    <div class="container">

    	<h1><span>RECENT</span> PROJECT</h1>

<div class="row masonry-grid">
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 masonry-column">
    <div class="one" class="uk-child-width-1-2@m uk-grid-match">
      <img src="<?php echo $imgs[7]; ?>" class="img-responsive" uk-scrollspy="cls: uk-animation-slide-left-medium; repeat: true">
      <p class="uk-card-title"><?php echo $addr[7]; ?></p>
    </div>
    <div class="two" class="uk-child-width-1-2@m uk-grid-match">
    	<div class="second-box" uk-scrollspy="cls: uk-animation-slide-top-medium; repeat: true">
    	<p class="uk-card-title"> Piling Works for 1 X 660 MW Power Plant in Cilacap,
<b>Indonesia</b></p>
        </div>

    </div>
    <div class="three" class="uk-child-width-1-2@m uk-grid-match">
    <img src="<?php echo $imgs[6]; ?>" class="img-responsive" uk-scrollspy="cls: uk-animation-slide-right-medium; repeat: true">
    <p class="uk-card-title"><?php echo $addr[6]; ?></p>
    </div>
  <!--</div>-->
  <!--<div class="col-lg-12 col-md-12 masonry-column">-->
    <div class="four" class="uk-child-width-1-2@m uk-grid-match">
    	<div class="for-box" uk-scrollspy="cls: uk-animation-slide-left-medium; repeat: true">
    	<p class="uk-card-title">Piling Works for CONCH Jetty, <br />Manokwari,<br />
<b>Indonesia</b></p>
        </div>
    </div>

    <div class="five" class="uk-child-width-1-2@m uk-grid-match"uk-scrollspy="cls: uk-animation-scale-up; repeat: true">
    <img src="<?php echo $imgs[5]; ?>" class="img-responsive" >
    	<p class="uk-card-title"><?php echo $addr[5]; ?></p>
    </div>

    <div class="six" class="uk-child-width-1-2@m uk-grid-match">
    <img src="<?php echo $imgs[4]; ?>" class="img-responsive" uk-scrollspy="cls: uk-animation-slide-right-medium; repeat: true">
    <p class="uk-card-title"><?php echo $addr[4]; ?></p>
    </div>


     <div class="seven" class="uk-child-width-1-2@m uk-grid-match">
    <img src="<?php echo $imgs[3]; ?>" class="img-responsive" uk-scrollspy="cls: uk-animation-slide-left-medium; repeat: true">
    <p class="uk-card-title"><?php echo $addr[3]; ?></p>
    </div>

 <!-- </div>-->
  <!--<div class="col-lg-12 col-md-12 masonry-column">-->

    <div class="eight">
    <img src="<?php echo $imgs[2]; ?>" class="img-responsive" uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: true">
    	<p class="uk-card-title"><?php echo $addr[2]; ?></p>
    </div>

    <div class="nine" class="uk-child-width-1-2@m uk-grid-match">
    <img src="<?php echo $imgs[1]; ?>" class="img-responsive" uk-scrollspy="cls: uk-animation-slide-right-medium; repeat: true">
    <p class="uk-card-title"><?php echo $addr[1]; ?></p>
    </div>
  </div>
   </div>
   <div class="pro-btn">
   <a href="<?php echo get_field('button_link'); ?>" class="button"><?php echo get_field('button_text'); ?><i class="fa arrow">&#xf061;</i></a>
   </div>
</div>

 </div>

    <div class="section4" uk-parallax="bgy: -200">
		<div class="container">
    			<div class="row">

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    	<div class="contact odd" uk-scrollspy="cls:uk-animation-fade;repeat: true;">
                    <h1><span><?php echo get_field('office_title'); ?></span></h1>

					<div class="map"  id="map">
					</div>
                    <div class="contact-detail">

				<ul class="list-1">

					<li><span><i class="fa fa-map-marker" aria-hidden="true"></i></span> <small><b><?php echo get_field('company_name'); ?></b><br /> <?php echo get_field('company_address'); ?></small></li>
					<li><span><i class="fa fa-volume-control-phone" aria-hidden="true"></i></span><small><?php echo get_field('phone1'); ?></small></li>
					<li><span><i class="fa fa-volume-control-phone" aria-hidden="true"></i></span><small><?php echo get_field('phone2'); ?></small></li>
					<li><span><i class="fa fa-print" aria-hidden="true"></i></span><small><?php echo get_field('fax'); ?></small></li>
					<li><span><i class="fa fa-envelope-o" aria-hidden="true"></i></span><small><?php echo get_field('email'); ?></small></li>

				</ul>

				<ul class="list-2">
					<li class="set"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span><small><b><?php echo get_field('company_name2'); ?></b></small></li>
					<li><span><i class="fa fa-volume-control-phone" aria-hidden="true"></i></span><small><?php echo get_field('phone3'); ?></small></li>
					<li><span><i class="fa fa-volume-control-phone" aria-hidden="true"></i></span><small><?php echo get_field('phone4'); ?></small></li>
					<li><span><i class="fa fa-print" aria-hidden="true"></i></span><small><small><?php echo get_field('fax2'); ?></small></li>
					<li><span><i class="fa fa-envelope-o" aria-hidden="true"></i></span><small> <?php echo get_field('email2'); ?></small></li>
				</ul>

</div>
                    </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="contact even" uk-scrollspy="cls:uk-animation-fade;repeat: true;">
                    <h1><span><?php echo get_field('facebook_title'); ?></span></h1>
       <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FSynex-Technology-2005170826415681%2F%3Fmodal%3Dadmin_todo_tour&tabs=timeline&width=627&height=457px&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="627" height="457px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                   </div>
                   </div>

				</div>
             </div>
        </div>

<?php get_footer() ?>
<script>
       var map;
       function initMap() {
         map = new google.maps.Map(document.getElementById('map'), {
           center: {lat:1.3058958, lng:103.7301223},
           zoom: 13,
         });

    // This part generates the marker of location.

         var marker = new google.maps.Marker({
 		     position: {lat:1.3058958, lng:103.7301223},
 		      map: map
 		        });
 		      }
 		    </script>
 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDG8EIblJLh15iNr1DoeaLZTiPw8HVdpAw&callback=initMap"></script>
