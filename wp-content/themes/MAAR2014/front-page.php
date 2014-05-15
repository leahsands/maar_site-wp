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
			<li class="ttip two columns" data-tooltip="The real estate market expert's best friend. Interactive, mobile friendly, widget ready and fresh daily" alt="">
				<p>Infosparks</p>
				<div class="market-icon infosparks-icon"></div>
			</li>
			<li class="ttip two columns" data-tooltip="Get local" alt="">
				<p>Local Market Updates</p>
				<div class="market-icon lmu-icon"></div>
			</li>
			<li class="ttip two columns" data-tooltip="See the big picture" alt="">
				<p>Monthly Indicators</p>
				<div class="market-icon mmi-icon"></div>
			</li>
			<li class="ttip two columns" data-tooltip="Trends behind trends" alt="">
				<p>Housing Supply</p>
				<div class="market-icon hso-icon"></div>
			</li>
			<li class="ttip two columns" data-tooltip="An important segment spelled out" alt="">
				<p>Foreclosure Report</p>
				<div class="market-icon fss-icon"></div>
			</li>
			<li class="ttip two columns" data-tooltip="A smart, informative and fast breakdown of your local housing market" alt="">
				<p>The Skinny</p>
				<div class="market-icon skinny-icon"></div>
			</li>
			<li class="ttip two columns" data-tooltip="Your full year at a glance" alt="">
				<p>Annual Reports</p>
				<div class="market-icon ann-icon"></div>
			</li>
			<li class="ttip two columns" data-tooltip="Trend-spotting faster" alt="">
				<p>Weekly Activity</p>
				<div class="market-icon wma-icon"></div>
			</li>
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
		    <a href="http://<?php echo get_post_meta( get_the_ID(), 'button_link', true ); ?>" target="_blank" style="width: 100%; height: 100%; position: absolute; left: 0; right: 0; top: 0; bottom: 0;">
	            </a>
		    </li>

	    <?php endwhile; ?>

	<?php wp_reset_query(); ?>
  	</ul>
</section>
<!-- / slider -->

<!-- Notification -->
<div class="row main-body notify">
	<section class="twelve columns">
		<p>Welcome to the new and improved MAAR website!</p>
	</section>
</div>

<div class="row main-body">

	<!-- News, Video, Calendar -->
	<div class="row">
		<section class="four columns gen-div">
			<div class="gen-div-header">
				<h2>News</h2><a class="archive" href="<?php echo esc_url( get_permalink( get_page_by_path( 'newsroom' ) ) ); ?>">| More News</a>
			</div>
			<span class="gen-home-div-inner">
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
			              	<?php the_title(); ?>
			              	<i class="icon-newspaper"></i>
			              </a>
			              <span class="small"><em><?php the_time('n/Y'); ?></em></span>
			            </li>
			        <?php } else { ?>
			        	<li>
			              <a href="<?php echo get_permalink(); ?>" alt="" />
			              	<?php the_title(); ?>
			              	<i class="icon-chat"></i>
			              </a>
			              <span class="small"><em><?php the_time('n/Y'); ?></em></span>
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
				<h2><?php echo date('M Y') ?></h2><a class="archive" href="https://maarportal.ramcoams.net/EventCalendar.aspx" target="_blank">| View Calendar</a>
			</div>
				<a href="https://maarportal.ramcoams.net/EventCalendar.aspx" target="_blank">
				<?php get_sidebar( 'calendar' ); ?>
			</a>
		</section>
	</div>

<?php get_footer(); ?>