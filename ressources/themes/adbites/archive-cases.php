<?php get_header(); ?>

	<div class="container casecat" data-midnight="black">
	<div class="col-lg-12 text-center">
                <h1 class="caseovertitleani">Ausgewählte Cases</h1>
                <hr class="post-header-regular caseoversep">
            </div>
            <div class="col-lg-2">
            	
            </div>
            <div class="col-lg-8">
            	<p class="text-center caseovertextani" style="padding-bottom:40px">Wir entwickeln Lösungen für digitale Interaktionen. In sozialen Netzwerken und auf Web- und Microsites. Wir sind ganz auf kreatives, innovatives und effektives Digital- und Social Media Marketing spezialisiert. Unsere Kunden meinen, dass wir darin ziemlich gut sind.</p>

            </div>
            <div class="col-lg-2">
            	
            </div>
            
			<div class="container">

			<div class="row" style="padding-bottom: 80px; padding-top: 50px">
						
				<?php
					$args = array( 'post_type' => 'cases', 'posts_per_page' => 30 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
					
						<div class="col-lg-4 col-md-6 col-sm-6 text-center caseoverani">
						
	<?php 

$image = get_field('overview_image');

if( !empty($image) ): ?>

	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><img class="img-responsive" id="antim" data-antimoderate-scale="1" 
 data-antimoderate-idata="data:image/jpg;base64, ..." src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>

<?php endif; ?>
							
<!-- 							<?php the_post_thumbnail('medium'); ?>  -->
								<h2 class="smalltitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<!-- 								<?php $content = get_the_content(); echo mb_strimwidth($content, 0, 80, '...');?> -->
							<!--
<div>
								<a class="btn btn-primary btn-xs mehr" href="<?php the_permalink(); ?>">Mehr lesen</a> 
								
							</div>
-->
						</div>
						
								
				
					<?php endwhile; ?>
			</div>
			</div>
	
	
<?php get_footer(); ?>