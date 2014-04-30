<?php
/*
Template Name: Video
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
	
	<div class="row">
		<div class="nine columns">
			<div class="row">
				<h2>Recent Videos</h2>
				<div class="row">
					<div class="video-videopage"></div>
				</div>
				<div class="row">
					<div class="video-videopage-2"></div>
				</div>
			</div>
		</div>
		<div class="three columns">
			<h2>Archive</h2>
			<section class="gen-div">
				<div class="gen-div-inner">
					<ul class="video-videopage-archive">
					</ul>
					<a href="https://www.youtube.com/user/MinneapolisREALTORS/videos" target="_blank"><h4>View All</h4></a>
				</div>
			</section>
		</div>

	</div>
	<?php endwhile; ?>
</div>


<?php get_footer(); ?>