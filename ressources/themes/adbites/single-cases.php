<?php get_header(); ?>
	<div class="navcolchange"></div>	
<!-- Large Case Header -->
<?php the_post(); ?>
<div class="container">
<div class="row">
             	<div class="col-lg-2">
             		
             	</div>
             	<div class="col-lg-8">
             	</div>
             	<div class="col-lg-2">
             		
             	</div>
             </div><!-- .row -->  

</div>
<div class="container-fluid caseheadimg">
<div class="row">
             	<div class="col-lg-2">
             		
             	</div>
             	<div class="col-lg-8">
					<div class="smallclientlogo casetitleani text-center">
				 <?php 

$image = get_field('small_clientlogo');

if( !empty($image) ): ?>

	<img src="<?php echo $image['url']; ?>" width="160" height="72" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
					</div>
			 	<h1 class="casetitle text-center casetitleani" style="color:#ffffff"><?php the_title(); ?></h1>
             		<p class="caseleadani text-center" style="color:#ffffff; font-size:22px"><?php the_field('case_subheadline'); ?></p>
             	</div>
             	<div class="col-lg-2">
             		
             	</div>
             </div>  
<div class="row projectattributes">

			<div class="col-md-2 hidden-sm">
			</div>
			<div class="col-md-2 col-sm-3 col-xs-4 projectattr1 projani">
			<p style="color:#ffffff;font-weight:700;">Kunde</p>
			 	<p style="color:#ffffff; font-size:11px"><?php the_field('kunde-projecattr'); ?></p>
			</div>
			<div class="col-md-2 col-sm-3 col-xs-4 projectattr2 projani">
			<p style="color:#ffffff;font-weight:700;">Vertical</p>
             	<p style="color:#ffffff; font-size:11px"><?php the_field('vertical-projecattr'); ?></p>
			</div>
			<div class="col-md-2 col-sm-3 col-xs-4 projectattr3 projani">
			<p style="color:#ffffff;font-weight:700;">Keyservices</p>
             	<p style="color:#ffffff; font-size:11px"><?php the_field('keyservices-projecattr'); ?></p>
			</div>
			<div class="col-md-2 col-sm-3 hidden-xs projectattr4 projani">
			<p style="color:#ffffff;font-weight:700;">Playground</p>
             	<p style="color:#ffffff; font-size:11px"><?php the_field('zielfelder-projectattr'); ?></p>
			</div>
			<div class="col-md-2 hidden-sm">
			</div>
 
</div>
</div>

<!-- The Challenge -->
<div class="container challenge">

<div class="col-lg-2">
	
</div>
<div class="col-lg-8 text-center" style="padding-top:30px">
	<h2 class="challengetitle wow fadeInUp" data-wow-offset="250" data-wow-duration="2s">Die Challenge</h2>
	<hr class="post-header-regular caseoversep">

	<p class="wow fadeInUp" data-wow-offset="250" data-wow-duration="2s"><?php the_field('challenge'); ?></p>
</div>
<div class="col-lg-2">
	
</div>


</div>
<!-- Get Challenge-Image from database -->

<div class="row text-center">
	 <?php 

$image = get_field('challengebild1');

if( !empty($image) ): ?>

	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
<!-- Challenge-Image End -->
</div>

<!-- Our approach -->

<div class="container-fluid caseapproach" style="background-image: url('<?php the_field('ansatz_background'); ?>');">
	<div class="container">
 <div class="row">
 <div class="col-lg-6">
 	<h2 class="wow fadeInUp" data-wow-offset="250" data-wow-duration="2s" style="color:#fff">Unser Ansatz</h2>
 	  <hr class="post-header-regularwt wow fadeInUp" data-wow-offset="250" data-wow-duration="2s" style="margin: 0 0 17px;">
 	<p class="wow fadeInUp" data-wow-offset="250" data-wow-duration="2s"><?php the_field('ansatz'); ?></p>
 </div>
  <div class="col-lg-6">
	  <?php 

$image = get_field('ansatzbild_rechts');

if( !empty($image) ): ?>

	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
  </div>
 </div>
 </div>
</div>
 
 <!-- End approach -->
 
 <!-- Services -->
 
 
 <div class="container caseservices">

	 <div class="row">
	 	<div class="col-lg-12 text-center">
	 	      <div class="wrap">  
	 		<h2 class="wow fadeInUp" id="serviceani" data-wow-offset="250" data-wow-duration="2s">Unsere Leistungen für <?php the_field('kunde-projecattr'); ?></h2>
	 		<hr class="post-header-regular wow fadeInUp" data-wow-offset="250" data-wow-duration="2s">
	 	</div>
	 <div class="row">
	 		<div class="col-lg-4 wow fadeInUp" data-wow-offset="250" data-wow-duration="2s">
	 			<p><?php the_field('leistung_1'); ?></p>
	 		</div>
	 		<div class="col-lg-4 wow fadeInUp" data-wow-offset="250" data-wow-duration="2s">
	 			<p><?php the_field('leistung_2'); ?></p>
	 		</div>
	 		<div class="col-lg-4 wow fadeInUp" data-wow-offset="250" data-wow-duration="2s">
	 			<p><?php the_field('leistung_3'); ?></p>
	 		</div>
	 </div>
	 </div>
</div>	

 </div>
<!-- End Services -->

<!-- Additional Block -->

<div class="container-fluid caseadditional" style="background-image: url('<?php the_field('additional_background'); ?>');">
	<div class="container">
 <div class="row">
 <div class="col-lg-6">
 <div class="caseaddblock_image">
 	 <?php 

$image = get_field('additionalbild_links');

if( !empty($image) ): ?>

	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
 </div>
 </div>
  <div class="col-lg-6">
 	<p class="wow fadeInUp" style="color:#000; padding-top:10%" data-wow-offset="250" data-wow-duration="2s"><?php the_field('additional'); ?></p>
	
  </div>
 </div>
 </div>
</div> 

 <!-- End additional Block -->



 <div class="container caseservices">

	 <div class="row">
	 	<div class="col-lg-12 text-center">
	 	      <div class="wrap">  
	 		<!-- <h2 class="wow fadeInUp" id="serviceani" data-wow-offset="250" data-wow-duration="2s">Facebook Posts zur Kampagne</h2> -->
	 		<!-- <hr class="post-header-regular wow fadeInUp" data-wow-offset="250" data-wow-duration="2s"> -->
	 	</div>
	 <div class="row">
	 		<div class="col-lg-4 wow fadeInUp" data-wow-offset="250" data-wow-duration="2s">
	 			<p><?php the_field('fb_embed_1'); ?></p>
	 		</div>
	 		<div class="col-lg-4 wow fadeInUp" data-wow-offset="250" data-wow-duration="2s">
	 			<p><?php the_field('fb_embed_2'); ?></p>
	 		</div>
	 		<div class="col-lg-4 wow fadeInUp" data-wow-offset="250" data-wow-duration="2s">
	 			<p><?php the_field('fb_embed_3'); ?></p>
	 		</div>
	 </div>
	 </div>
</div>	









 
<div class="spacer"></div>
		
<?php get_footer(); ?>