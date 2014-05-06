<?php
/*
Template Name: Newsroom
*/
?>
<?php get_header(); ?>

<!-- Page Content -->
<div class="maar-content-inner">

<div class="main-body row">
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="row">
		<section class="twelve columns">
			<h1><?php the_title(); ?></h1>
		</section>
	</div>
	
	<div class="row newsroom">
		<section class="four columns">
			<div class="gen-div">
				<div class="gen-div-header">
					<h2>Blog</h2>
					<a class="archive" href="<?php echo esc_url( get_permalink( get_page_by_path( 'blog' ) ) ); ?>">| More Posts</a>
				</div>
				<div class="gen-div-inner">
					<?php
					$blog_posts = array(
						'post_type' => '',
						'post_status' => 'publish',
						'post_type' => 'post',
						'paged' => $paged,
						'posts_per_page' => 1, 
					);
			    	$loop = new WP_Query( $blog_posts );

					while ( $loop->have_posts() ) : $loop->the_post(); ?>

					<section class="twelve columns blog">
						<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
						<?php my_excerpt('long'); ?>
					</section>
					<?php endwhile; ?>
				</div>
			</div>
		</section>
		<section class="four columns">
			<div class="gen-div">
				<div class="gen-div-header">
					<h2>Videos</h2>
					<a class="archive" href="<?php echo esc_url( get_permalink( get_page_by_path( 'videos' ) ) ); ?>">| Video Archive</a>
				</div>
				<div class="gen-div-inner">
					<div class="video-newsroom"></div>
						
				</div>
			</div>
		</section>
		<section class="four columns">
			<div class="gen-div">
				<div class="gen-div-header">
					<h2>Newsletter</h2>
					<a class="archive" href="<?php echo esc_url( get_permalink( get_page_by_path( 'newsletter' ) ) ); ?>">| Full List</a>
				</div>

				<div class="gen-div-inner">
					<ul>
						<?php

					    $feature_images = array(
					    	'post_type' => 'newsletter_pdf',
					    	'posts_per_page' => 15  );
					    $loop = new WP_Query( $feature_images );
					    
					    while ( $loop->have_posts() ) : $loop->the_post(); ?>
					            <li>
					              <a href="<?php the_field('newsletter'); ?>" alt="" target="_blank" />
					              	<?php the_title(); ?>
					              </a>
					            </li>

					    <?php endwhile; ?>

					<?php wp_reset_query(); ?>
					</ul>
					<h4>Subscribe</h4>
					<form>
						<ul>
							<li class="append field">
								<input class="wide email input" type="email" placeholder="Your Email">
								<div class="medium primary btn">
									<a href="#">Go</a>
								</div>
								</input>
							</li>
						</ul>
					</form>
				</div>
			</div>
		</section>
	</div>

	<?php endwhile; ?>

	<div class="row">
		<section class="twelve columns">
			<div class="gen-div">
				<div class="gen-div-header">
					<h2>Photos</h2>
					<a class="archive" href="https://www.flickr.com/photos/minneapolisrealtors/" target="_blank">| See More</a>
				</div>
				<div class="gen-div-inner">
					<div class="flexslider newsroom">
						<ul id="flickr_gallery" class="slides"></ul>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>

<script>
	$(window).load(function() {
	  $('.flexslider').flexslider({
	    animation: "slide",
	    animationLoop: true,
	    itemWidth: 200,
	    itemMargin: 0,
	    minItems: 2,
	    maxItems: 6
	  });
	});
 </script>

<?php get_footer(); ?>