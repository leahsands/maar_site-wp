<?php
 /*Template Name: Newsletter Archive
 */
 
get_header(); ?>
<div class="maar-content-inner">

<div class="main-body row">
    <div class="row">
        <section class="twelve columns">
            <h1><?php the_title(); ?></h1>
        </section>
    </div>
    <div class="row">
    	<div class="four columns push_eight">
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
    	<div class="eight columns pull_four">
		<ul>
			<?php

		    $feature_images = array(
		    	'post_type' => 'newsletter_html',
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
		</div>
	</div>
</div>

<?php get_footer(); ?>