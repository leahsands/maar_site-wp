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
	<?php the_content(); ?>
	</div>
	<?php endwhile; ?>
</div>


<?php get_footer(); ?>