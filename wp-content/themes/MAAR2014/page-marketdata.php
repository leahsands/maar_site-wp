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
	<section class="twelve columns">
		<div class="row">
			<section class="sixteen colgrid">
				<div class="row">
					<a href="http://northstarmls.stats.10kresearch.com/" target="_blank">
					<section class="ttip four columns" data-tooltip="Interactive analytics for local housing." alt="">
						<p>Infosparks</p>
						<div class="market-icon large infosparks-icon"></div>
						<div class="row">
							<a href="http://maar-infosparks.stats.10kresearch.com/" target="_blank">
							<div class="infosparks-nonmem eight columns">
								<p style="margin: 20px auto 0 auto;">Public</p>
							</div>
							</a>
							<a href="http://northstarmls.stats.10kresearch.com/" target="_blank">
							<div class="infosparks-mem eight columns">
								<p style="margin: 20px auto 0 auto;">Member</p>
							</div>
							</a>
						</div>
					</section>
					</a>
					<a href="http://maar.stats.10kresearch.com/reports/lmu" target="_blank">
					<section class="ttip four columns" data-tooltip="Deep dive into cities and neighborhoods." alt="">
						<p>Local Market Updates</p>
						<div class="market-icon large lmu-icon"></div>
					</section>
					</a>
					<a href="http://maar.stats.10kresearch.com/reports/mmi" target="_blank">
					<section class="ttip four columns" data-tooltip="An overview of key trends for the region." alt="">
						<p>Monthly Indicators</p>
						<div class="market-icon large mmi-icon"></div>
					</section>
					</a>
					<a href="http://maar.stats.10kresearch.com/reports/hso" target="_blank">
					<section class="ttip four columns" data-tooltip="Segmentation by price, property type." alt="">
						<p>Housing Supply</p>
						<div class="market-icon large hso-icon"></div>
					</section>
					</a>
				</div>
				<div class="row">
					<a href="http://maar.stats.10kresearch.com/reports/fss" target="_blank">
					<section class="ttip four columns" data-tooltip="An important segment spelled out." alt="">
						<p>Foreclosure Report</p>
						<div class="market-icon large fss-icon"></div>
					</section>
					</a>
					<a href="http://thething.mplsrealtor.com/" target="_blank">
					<section class="ttip four columns" data-tooltip="Replaced by Infosparks soon!" alt="">
						<p>The Thing</p>
						<div class="market-icon large infosparks-icon"></div>
					</section>
					</a>
					<a href="http://maar.stgstats.10kresearch.com/docs/ann/list" target="_blank">
					<section class="ttip four columns" data-tooltip="Full year of activity at a glance." alt="">
						<p>Annual Reports</p>
						<div class="market-icon large ann-icon"></div>
					</section>
					</a>
					<a href="http://maar.stgstats.10kresearch.com/docs/wma/list" target="_blank">
					<section class="ttip four columns" data-tooltip="Stay on top of trends every week." alt="">
						<p>Weekly Activity</p>
						<div class="market-icon large wma-icon"></div>
					</section>
					</a>
				</div>
			</section>
		</div>
	</section>
</div>
</div>
<div class="row main-body">
	<section class="twelve columns">
		<div class="row">
			<div class="four columns">
				<h4>LMU Archive</h4>
				<h6>Through January 2014</h6>
				<div class="row">
					<?php

				    $reports = array( 'post_type' => 'report_html', 'meta_value' => 'lmu' );
				    $loop = new WP_Query( $reports );
				    $x = 0;
				    
				    while ( $loop->have_posts() ) : $loop->the_post(); ?>
				        <p><a href="<?php the_field('report_upload'); ?>" alt="" /><?php the_title(); ?></a></p>

				    <?php endwhile; ?>
				</div>
			</div>
			<div class="four columns" id="ann-archive">
				<h4>Annual Reports Archive</h4>
				<div class="row">
					<?php

				    $reports = array( 'post_type' => 'report_html', 'meta_value' => 'ann' );
				    $loop = new WP_Query( $reports );
				    $x = 0;
				    
				    while ( $loop->have_posts() ) : $loop->the_post(); ?>
				        <p><a href="<?php the_field('report_upload'); ?>" alt="" /><?php the_title(); ?></a></p>

				    <?php endwhile; ?>
				</div>
			</div>
			<div class="four columns" id="wma-archive">
				<h4>Weekly Activity Archive</h4>
				<div class="row">
					<?php

				    $reports = array( 'post_type' => 'report_html', 'meta_value' => 'wma' );
				    $loop = new WP_Query( $reports );
				    $x = 0;
				    
				    while ( $loop->have_posts() ) : $loop->the_post(); ?>
				        <p><a href="<?php the_field('report_upload'); ?>" alt="" /><?php the_title(); ?></a></p>

				    <?php endwhile; ?>
				</div>
			</div>
		</div>
	</section>
</div>

<?php endwhile; ?>
<?php get_footer(); ?>