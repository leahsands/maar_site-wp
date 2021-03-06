<?php get_header(); ?>
<!-- Page Content -->
<div class="slide-notify">
	<div id="slide">
		<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'join-maar' ) ) ); ?>">Join MAAR <i class="icon-right-open"></i></a>
	</div>
</div>

<div class="maar-content-inner">

<!-- Market Data -->
<div class="row mrkt-data main-body">
	<h1>Today in the Market</h1>
	<section class="sixteen colgrid">
		<ul class="row">
			<li class="ttip two columns infosparks" data-tooltip="Interactive analytics for local housing." alt="">
				<p>Infosparks</p>
				<div class="market-icon infosparks-icon"></div>
				<div class="row">
					<a href="http://northstarmls.stats.10kresearch.com/" target="_blank">
					<div class="infosparks-mem sixteen columns">
						<p>Member</p>
						<div class="market-icon infosparks-icon">
						</div>
					</div>
					</a>
					<!-- <a href="http://maar-infosparks.stgstats.10kresearch.com/" target="_blank">
					<div class="infosparks-nonmem eight columns">
						<p>Public</p>
						<div class="market-icon infosparks-icon">
						</div>
					</div>
					</a> -->
				</div>
			</li>
			<a href="http://maar.stats.10kresearch.com/reports/lmu" target="_blank">
			<li class="ttip two columns" data-tooltip="Deep dive into cities and neighborhoods." alt="">
				<p>Local Market Updates</p>
				<div class="market-icon lmu-icon"></div>
			</li>
			</a>
			<a href="http://maar.stats.10kresearch.com/reports/mmi" target="_blank">
			<li class="ttip two columns" data-tooltip="An overview of key trends for the region." alt="">
				<p>Monthly Indicators</p>
				<div class="market-icon mmi-icon"></div>
			</li>
			</a>
			<a href="http://maar.stats.10kresearch.com/reports/hso" target="_blank">
			<li class="ttip two columns" data-tooltip="Segmentation by price, property type." alt="">
				<p>Housing Supply</p>
				<div class="market-icon hso-icon"></div>
			</li>
			</a>
			<a href="http://maar.stats.10kresearch.com/reports/fss" target="_blank">
			<li class="ttip two columns" data-tooltip="An important segment spelled out." alt="">
				<p>Foreclosure Report</p>
				<div class="market-icon fss-icon"></div>
			</li>
			</a>
			<a href="http://thething.mplsrealtor.com/" target="_blank">
			<li class="ttip two columns" data-tooltip="Replaced by Infosparks soon!" alt="">
				<p>The Thing</p>
				<div class="market-icon infosparks-icon"></div>
			</li>
			</a>
			<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'market-data' ) ) ); ?>/#ann-archive">
			<li class="ttip two columns" data-tooltip="Full year of activity at a glance." alt="">
				<p>Annual Reports</p>
				<div class="market-icon ann-icon"></div>
			</li>
			</a>
			<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'market-data' ) ) ); ?>/#wma-archive">
			<li class="ttip two columns" data-tooltip="Stay on top of trends every week." alt="">
				<p>Weekly Activity</p>
				<div class="market-icon wma-icon"></div>
			</li>
			</a>
		</ul>
	</section>
</div>

<!-- Slider -->
<section class="flexslider row main-body">
	<ul class="slides">
	    <?php

	    $feature_images = array( 'post_type' => 'feat_img' );
	    $loop = new WP_Query( $feature_images );
	    
	    while ( $loop->have_posts() ) : $loop->the_post(); ?>
	            
		   <li>
	              <img src="<?php the_field('feat_img_img'); ?>" alt="" />
	              <div class="flex-caption">
	                        <h1><?php echo esc_html( get_post_meta( get_the_ID(), 'large_caption', true ) ); ?></h1>
	                        <h2><?php echo esc_html( get_post_meta( get_the_ID(), 'small_caption', true ) ); ?></h2>
	                        <?php if ( get_post_meta($post->ID, 'button_caption', true) ) : ?>
	                        <p class="large btn">
	                            <a href="http://<?php echo get_post_meta( get_the_ID(), 'button_link', true ); ?>" target="_blank"  style="z-index: 500;">
	                                <?php echo esc_html( get_post_meta( get_the_ID(), 'button_caption', true ) ); ?>
	                                <i class="icon-right-open-big"></i>
	                            </a>
	                        </p>
	                        <?php endif; ?>
	              </div>
	            <?php if ( get_post_meta($post->ID, 'button_link', true) ) : ?> 
		    	<a href="http://<?php echo get_post_meta( get_the_ID(), 'button_link', true ); ?>" target="_blank" style="width: 100%; height: 100%; position: absolute; left: 0; right: 0; top: 0; bottom: 0;">
	            </a>
	        <?php endif; ?>
		    </li>

	    <?php endwhile; ?>

	<?php wp_reset_query(); ?>
  	</ul>
</section>
<!-- / slider -->

<!-- Notification -->
<div class="row main-body notify">
	<section class="twelve columns">
		<?php get_sidebar( 'home-notify' ); ?>
	</section>
</div>

<div class="row main-body">

	<!-- News, Video, Calendar -->
	<div class="row">
		<section class="four columns gen-div">
			<div class="gen-div-header">
				<h2>News</h2><a class="archive" href="<?php echo esc_url( get_permalink( get_page_by_path( 'communications' ) ) ); ?>">| More News</a>
			</div>
			<span class="gen-home-div-inner news-item">
			<ul>
				<?php

			    $news_items = array(
			    	'post_type' => array('newsletter_html', 'post'),
			    	'posts_per_page' => 5  );
			    $loop = new WP_Query( $news_items );
			    
			    while ( $loop->have_posts() ) : $loop->the_post(); ?>
			    	<?php if( get_post_type() == 'newsletter_html') { ?>
			            <li>
			              <a href="<?php echo the_field('newsletter'); ?>" alt="" target="_blank" />
			              	<span><?php the_time('n-d'); ?>  <?php the_title(); ?></span>
			              	<i class="icon-newspaper"></i>
			              </a>
			            </li>
			        <?php } else { ?>
			        	<li>
			              <a href="<?php echo get_permalink(); ?>" alt="" />
			              	<span><?php the_time('n-d'); ?>  <?php the_title(); ?></span>
			              	<i class="icon-chat"></i>
			              </a>
			            </li>
			        <?php }; ?>

			    <?php endwhile; ?>

			<?php wp_reset_query(); ?>
			</ul>
			</span>
		</section>
		<section class="four columns gen-div">
			<div class="gen-div-header">
				<h2>Videos</h2><a class="archive" href="<?php echo esc_url( get_permalink( get_page_by_path( 'videos' ) ) ); ?>">| More Videos</a>
			</div>
			<span class="gen-home-div-inner video-home">
			</span>
		</section>
		<section class="four columns gen-div">
			<div class="gen-div-header">
				<h2><?php echo date('M Y') ?></h2><a class="archive" href="https://maarportal.ramcoams.net/EventCalendar.aspx" target="_blank">| View Full</a>
			</div>
				<a href="https://maarportal.ramcoams.net/EventCalendar.aspx" target="_blank">
				<?php get_sidebar( 'calendar' ); ?>
			</a>
		</section>
	</div>

<?php get_footer(); ?>