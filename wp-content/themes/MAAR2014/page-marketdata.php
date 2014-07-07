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
					<a href="http://northstarmls.stats.10kresearch.com/" target="_blank">
					<div class="infosparks-mem twelve columns" >
						<p>Member</p>
					</div>
					</a>
					<!-- <a href="http://maar-infosparks.stgstats.10kresearch.com/" target="_blank">
					<div class="infosparks-nonmem six columns">
						<p>Public</p>
					</div>
					</a> -->
				</div>
			</section>
			<a href="http://maar.stats.10kresearch.com/reports" target="_blank">
			<section class="ttip two columns" data-tooltip="Deep dive into cities and neighborhoods." alt="">
				<p>Local Market Updates</p>
				<div class="market-icon large lmu-icon"></div>
			</section>
			</a>
			<a href="http://maar.stats.10kresearch.com/reports" target="_blank">
			<section class="ttip two columns" data-tooltip="An overview of key trends for the region." alt="">
				<p>Monthly Indicators</p>
				<div class="market-icon large mmi-icon"></div>
			</section>
			</a>
			<a href="http://maar.stats.10kresearch.com/reports" target="_blank">
			<section class="ttip two columns" data-tooltip="Segmentation by price, property type." alt="">
				<p>Housing Supply</p>
				<div class="market-icon large hso-icon"></div>
			</section>
			</a>
			<a href="http://maar.stats.10kresearch.com/reports" target="_blank">
			<section class="ttip two columns" data-tooltip="An important segment spelled out." alt="">
				<p>Foreclosure Report</p>
				<div class="market-icon large fss-icon"></div>
			</section>
			</a>
			<a href="http://thething.mplsrealtor.com/" target="_blank">
			<section class="ttip two columns" data-tooltip="Replaced by Infosparks soon!" alt="">
				<p>The Thing</p>
				<div class="market-icon large infosparks-icon"></div>
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
					$reports = array(
						'post_type' => 'report_html',
						'meta_query' => array(
				    		'relation' => 'AND',
				    		array ( 'key' => 'report_type',
				    				'value' => 'lmu'
				    		),
				    		array ( 'key' => 'year_of_report',
				    				'value' => '2013'
				    		)
				    	),
						'posts_per_page' => -1,
						'post_status' => 'publish'
					);
			    	$loop = new WP_Query( $reports );
					$x = 0; ?>

					<h6>2013 Reports</h6>

					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<a href="<?php bloginfo('template_url'); ?>/lmu/<?php the_field('year_of_report'); ?>-<?php the_field('month_of_report'); ?>.html"><?php the_title(); ?></a>&nbsp;|&nbsp;

					<?php if($x == 4) { $x = -1; echo '<br />'; } ?>
				    <?php $x++; ?>
				    <?php endwhile; ?>
				    <?php wp_reset_query(); ?>

				    </p>
				    <p>

				    <?php
					$reports = array(
						'post_type' => 'report_html',
						'meta_query' => array(
				    		'relation' => 'AND',
				    		array ( 'key' => 'report_type',
				    				'value' => 'lmu'
				    		),
				    		array ( 'key' => 'year_of_report',
				    				'value' => '2012'
				    		)
				    	),
						'posts_per_page' => -1,
						'post_status' => 'publish'
					);
			    	$loop = new WP_Query( $reports );
					$x = 0; ?>

				    <h6>2012 Reports</h6>

				    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				    	<a href="<?php bloginfo('template_url'); ?>/lmu/<?php the_field('year_of_report'); ?>-<?php the_field('month_of_report'); ?>.html"><?php the_title(); ?></a>&nbsp;|&nbsp;

				    <?php if($x == 4) { $x = -1; echo '<br />'; } ?>
				    <?php $x++; ?>
				    <?php endwhile;  ?>
					<?php wp_reset_query(); ?>

					</p>
					<p>

					<?php
					$reports = array(
						'post_type' => 'report_html',
						'meta_query' => array(
				    		'relation' => 'AND',
				    		array ( 'key' => 'report_type',
				    				'value' => 'lmu'
				    		),
				    		array ( 'key' => 'year_of_report',
				    				'value' => '2011'
				    		)
				    	),
						'posts_per_page' => -1,
						'post_status' => 'publish'
					);
			    	$loop = new WP_Query( $reports );
					$x = 0; ?>

				    <h6>2011 Reports</h6>

				    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				    	<a href="<?php bloginfo('template_url'); ?>/lmu/<?php the_field('year_of_report'); ?>-<?php the_field('month_of_report'); ?>.html"><?php the_title(); ?></a>&nbsp;|&nbsp;

				    <?php if($x == 4) { $x = -1; echo '<br />'; } ?>
				    <?php $x++; ?>
				    <?php endwhile;  ?>
					<?php wp_reset_query(); ?>

					</p>
					<p>

					 <?php
					$reports = array(
						'post_type' => 'report_html',
						'meta_query' => array(
				    		'relation' => 'AND',
				    		array ( 'key' => 'report_type',
				    				'value' => 'lmu'
				    		),
				    		array ( 'key' => 'year_of_report',
				    				'value' => '2010'
				    		)
				    	),
						'posts_per_page' => -1,
						'post_status' => 'publish'
					);
			    	$loop = new WP_Query( $reports );
					$x = 0; ?>

				    <h6>2010 Reports</h6>

				    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				    	<a href="<?php bloginfo('template_url'); ?>/lmu/<?php the_field('year_of_report'); ?>-<?php the_field('month_of_report'); ?>.html"><?php the_title(); ?></a>&nbsp;|&nbsp;

				    <?php if($x == 4) { $x = -1; echo '<br />'; } ?>
				    <?php $x++; ?>
				    <?php endwhile;  ?>
					<?php wp_reset_query(); ?>

					</p>
					<p>

					 <?php
					$reports = array(
						'post_type' => 'report_html',
						'meta_query' => array(
				    		'relation' => 'AND',
				    		array ( 'key' => 'report_type',
				    				'value' => 'lmu'
				    		),
				    		array ( 'key' => 'year_of_report',
				    				'value' => '2009'
				    		)
				    	),
						'posts_per_page' => -1,
						'post_status' => 'publish'
					);
			    	$loop = new WP_Query( $reports );
					$x = 0; ?>

				    <h6>2009 Reports</h6>

				    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				    	<a href="<?php bloginfo('template_url'); ?>/lmu/<?php the_field('year_of_report'); ?>-<?php the_field('month_of_report'); ?>.html"><?php the_title(); ?></a>&nbsp;|&nbsp;

				    <?php if($x == 4) { $x = -1; echo '<br />'; } ?>
				    <?php $x++; ?>
				    <?php endwhile;  ?>
					<?php wp_reset_query(); ?>

					</p>
					<p>

					 <?php
					$reports = array(
						'post_type' => 'report_html',
						'meta_query' => array(
				    		'relation' => 'AND',
				    		array ( 'key' => 'report_type',
				    				'value' => 'lmu'
				    		),
				    		array ( 'key' => 'year_of_report',
				    				'value' => '2008'
				    		)
				    	),
						'posts_per_page' => -1,
						'post_status' => 'publish'
					);
			    	$loop = new WP_Query( $reports );
					$x = 0; ?>

				    <h6>2008 Reports</h6>

				    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				    	<a href="<?php bloginfo('template_url'); ?>/lmu/<?php the_field('year_of_report'); ?>-<?php the_field('month_of_report'); ?>.html"><?php the_title(); ?></a>&nbsp;|&nbsp;

				    <?php if($x == 4) { $x = -1; echo '<br />'; } ?>
				    <?php $x++; ?>
				    <?php endwhile;  ?>
					<?php wp_reset_query(); ?>

					</p>
					<p>

					 <?php
					$reports = array(
						'post_type' => 'report_html',
						'meta_query' => array(
				    		'relation' => 'AND',
				    		array ( 'key' => 'report_type',
				    				'value' => 'lmu'
				    		),
				    		array ( 'key' => 'year_of_report',
				    				'value' => '2007'
				    		)
				    	),
						'posts_per_page' => -1,
						'post_status' => 'publish'
					);
			    	$loop = new WP_Query( $reports );
					$x = 0; ?>

				    <h6>2007 Reports</h6>

				    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				    	<a href="<?php bloginfo('template_url'); ?>/lmu/<?php the_field('year_of_report'); ?>-<?php the_field('month_of_report'); ?>.html"><?php the_title(); ?></a>&nbsp;|&nbsp;

				    <?php if($x == 4) { $x = -1; echo '<br />'; } ?>
				    <?php $x++; ?>
				    <?php endwhile;  ?>
					<?php wp_reset_query(); ?>


					</p>
				</div>
			</div>
			<div class="four columns" id="ann-archive">
				<h4 id="ann-archive">Annual Reports</h4>
				<div class="row">
				<p>
					<?php

				    $reports = array( 'post_type' => 'report_html', 'meta_value' => 'ann' );
				    $loop = new WP_Query( $reports );
				    $x = 0;
				    
				    while ( $loop->have_posts() ) : $loop->the_post(); ?>
				        <a href="<?php the_field('report_upload'); ?>" alt="" target="_blank" /><?php the_title(); ?></a><br />

				    <?php endwhile; ?>
				</p>
				</div>
			</div>
			<div class="four columns" id="wma-archive">
				<h4 id="wma-archive">Weekly Reports</h4>
				<div class="row">
				<?php if ( get_post_meta($post->ID, '2022', true) ) : ?>
				<h6>2022, Week of:</h6>
				<p>
					<?php

				    $reports = array( 'post_type' => 'report_html',
				    	'meta_query' => array(
				    		'relation' => 'AND',
				    		array ( 'key' => 'report_type',
				    				'value' => 'wma'
				    		),
				    		array ( 'key' => 'year_of_report',
				    				'value' => '2022'
				    		)
				    	)
				    );
				    $loop = new WP_Query( $reports );
				    $x = 0;
				    
				    while ( $loop->have_posts() ) : $loop->the_post(); ?>
				        <a href="<?php the_field('report_upload'); ?>" alt="" target="_blank" /><?php the_title(); ?></a>&nbsp;|&nbsp;

				    <?php if($x == 3) { $x = -1; echo '<br />'; } ?>
				    <?php $x++; ?>
					<?php endwhile; ?>
				</p>
				<?php endif; ?>

				<?php if ( get_post_meta($post->ID, '2021', true) ) : ?>
				<h6>2021, Week of:</h6>
				<p>
					<?php

				    $reports = array( 'post_type' => 'report_html',
				    	'meta_query' => array(
				    		'relation' => 'AND',
				    		array ( 'key' => 'report_type',
				    				'value' => 'wma'
				    		),
				    		array ( 'key' => 'year_of_report',
				    				'value' => '2021'
				    		)
				    	)
				    );
				    $loop = new WP_Query( $reports );
				    $x = 0;
				    
				    while ( $loop->have_posts() ) : $loop->the_post(); ?>
				        <a href="<?php the_field('report_upload'); ?>" alt="" target="_blank" /><?php the_title(); ?></a>&nbsp;|&nbsp;

				    <?php if($x == 3) { $x = -1; echo '<br />'; } ?>
				    <?php $x++; ?>
					<?php endwhile; ?>
				</p>
				<?php endif; ?>

				<?php if ( get_post_meta($post->ID, '2020', true) ) : ?>
				<h6>2020, Week of:</h6>
				<p>
					<?php

				    $reports = array( 'post_type' => 'report_html',
				    	'meta_query' => array(
				    		'relation' => 'AND',
				    		array ( 'key' => 'report_type',
				    				'value' => 'wma'
				    		),
				    		array ( 'key' => 'year_of_report',
				    				'value' => '2020'
				    		)
				    	)
				    );
				    $loop = new WP_Query( $reports );
				    $x = 0;
				    
				    while ( $loop->have_posts() ) : $loop->the_post(); ?>
				        <a href="<?php the_field('report_upload'); ?>" alt="" target="_blank" /><?php the_title(); ?></a>&nbsp;|&nbsp;

				    <?php if($x == 3) { $x = -1; echo '<br />'; } ?>
				    <?php $x++; ?>
					<?php endwhile; ?>
				</p>
				<?php endif; ?>

				<?php if ( get_post_meta($post->ID, '2019', true) ) : ?>
				<h6>2019, Week of:</h6>
				<p>
					<?php

				    $reports = array( 'post_type' => 'report_html',
				    	'meta_query' => array(
				    		'relation' => 'AND',
				    		array ( 'key' => 'report_type',
				    				'value' => 'wma'
				    		),
				    		array ( 'key' => 'year_of_report',
				    				'value' => '2019'
				    		)
				    	)
				    );
				    $loop = new WP_Query( $reports );
				    $x = 0;
				    
				    while ( $loop->have_posts() ) : $loop->the_post(); ?>
				        <a href="<?php the_field('report_upload'); ?>" alt="" target="_blank" /><?php the_title(); ?></a>&nbsp;|&nbsp;

				    <?php if($x == 3) { $x = -1; echo '<br />'; } ?>
				    <?php $x++; ?>
					<?php endwhile; ?>
				</p>
				<?php endif; ?>

				<?php if ( get_post_meta($post->ID, '2018', true) ) : ?>
				<h6>2018, Week of:</h6>
				<p>
					<?php

				    $reports = array( 'post_type' => 'report_html',
				    	'meta_query' => array(
				    		'relation' => 'AND',
				    		array ( 'key' => 'report_type',
				    				'value' => 'wma'
				    		),
				    		array ( 'key' => 'year_of_report',
				    				'value' => '2018'
				    		)
				    	)
				    );
				    $loop = new WP_Query( $reports );
				    $x = 0;
				    
				    while ( $loop->have_posts() ) : $loop->the_post(); ?>
				        <a href="<?php the_field('report_upload'); ?>" alt="" target="_blank" /><?php the_title(); ?></a>&nbsp;|&nbsp;

				    <?php if($x == 3) { $x = -1; echo '<br />'; } ?>
				    <?php $x++; ?>
					<?php endwhile; ?>
				</p>
				<?php endif; ?>

				<?php if ( get_post_meta($post->ID, '2017', true) ) : ?>
				<h6>2017, Week of:</h6>
				<p>
					<?php

				    $reports = array( 'post_type' => 'report_html',
				    	'meta_query' => array(
				    		'relation' => 'AND',
				    		array ( 'key' => 'report_type',
				    				'value' => 'wma'
				    		),
				    		array ( 'key' => 'year_of_report',
				    				'value' => '2017'
				    		)
				    	)
				    );
				    $loop = new WP_Query( $reports );
				    $x = 0;
				    
				    while ( $loop->have_posts() ) : $loop->the_post(); ?>
				        <a href="<?php the_field('report_upload'); ?>" alt="" target="_blank" /><?php the_title(); ?></a>&nbsp;|&nbsp;

				    <?php if($x == 3) { $x = -1; echo '<br />'; } ?>
				    <?php $x++; ?>
					<?php endwhile; ?>
				</p>
				<?php endif; ?>

				<?php if ( get_post_meta($post->ID, '2016', true) ) : ?>
				<h6>2016, Week of:</h6>
				<p>
					<?php

				    $reports = array( 'post_type' => 'report_html',
				    	'meta_query' => array(
				    		'relation' => 'AND',
				    		array ( 'key' => 'report_type',
				    				'value' => 'wma'
				    		),
				    		array ( 'key' => 'year_of_report',
				    				'value' => '2016'
				    		)
				    	)
				    );
				    $loop = new WP_Query( $reports );
				    $x = 0;
				    
				    while ( $loop->have_posts() ) : $loop->the_post(); ?>
				        <a href="<?php the_field('report_upload'); ?>" alt="" target="_blank" /><?php the_title(); ?></a>&nbsp;|&nbsp;

				    <?php if($x == 3) { $x = -1; echo '<br />'; } ?>
				    <?php $x++; ?>
					<?php endwhile; ?>
				</p>
				<?php endif; ?>

				<?php if ( get_post_meta($post->ID, '2015', true) ) : ?>
				<h6>2015, Week of:</h6>
				<p>
					<?php

				    $reports = array( 'post_type' => 'report_html',
				    	'meta_query' => array(
				    		'relation' => 'AND',
				    		array ( 'key' => 'report_type',
				    				'value' => 'wma'
				    		),
				    		array ( 'key' => 'year_of_report',
				    				'value' => '2015'
				    		)
				    	)
				    );
				    $loop = new WP_Query( $reports );
				    $x = 0;
				    
				    while ( $loop->have_posts() ) : $loop->the_post(); ?>
				        <a href="<?php the_field('report_upload'); ?>" alt="" target="_blank" /><?php the_title(); ?></a>&nbsp;|&nbsp;

				    <?php if($x == 3) { $x = -1; echo '<br />'; } ?>
				    <?php $x++; ?>
					<?php endwhile; ?>
				</p>
				<?php endif; ?>

				<h6>2014, Week of:</h6>
				<p>
					<?php

				    $reports = array( 'post_type' => 'report_html',
				    	'meta_query' => array(
				    		'relation' => 'AND',
				    		array ( 'key' => 'report_type',
				    				'value' => 'wma'
				    		),
				    		array ( 'key' => 'year_of_report',
				    				'value' => '2014'
				    		)
				    	)
				    );
				    $loop = new WP_Query( $reports );
				    $x = 0;
				    
				    while ( $loop->have_posts() ) : $loop->the_post(); ?>
				        <a href="<?php the_field('report_upload'); ?>" alt="" target="_blank" /><?php the_title(); ?></a>&nbsp;|&nbsp;

				    <?php if($x == 3) { $x = -1; echo '<br />'; } ?>
				    <?php $x++; ?>
					<?php endwhile; ?>
				</p>

				<h6>2013, Week of:</h6>
				<p>
					<?php

				    $reports = array( 'post_type' => 'report_html',
				    	'meta_query' => array(
				    		'relation' => 'AND',
				    		array ( 'key' => 'report_type',
				    				'value' => 'wma'
				    		),
				    		array ( 'key' => 'year_of_report',
				    				'value' => '2013'
				    		)
				    	)
				    );
				    $loop = new WP_Query( $reports );
				    $x = 0;
				    
				    while ( $loop->have_posts() ) : $loop->the_post(); ?>
				        <a href="<?php the_field('report_upload'); ?>" alt="" target="_blank" /><?php the_title(); ?></a>&nbsp;|&nbsp;

				    <?php if($x == 3) { $x = -1; echo '<br />'; } ?>
				    <?php $x++; ?>
					<?php endwhile; ?>
				</p>

				<h6>2012, Week of:</h6>
				<p>
					<?php

				    $reports = array( 'post_type' => 'report_html',
				    	'meta_query' => array(
				    		'relation' => 'AND',
				    		array ( 'key' => 'report_type',
				    				'value' => 'wma'
				    		),
				    		array ( 'key' => 'year_of_report',
				    				'value' => '2012'
				    		)
				    	)
				    );
				    $loop = new WP_Query( $reports );
				    $x = 0;
				    
				    while ( $loop->have_posts() ) : $loop->the_post(); ?>
				        <a href="<?php the_field('report_upload'); ?>" alt="" target="_blank" /><?php the_title(); ?></a>&nbsp;|&nbsp;

				    <?php if($x == 3) { $x = -1; echo '<br />'; } ?>
				    <?php $x++; ?>
					<?php endwhile; ?>
				</p>

				<h6>2011, Week of:</h6>
				<p>
					<?php

				    $reports = array( 'post_type' => 'report_html',
				    	'meta_query' => array(
				    		'relation' => 'AND',
				    		array ( 'key' => 'report_type',
				    				'value' => 'wma'
				    		),
				    		array ( 'key' => 'year_of_report',
				    				'value' => '2011'
				    		)
				    	)
				    );
				    $loop = new WP_Query( $reports );
				    $x = 0;
				    
				    while ( $loop->have_posts() ) : $loop->the_post(); ?>
				        <a href="<?php the_field('report_upload'); ?>" alt="" target="_blank" /><?php the_title(); ?></a>&nbsp;|&nbsp;

				    <?php if($x == 3) { $x = -1; echo '<br />'; } ?>
				    <?php $x++; ?>
					<?php endwhile; ?>
				</p>

				<h6>2010, Week of:</h6>
				<p>
					<?php

				    $reports = array( 'post_type' => 'report_html',
				    	'meta_query' => array(
				    		'relation' => 'AND',
				    		array ( 'key' => 'report_type',
				    				'value' => 'wma'
				    		),
				    		array ( 'key' => 'year_of_report',
				    				'value' => '2010'
				    		)
				    	)
				    );
				    $loop = new WP_Query( $reports );
				    $x = 0;
				    
				    while ( $loop->have_posts() ) : $loop->the_post(); ?>
				        <a href="<?php the_field('report_upload'); ?>" alt="" target="_blank" /><?php the_title(); ?></a>&nbsp;|&nbsp;

				    <?php if($x == 3) { $x = -1; echo '<br />'; } ?>
				    <?php $x++; ?>
					<?php endwhile; ?>
				</p>
				</div>
			</div> 
		</div>
	</section>
</div>

<?php endwhile; ?>
<?php get_footer(); ?>