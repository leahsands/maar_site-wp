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
			<section class="ttip four columns" data-tooltip="The real estate market expert's best friend. Interactive, mobile friendly, widget ready and fresh daily" alt="">
				<p>Infosparks</p>
				<div class="market-icon large infosparks-icon"></div>
			</section>
			<section class="ttip four columns" data-tooltip="Get local" alt="">
				<p>Local Market Updates</p>
				<div class="market-icon large lmu-icon"></div>
			</section>
			<section class="ttip four columns" data-tooltip="See the big picture" alt="">
				<p>Monthly Indicators</p>
				<div class="market-icon large mmi-icon"></div>
			</section>
			<section class="ttip four columns" data-tooltip="Trends behind trends" alt="">
				<p>Housing Supply</p>
				<div class="market-icon large hso-icon"></div>
			</section>
		</div>
		<div class="row">
			<section class="ttip four columns" data-tooltip="An important segment spelled out" alt="">
				<p>Foreclosure Report</p>
				<div class="market-icon large fss-icon"></div>
			</section>
			<section class="ttip four columns" data-tooltip="A smart, informative and fast breakdown of your local housing market" alt="">
				<p>The Skinny</p>
				<div class="market-icon large skinny-icon"></div>
			</section>
			<section class="ttip four columns" data-tooltip="Your full year at a glance" alt="">
				<p>Annual Reports</p>
				<div class="market-icon large ann-icon"></div>
			</section>
			<section class="ttip four columns" data-tooltip="Trend-spotting faster" alt="">
				<p>Weekly Activity</p>
				<div class="market-icon large wma-icon"></div>
			</section>
		</div>
	</section>
</div>

<?php endwhile; ?>
<?php get_footer(); ?>