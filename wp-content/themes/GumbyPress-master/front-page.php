<?php get_header(); ?>
<!-- Page Content -->
					<div class="slide-notify">
						<div id="slide">
							<a href="#">Join MAAR <i class="icon-right-open"></i></a>
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
								<li class="ttip two columns" data-tooltip="..." alt="">
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
						              <?php the_post_thumbnail(); ?>
						              <div class="flex-caption">
						                        <h1><?php echo esc_html( get_post_meta( get_the_ID(), 'large_caption', true ) ); ?></h1>
						                        <h2><?php echo esc_html( get_post_meta( get_the_ID(), 'small_caption', true ) ); ?></h2>
						                        <?php if ( get_post_meta($post->ID, 'small_caption', true) ) : ?>
						                        <p class="large btn">
						                            <a href="<?php echo esc_html( get_post_meta( get_the_ID(), 'button_link', true ) ); ?>" target="_blank">
						                                <?php echo esc_html( get_post_meta( get_the_ID(), 'small_caption', true ) ); ?>
						                                <i class="icon-right-open-big"></i>
						                            </a>
						                        </p>
						                        <?php endif; ?>
						              </div>
						            </li>

						    <?php endwhile; ?>

						<?php wp_reset_query(); ?>
					  	</ul>
					</section>
					<!-- / slider -->

					<!-- Notification -->
					<div class="row main-body notify">
						<section class="twelve columns">
							<p><i class="icon-attention"></i>Due to incliment weather, the MAAR Office is closed today.<i class="icon-attention"></i></p>
						</section>
					</div>

					<div class="row main-body">

						<!-- News, Video, Calendar -->
						<div class="row">
							<section class="four columns gen-div">
								<div class="gen-div-header">
									<h2>News</h2><a class="archive" href="#">| News Archive</a>
								</div>
								<span class="gen-home-div-inner">
								<ul>
									<li><a href="#"><span class="news-headline">This is a headline</span> April 20, 2014</a> <i class="icon-video"></i></li>
									<li><a href="#"><span class="news-headline">Here's a another one that's long</span> Apri 1, 2014</a></li>
									<li><a href="#"><span class="news-headline">And another</span> March 25, 2014</a></li>
								</ul>
								</span>
							</section>
							<section class="four columns gen-div">
								<div class="gen-div-header">
									<h2>Videos</h2><a class="archive" href="video.html">| More Videos</a>
								</div>
								<span class="gen-home-div-inner video-home">
								</span>
							</section>
							<section class="four columns gen-div">
								<div class="gen-div-header">
									<h2>Calendar</h2><a class="archive" href="https://maarportal.ramcoams.net/EventCalendar.aspx" target="_blank">| View Calendar</a>
								</div>
								<span class="gen-home-div-inner">
									<a href="#">
										<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;ctz=America%2FChicago" style="border-width:0" width="100%"  frameborder="0" scrolling="no"></iframe>
									</a>
								</span>
							</section>
						</div>

<?php get_footer(); ?>