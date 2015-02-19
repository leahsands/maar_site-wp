<?php get_header(); ?>

<!-- Page Content -->
<div class="maar-content-inner" id="top-page">

<div class="main-body row">
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="row">
		<section class="twelve columns">
			<h1><?php the_title(); ?></h1>
		</section>
	</div>
	<div class="row">
		<div class="ten columns">
			<?php the_content(); ?>
		</div>
	</div>
	<?php endwhile; ?>
</div>


<?php get_footer(); ?>