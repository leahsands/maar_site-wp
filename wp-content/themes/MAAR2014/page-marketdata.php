<?php
/*
Template Name: Market Data
*/
?>
<?php get_header(); ?>

<!-- Page Content -->
<div class="maar-content-inner">

<div class="main-body row mrkt-data inner-mrkt">
<?php while ( have_posts() ) : the_post(); ?>
<div class="row">
	<section class="twelve columns">
		<h1><?php the_title(); ?></h1>
	</section>
	<section class="twelve columns">
		<div class="row">
			<section class="ttip two columns" data-tooltip="Interactive analytics for local housing." alt="">
				<p>Infosparks</p>
				<div class="market-icon large infosparks-icon"></div>
				<div class="row">
					<a href="http://northstarmls.stats.10kresearch.com/l/interactive" target="_blank">
					<div class="infosparks-mem six columns" >
						<p>Member</p>
					</div>
					</a>
					<a href="/infosparks-landing.html" target="_blank">
					<div class="infosparks-nonmem six columns">
						<p>Public</p>
					</div>
					</a>
				</div>
			</section>
			<a href="http://maar.stats.10kresearch.com/reports/lmu" target="_blank">
			<section class="ttip two columns" data-tooltip="Deep dive into cities and neighborhoods." alt="">
				<p>Local Market Updates</p>
				<div class="market-icon large lmu-icon"></div>
			</section>
			</a>
			<a href="http://maar.stats.10kresearch.com/reports/mmi" target="_blank">
			<section class="ttip two columns" data-tooltip="An overview of key trends for the region." alt="">
				<p>Monthly Indicators</p>
				<div class="market-icon large mmi-icon"></div>
			</section>
			</a>
			<a href="http://maar.stats.10kresearch.com/reports/hso" target="_blank">
			<section class="ttip two columns" data-tooltip="Segmentation by price, property type." alt="">
				<p>Housing Supply</p>
				<div class="market-icon large hso-icon"></div>
			</section>
			</a>
			<a href="http://maar.stats.10kresearch.com/reports/fss" target="_blank">
			<section class="ttip two columns" data-tooltip="An important segment spelled out." alt="">
				<p>Foreclosure Report</p>
				<div class="market-icon large fss-icon"></div>
			</section>
			</a>
			<a href="http://www.mplsrealtor.com/videos/">
			<section class="ttip two columns" data-tooltip="A smart, bite-sized video of your local market." alt="">
				<p>The Skinny</p>
				<div class="market-icon large skinny-icon"></div>
			</section>
			</a>
		</div>
	</section>
</div>
</div>
<div class="row main-body">
	<section class="twelve columns">
		<div class="row">
			<div class="four columns">
				<h4 id="lmu-archive">Local Market Updates</h4>
				<a href="http://maar.stats.10kresearch.com/reports" target="_blank"><h6>View Recent Reports in Faststats</h6></a>
				<div class="row">
				<p>

				<?php

				$ind_year = range(2013, 2007);
				rsort($ind_year);

				foreach ($ind_year as $year ) {

				$reports = array(
					'post_type' => 'report_html',
					'meta_query' => array(
			    		'relation' => 'AND',
			    		array ( 'key' => 'report_type',
			    				'value' => 'lmu'
			    		),
			    		array ( 'key' => 'year_of_report',
			    				'value' => $year
			    		)
			    	),
					'posts_per_page' => -1,
					'post_status' => 'publish'
				);
		    	$loop = new WP_Query( $reports );
				$x = 0; ?>

				<h6><?php echo $year ?> Reports</h6>

				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<a href="../wp-content/files/lmu/<?php echo $year; ?>-<?php the_field('month_of_report'); ?>.html"><?php the_title(); ?></a>&nbsp;|&nbsp;

				<?php if($x == 4) { $x = -1; echo '<br />'; } ?>
			    <?php $x++; ?>
			    <?php endwhile;?>

				</p>
				<?php }; ?>
				    
				</div>
			</div>
			<div class="four columns" id="ann-archive">
				<h4 id="ann-archive">Annual Reports</h4>
				<div class="row">
					<?php

					$ind_year = range(date('Y'), 2000);
					rsort($ind_year);

					foreach ($ind_year as $year ) {

					$category = array(
					   'meta_query' => array(
					       array(
					           'key' => 'year_of_report',
					           'value' => $year
					       )
					   )
					);

					if ( $category == true ) { 

				    $reports = array(
				    	'post_type' => 'report_html',
				    	'meta_query' => array(
				    		'relation' => 'AND',
				    		array ( 'key' => 'report_type',
				    				'value' => 'ann'
				    		),
				    		array ( 'key' => 'year_of_report',
				    				'value' => $year
				    		)
				    	),
				    	'posts_per_page' => -1
				    	);
				    $loop = new WP_Query( $reports );
				    $x = 0;

				    while ( $loop->have_posts() ) : $loop->the_post(); ?>
				        <a href="http://maar.stats.10kresearch.com/docs/ann/<?php echo $year; ?>/report/" alt="" target="_blank" /><?php the_title(); ?></a><br />

				    <?php endwhile; ?>
					<?php }; }; ?>
				</div>
			</div>
			<div class="four columns" id="wma-archive">
				<h4 id="wma-archive">Weekly Reports</h4>
				<div class="row">

				<?php

				$ind_year = range(date('Y'), 2009);
				rsort($ind_year);

				foreach ($ind_year as $year ) {

				$category = array(
				   'meta_query' => array(
				       array(
				           'key' => 'year_of_report',
				           'value' => $year
				       )
				   )
				);

				if ( $category == true ) { ?>
				<h6><?php echo $year ?>, Week of:</h6>
				<p>
					<?php

				    $reports = array( 'post_type' => 'report_html',
				    	'meta_query' => array(
				    		'relation' => 'AND',
				    		array ( 'key' => 'report_type',
				    				'value' => 'wma'
				    		),
				    		array ( 'key' => 'year_of_report',
				    				'value' => $year
				    		)
				    	),
				    	'posts_per_page' => -1
				    );
				    $loop = new WP_Query( $reports );
				    $x = 0;

				    while ( $loop->have_posts() ) : $loop->the_post(); ?>
				        <a href="http://maar.stats.10kresearch.com/docs/wma/<?php echo $year; ?>-<?php the_field('month_of_report'); ?>-<?php the_field('day_of_report'); ?>/report/" alt="" target="_blank" /><?php the_title(); ?></a>&nbsp;|&nbsp;

				    <?php if($x == 3) { $x = -1; echo '<br />'; } ?>
				    <?php $x++; ?>
					<?php endwhile; ?>
				</p>
				<?php } } ?>
				</div>
			</div> 
		</div>
	</section>
</div>

<?php endwhile; ?>
<?php get_footer(); ?>