<?php get_header(); ?>

<!-- Page Content -->
<div class="maar-content-inner">

<div class="main-body row">
	<div class="row">
		<section class="twelve columns">
			<h1>The Skinny Blog</h1>
		</section>
	</div>
	<div class="row">
		<section class="six columns">
			<?php echo do_shortcode('[subscribe2]'); ?>
		</section>

		<?php blog_pagination(); ?>
	</div>
	<div class="row">
		<div class="four columns push_eight">
			<form class="append field" action="<?php bloginfo('url'); ?>/" method="get">
				<?php
				$select = wp_dropdown_categories('show_option_all=All Posts&class=input wide text alignright&show_count=1&orderby=name&echo=0&exclude=25');
				$select = preg_replace("#<select([^>]*)>#", "<select$1 onchange='return this.form.submit()'>", $select);
				echo $select;
				?>
				<noscript><input type="submit" value="View" /></noscript>
			</form>
		</div>
	</div>

	<div class="row">
		<?php
		$blog_posts = array(
			'post_type' => '',
			'posts_per_page' => 6,
			'post_status' => 'publish',
			'post_type' => 'post',
			'paged' => $paged,
			'pagename' => 'blog'
		);
    	$loop = new WP_Query( $blog_posts );
		$x = 0;

		while ( $loop->have_posts() ) : $loop->the_post(); ?>

		<section class="four columns gen-div blog">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			<div class="gen-div-header">
				<a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5>
				<span><em><?php the_time('F j, Y'); ?></em></span></a>
			</div>
			<div class="gen-div-inner">
				<?php the_excerpt(); // echo the excerpt ?>
			</div>
		</section>
		
	<?php if($x == 2) { $x = -1; echo '</div><div class="row">'; } ?>
    <?php $x++; ?>
	<?php endwhile; ?>

	<div class="row main-body">
		<section class="six columns">
			<?php echo do_shortcode('[subscribe2]'); ?>
		</section>

		<?php blog_pagination(); ?>
	</div>

</div>


<?php get_footer(); ?>