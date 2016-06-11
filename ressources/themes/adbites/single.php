<?php get_header(); ?>

	<div class="navcolchange"></div>	
<!-- Blog Post Content Column -->
<?php the_post(); ?>
<div class="container">
<div class="row">
<div class="col-lg-12"
<?php if ( function_exists('yoast_breadcrumb') ) 
{yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
</div>
</div>
<div class="row" style="padding-top:5%">
             	<div class="col-lg-2">
             		
             	</div>
             	<div class="col-lg-8">
             	<p class="blogcategorysmall text-center"><?php $categories = get_the_category();
if ( ! empty( $categories ) ) {
    echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '" style="color:#ff6600" >' . esc_html( $categories[0]->name ) . '</a>';
}
?>
</p>
             		<h1 class="blogtitle text-center"><?php the_title(); ?></h1>
             		 <p class="lead text-center" style="font-size:0.8rem; color:#a6a6a6; padding-top: 0px">
                    Von adbites am <?php the_date(); ?>
                </p>
             	</div>
             	<div class="col-lg-2">
             		
             	</div>
             </div><!-- .row -->  

</div>
<div class="container blogheadimg">
<div class="row">
             	<div class="col-lg-2">
             		
             	</div>
             	<div class="col-lg-8">
             	<h2 class="bloglead text-center" style="color:#ffffff"><?php echo get_post_meta($post->ID, 'wisdom', true); ?></h2>

             		
             	</div>
             	<div class="col-lg-2">
             		
             	</div>
             </div>   
</div>	
	
		<div class="container">
		<div class="row">
		

               
                <!-- Post Content -->
                      
            <div class="container">
             <div class="row">
             	<div class="col-lg-2">
             		
             	</div>
             	<div class="col-lg-8">
             	

             	<p class="lead" style="padding-top: 30px"><?php echo get_post_meta($post->ID, 'lead', true); ?></p>
             	
             		<p><?php the_content(); ?></p>
             		<hr>
             		             	<p style="font-weight:700">Geschrieben von</p>

             	<div class="col-md-1">
             	<img src="http://dev3.adbites.de/ressources/assets/adbites_boxed-1.svg" alt="adbites_boxed" width="50" height="50" class="alignleft" />
             	</div>
             	<div class="col-md-11 text-left">
			 	<p style="font-weight:700; color: #ff6600; font-family:arial;line-height: 1rem">adbites</p>
			 	<p style="font-size:0.8rem; line-height: 1.2rem">adbites ist eine Digital & Social Media Agentur und hat die Mannschaft verdonnert, hier Blogposts zu schreiben. </p>

             	</div>	

             		
             	</div>
             	<div class="col-lg-2">
             		
             	</div>
             </div><!-- .row -->   
            </div>

                           </div>	
                           <?php comments_template(); ?>



		
<?php get_footer(); ?>