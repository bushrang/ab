<?php get_header(); ?>


<div class="container contentblog" style="padding-top: 120px">
		<div class="row">
			<div class="col-md-12 catdescribe text-center">	
				<?php if ( !get_query_var( 'paged' ) ) { ?>
				<h1><?php single_term_title(); ?></h1>
				<?php echo wpautop( term_description() );
					} ?>
			</div> <!-- close catdescribe -->
			
		</div> <!-- close row -->
		
	
	<div class="col-md-12" style="padding-top:40px">
		<?php if ( function_exists('yoast_breadcrumb') ) 
{yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
	</div>
			
			
	<div class="row blogcatcontent" style="padding-top:50px">
									

			<?php if (have_posts()): ?>
		<?php while (have_posts()): the_post(); ?>

			<div class="col-md-8 col-md-offset-2">
				<div class="postcard" style="background-color:#ffffff; padding-top:60px">
					<?php $categories = get_the_category();
if ( ! empty( $categories ) ) {
    echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
}
?>

					<div class="postthumboverview" style="padding-top:10px">
						<?php if ( has_post_thumbnail() ) : ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?>
							</a>
							<?php endif; ?>
					</div> <!-- Close Thumbnail -->

					<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<p class="authorname">Geschrieben von <?php the_author() ?></p>

					<?php $content = get_the_excerpt(); echo mb_strimwidth($content, 0, 350, '...');?>
					<div class="readmoreblog" style="padding-top:20px; font-size: 0.8rem; font-weight:400;"><a href="<?php the_permalink(); ?>" >WEITERLESEN</a></div>
					<hr>
 
					</div> <!-- Close postcard -->
	
				</div>
										
<!-- Close Column --> 

<?php endwhile; ?>
		
	<?php endif; ?>
				
		
		
	</div>
		
	<!-- Add the pagination functions here. -->
	
<div class="col-md-12 pagination">	

<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

</div>
			
			<?php get_footer(); ?>


