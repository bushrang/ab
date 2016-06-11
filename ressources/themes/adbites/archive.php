<?php get_header(); ?>
			
	<div class="container content" style="margin-top: 60px">
	
	
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<?php if ( !get_query_var( 'paged' ) ) {
  echo wpautop( term_description() );
}
?>

				</div>
				<div class="col-md-2"></div>

			</div>



		<?php if (have_posts()): ?>
		<?php while (have_posts()): the_post(); ?>
		
			<div class="row blogcatcontent">
				<div class="col-md-2"></div>
				<div class="col-md-8" style="padding-bottom:5%">
				<?php $categories = get_the_category();
if ( ! empty( $categories ) ) {
    echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
}
?>
					<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<p class="authorname">Geschrieben von <?php the_author() ?></p>

					<?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>" >Weiterlesen... </a>
						  <hr class="wow fadeInUp" data-wow-offset="250" data-wow-duration="2s">

				</div>
				<div class="col-md-2"></div>

			</div>
		
		<?php endwhile; ?>
	<?php endif; ?>
			
			
	<!-- Add the pagination functions here. -->

<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
			
			<?php get_footer(); ?>