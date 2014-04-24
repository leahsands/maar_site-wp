<?php
/*
Template Name: Team
*/
?>
<?php get_header(); ?>

<!-- Page Content -->
<div class="maar-content-inner">

<div class="main-body row">
	<?php
		$args = array(
			'post_type' => 'product',
			'tax_query' => array(
				array(
					'taxonomy' => 'product_category',
					'field' => 'slug',
					'terms' => 'boardgames'
				)
			)
		);
		$products = new WP_Query( $args );
		if( $products->have_posts() ) {
			while( $products->have_posts() ) {
				$products->the_post();
				?>
					<h1><?php the_title() ?></h1>
					<div class='content'>
						<?php the_content() ?>
					</div>
				<?php
			}
		}
		else {
			echo 'Oh ohm no products!';
		}
	?>
</div>


<?php get_footer(); ?>