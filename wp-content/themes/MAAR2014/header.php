<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<!-- Use the .htaccess and remove these lines to avoid edge case issues.
			 More info: h5bp.com/b/378 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="humans.txt">

	<!-- favicon -->
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">

	<!-- Facebook Metadata /-->
	<meta property="fb:page_id" content="">
	<meta property="og:image" content="">
	<meta property="og:description" content="">
	<meta property="og:title" content="">

	<!-- Google+ Metadata /-->
	<meta itemprop="name" content="">
	<meta itemprop="description" content="">
	<meta itemprop="image" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

	<!-- WordPress Pingback Url-->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<!-- Grab Google CDN's jQuery, fall back to local if offline -->
	<!-- 2.0 for modern browsers, 1.10 for .oldie -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>
	var oldieCheck = Boolean(document.getElementsByTagName('html')[0].className.match(/\soldie\s/g));
	if(!oldieCheck) {
	document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"><\/script>');
	} else {
	document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"><\/script>');
	}
	</script>

	<script src="<?php bloginfo('template_directory');?>/js/modernizr-2.6.2.min.js"></script>
	<script src="<?php bloginfo('template_directory');?>/js/gumby.min.js"></script>

	<!-- SMOOTH SCROLL -->
	<script>
	jQuery(function($) {
	  $('a[href*=#]:not([href=#])').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('.maar-content').animate({
	          scrollTop: Math.floor(target.offset().top) - $('.maar-container').offset().top - 60
	        }, 500);
	        return false;
	      }
	    }
		
	   
	  });

	});
	</script>
	<!-- End of SMOOTH SCROLL -->


	<!-- GOOGLE ANALYTICS -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-52633630-1', 'auto');
	  ga('send', 'pageview');

	</script>

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
	</head>

	<body>

		<!-- for the purpose of the mobile navigation, the whole body is in a "maar-container" div -->
	<div id="maar-container" class="maar-container">
		<!-- content push wrapper -->
		<div class="side-pusher">

			<!-- Navigation -->

			<nav class="side-menu side-left side-effect" id="menu">
				<section class="logo-area">
					<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/assets/MAARlogo.png" /></a>
				</section>
				<section class="side-scroll">
					<?php

					$defaults = array(
						'menu'            => 'Main Navigation',
						'container'		  => false,
						'menu_class'      => 'side-main-nav-mobile',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'depth'           => 2,
						'walker'          => new Walker_Accordion 
					);

					wp_nav_menu( $defaults );

					?>
	  			<section class="pop-links">
	  				<h1>Popular Links</h1>
	  				<ul>
	  					<li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'applications-forms' ) ) ); ?>">Forms</a></li>
	  					<li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'blog' ) ) ); ?>">Blog</a></li>
	  					<li><a href="https://maarportal.ramcoams.net/Membership/Directory/MemberSearch.aspx?selmenid=men4" target="_blank">Find a REALTOR&reg;</a></li>
	  					<li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'affiliate-partner-directory' ) ) ); ?>">Affiliate Partner Directory</a></li>
	  					<li><a href="http://www.northstarmls.com/" target="_blank">NorthstarMLS</a></li>
	  				</ul>
	  			</section>
	  		</section> <!-- / side-scroll -->
			</nav>

		<!-- MOBILE RIGHT NAV -->
			<nav class="side-menu side-right side-effect-right" id="menu">
				<section class="side-scroll">
  				<center><form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
				    <ul>
				    	<li class="field search-field">
					        <input class="toggle search input icon-right icon-search" type="text" id="s" name="s" value="<?php the_search_query(); ?>" placeholder="Search" gumby-trigger="#meta-nav .field" gumby-on="focus blur" />
					        <i class="icon-search"></i>
					    </li>
					</ul>
				</form></center>
					<ul class="row">
						<li class="twelve columns">
							<a href="https://maarportal.ramcoams.net" target="_blank"><p class="mem-icon"><i class="icon-login"></i> Login</p></a>
						</li>
						<li class="twelve columns">
							<a href="https://maarportal.ramcoams.net/Sales/Catalog/ProductSearch.aspx" target="_blank"><p class="mem-icon"><i class="icon-basket"></i> Online Store</p></a>
						</li>
						<li class="twelve columns">
							<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'market-data' ) ) ); ?>"><p class="mem-icon"><i class="icon-chart-bar"></i> Market Data</p></a>
						</li>
						<li class="twelve columns">
							<a href="https://maarportal.ramcoams.net/EventCalendar.aspx" target="_blank"><p class="mem-icon"><i class="icon-calendar"></i> Calendar</p></a>
						</li>
					</ul>
					<div class="row">
							<div style="margin-top: 10px;"><a href="https://www.facebook.com/MinneapolisREALTORS" target="_blank"><i class="icon-facebook social"></i></a></div>
							<div><a href="https://twitter.com/mplsREALTORS" target="_blank"><i class="icon-twitter social"></i></a></div>
							<div><a href="https://www.youtube.com/user/MinneapolisREALTORS" target="_blank"><i class="icon-play social"></i></a></div>
							<div><a href="https://www.linkedin.com/groups?mostPopular=&gid=1181157" target="_blank"><i class="icon-linkedin social"></i></a></div>
							<div><a href="http://www.flickr.com/photos/minneapolisrealtors" target="_blank"><i class="icon-flickr social"></i></a></div>
							<div><a href="http://www.pinterest.com/mplsrealtors/" target="_blank"><i class="icon-pinterest social"></i></a></div>
					</div>
					<div class="row side-contact" style="margin-top: 10px;">
						<div class="four columns">
							<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>"><i class="icon-mail social"></i></a>
						</div>
						<div class="eight columns">
							<p> 5750 Lincoln Drive, Edina, MN 55436<br />
							952.933.9020<br />
							<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'privacy-statement' ) ) ); ?>">Privacy Statement</a></p>
						</div>
					</div>
					<div class="row side-contact">
							<p>&copy;<?php echo date( 'Y' ); ?> Minneapolis Association of REALTORS&reg;. All rights reserved.</p>
					</div>
	  		</section> <!-- / side-scroll -->
			</nav>
		<!-- /MOBILE RIGHT NAV -->

			<div class="maar-content">
					<!-- Mobile Menu Header -->
					<div id="side-trigger-effects" class="row mobile-header">
							<div data-effect="side-effect" class="open-panel">
								<a href="#"><i class="icon-menu"></i></a>
							</div>
							<div data-effect="side-effect-right" class="open-panel open-panel-right">
								<a href="#"><i class="icon-users"></i></a>
							</div>
							<div class="logo-area-mobile">
								<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/assets/MAARlogo.png" /></a>
							</div>
					</div>

					<!-- Top Member Navigation -->
					<div class="row" id="mem-nav">
						<div class="three columns push_six">
							<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
							    <ul>
							    	<li class="field search-field">
								        <input class="toggle search input icon-right icon-search" type="text" id="s" name="s" value="<?php the_search_query(); ?>" placeholder="Search" gumby-trigger="#meta-nav .field" gumby-on="focus blur" />
								        <i class="icon-search"></i>
								    </li>
								</ul>
							</form>
							<!-- <form action="http://m.fiftyone.com/s/544/o3wZukbbQCHKSQ5Q6j2t53AJzBGmz6NH" method="get">
							<ul>
								<li class="field search-field">
										<input class="toggle search input icon-right icon-search" type="search" name="q" placeholder="Search" gumby-trigger="#meta-nav .field" gumby-on="focus blur">
										<i class="icon-search"></i>
								</li>
							</ul>
							</form> -->
						</div>
						<div class="three columns mem-tools">
							<div class="six columns mem-tools-login">
								<a href="https://maarportal.ramcoams.net" target="_blank"><div class="mem-icon"><i class="icon-login"></i></div><p>LOGIN</p></a>
							</div>
							<div class="ttip two columns" data-tooltip="Market Data" alt="">
								<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'market-data' ) ) ); ?>"><div class="mem-icon"><i class="icon-chart-bar"></i></div></a>
							</div>
							<div class="ttip two columns" data-tooltip="Calendar" alt="">
								<a href="https://maarportal.ramcoams.net/EventCalendar.aspx" target="_blank"><div class="mem-icon"><i class="icon-calendar"></i></div></a>
							</div>
							<div class="ttip two columns" data-tooltip="Store" alt="">
								<a href="https://maarportal.ramcoams.net/Sales/Catalog/ProductSearch.aspx" target="_blank"><div class="mem-icon"><i class="icon-basket"></i></div></a>
							</div>
						</div>
					</div><!-- / top member navigation -->

			</header> <!-- end header -->