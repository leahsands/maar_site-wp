<?php get_header(); ?>
<div class="maar-content-inner">
<div class="main-body row">
	<div class="row">
		<section class="twelve columns">
			<h1><?php the_title(); ?></h1>
		</section>
	</div>

	<div class="row">
		<section class="twelve columns lead">
			<div class="nine columns">
				<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'blog' ) ) ); ?>"><h4><i class="icon-left-open"></i> Go back to blog home </h4></a>
			</div>
			<div class="three columns">
				<div class="medium default btn alignright">
					<?php next_post_link('%link', 'Next', TRUE); ?>
				</div>
				<div class="medium default btn alignright">
					<?php previous_post_link('%link', 'Previous', TRUE); ?>
				</div>
			</div>
		</section>
	</div>

	<div class="row">
		<?php while ( have_posts() ) : the_post(); ?>
			<section class="nine columns blog">		
				<?php the_content(); ?>

				<section class="row">
					<h4 class="btn default">
						<a href="#" class="toggle" gumby-trigger="#comments">Comments <i class="icon-down-open-big"></i></a>
					</h4>
				</section>
				<section class="row">
					<div class="drawer" id="comments" style="height: auto;">
						<div class="gen-div">
							<?php comments_template(); ?>
						</div>
					</div>
				</section>
			</section>

			<section class="three columns">
				<div class="gen-div">
					<div class="gen-div-header">
						<h4>Subscribe</h4>
					</div>
					<div class="gen-div-inner">
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

				<div class="gen-div">
					<div class="gen-div-header">
						<h4>Recent Posts</h4>
					</div>
					<div class="gen-div-inner">
						<ul>
							<?php wp_get_archives( array( 'type' => 'postbypost', 'limit' => 10 ) ); ?>
						</ul>
					</div>
				</div>
			</section>

		<?php endwhile; ?>

	</div>
</div>

<?php get_footer(); ?>