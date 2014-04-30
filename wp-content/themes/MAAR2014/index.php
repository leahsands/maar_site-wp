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
			<ul>
				<li class="append field">
					<input class="wide email input" type="email" placeholder="Email input" />
					<div class="medium default btn"><a href="#">Subscribe</a></div>
				</li>
			</ul>
		</section>

		<?php blog_pagination(); ?>
	</div>

	<div class="row">
		<?php
		$blog_posts = array(
			'post_type' => '',
			'post_status' => 'publish',
			'post_type' => 'post',
			'paged' => $paged 
		);
    	$loop = new WP_Query( $blog_posts );
		$x = 0;

		while ( $loop->have_posts() ) : $loop->the_post(); ?>

		<section class="four columns gen-div blog">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			<div class="gen-div-header">
				<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
			</div>
			<div class="gen-div-inner">
				<p><?php the_excerpt(); // echo the excerpt ?></p>
			</div>
		</section>
		
	<?php if($x == 2) { $x = -1; echo '</div><div class="row">'; } ?>
    <?php $x++; ?>
	<?php endwhile; ?>

	<div class="row main-body">
		<section class="six columns">
			<ul>
				<li class="append field">
					<input class="wide email input" type="email" placeholder="Email input" />
					<div class="medium default btn"><a href="#">Subscribe</a></div>
				</li>
			</ul>
		</section>

		<?php blog_pagination(); ?>
	</div>

</div>


<?php get_footer(); ?>