<?php
/*
Template Name: Market Data
*/
?>
<?php get_header(); ?>

<!-- Page Content -->
<div class="maar-content-inner">

<div class="main-body row mrkt-data">
<?php while ( have_posts() ) : the_post(); ?>
<div class="row">
	<section class="twelve columns">
		<h1><?php the_title(); ?></h1>
	</section>
	<section class="sixteen colgrid">
		<div class="row">
			<section class="ttip four columns" data-tooltip="Interactive analytics for local housing." alt="">
				<p>Infosparks</p>
				<div class="market-icon large infosparks-icon"></div>
			</section>
			<section class="ttip four columns" data-tooltip="Deep dive into cities and neighborhoods." alt="">
				<p>Local Market Updates</p>
				<div class="market-icon large lmu-icon"></div>
			</section>
			<section class="ttip four columns" data-tooltip="An overview of key trends for the region." alt="">
				<p>Monthly Indicators</p>
				<div class="market-icon large mmi-icon"></div>
			</section>
			<section class="ttip four columns" data-tooltip="Segmentation by price, property type." alt="">
				<p>Housing Supply</p>
				<div class="market-icon large hso-icon"></div>
			</section>
		</div>
		<div class="row">
			<section class="ttip four columns" data-tooltip="An important segment spelled out." alt="">
				<p>Foreclosure Report</p>
				<div class="market-icon large fss-icon"></div>
			</section>
			<section class="ttip four columns" data-tooltip="Replaced by Infosparks soon!" alt="">
				<p>The Thing</p>
				<div class="market-icon large infosparks-icon"></div>
			</section>
			<section class="ttip four columns" data-tooltip="Full year of activity at a glance." alt="">
				<p>Annual Reports</p>
				<div class="market-icon large ann-icon"></div>
			</section>
			<section class="ttip four columns" data-tooltip="Stay on top of trends every week." alt="">
				<p>Weekly Activity</p>
				<div class="market-icon large wma-icon"></div>
			</section>
		</div>
	</section>
</div>

<?php endwhile; ?>
<?php get_footer(); ?>