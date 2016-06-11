<?php get_header(); ?>

			
	<div class="container contentblog" style="padding-top: 120px">
	
		<div class="row">
			<div class="col-md-12  text-center">	
				<h1 class="blogtitle">Der adbites Blog</h1>
				<hr class="post-header-regular">
				<p>Hier publizieren wir unsere Gedanken, Erkenntnisse, HowTo's und Ratschläge, um deine Social Media und Online-Marketing Superpower einen Level 				weiterzubringen und den Austausch zwischen digitalen Menschen zu fördern.</p>
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

					<?php $content = get_the_excerpt(); echo mb_strimwidth($content, 0, 150, '...');?><br>
					<div class"readmore" style="padding-top: 30px"><a href="<?php the_permalink(); ?>" >Weiterlesen... </a></div>
						  <hr>
					</div> <!-- Close postcard -->
					</div> <!-- Close Column -->



				
		
		
		<?php endwhile; ?>
	<?php endif; ?>
		
	<!-- Add the pagination functions here. -->
	
<!-- <div class="col-md-12 pagination">	 -->
<div class="col-md-6" style="padding-top: 80px">
<div class="nav-previous" style="float:left"><?php next_posts_link( 'Ältere Posts' ); ?></div>
</div>
<div class="col-md-6" style="padding-top: 80px">
<div class="nav-next" style="float:right"><?php previous_posts_link( 'Frischere Posts' ); ?></div>

</div>
			
			<?php get_footer(); ?>