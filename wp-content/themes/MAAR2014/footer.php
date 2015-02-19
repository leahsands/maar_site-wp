					</div><!-- / main-body -->

					<!-- Footer -->
					<div class="footer row">
						<div class="nine columns">
							<div class="one columns">
								<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>"><i class="icon-mail"></i></a>
							</div>
							<div class="eleven columns">
								<p>5750 Lincoln Drive, Edina, MN 55436 • 952.933.9020 • <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'privacy-statement' ) ) ); ?>">Privacy Statement</a><br />
								&copy;<?php echo date( 'Y' ); ?> Minneapolis Area Association of REALTORS&reg;. All rights reserved.<br />
								Created by <a href="http://10kresearch.com/" target="_blank">10K Research and Marketing</a></p>
							</div>
						</div>
						<div class="three columns">
							<ul class="row">
								<li class="two columns"><a href="https://www.facebook.com/MinneapolisREALTORS" target="_blank"><i class="icon-facebook social"></i></a></li>
								<li class="two columns"><a href="https://twitter.com/mplsREALTORS" target="_blank"><i class="icon-twitter social"></i></a></li>
								<li class="two columns"><a href="https://www.youtube.com/user/MinneapolisREALTORS" target="_blank"><i class="icon-play social"></i></a></li>
								<li class="two columns"><a href="https://www.linkedin.com/groups?mostPopular=&gid=1181157" target="_blank"><i class="icon-linkedin social"></i></a></li>
								<li class="two columns"><a href="http://www.flickr.com/photos/minneapolisrealtors" target="_blank"><i class="icon-flickr social"></i></a></li>
								<li class="two columns"><a href="http://www.pinterest.com/mplsrealtors/" target="_blank"><i class="icon-pinterest social"></i></a></li>
							</ul>
						</div>
					</div><!-- /footer -->
				</div><!-- /maar-content-inner -->
			</div><!-- /maar-content -->
		</div><!-- /side-pusher -->
	</div><!-- /side-container -->
	
	<!-- Sidebar Effects -->
	<script src="<?php bloginfo('template_directory');?>/js/_custom/sidebar-effects.js"></script>
	<!-- Slider javascript files -->
	<script src="<?php bloginfo('template_directory');?>/js/_custom/jquery.flexslider.js"></script>

<script>
    $(window).load(function() {
	  $('.flexslider').flexslider({
	    animation: "slide"
	  });
	});

</script>
<script>
        $('.maar-drawer-link').click(function(){
            var r = $(this).attr('href').substring(1);
            $('.drawer[id=' + r + ']').toggleClass('active');
        });
</script>

<script>
$('.slide-notify .hide').click(function(e){
     e.preventDefault(); //to prevent the default behaviour of <a>
     $(this).parent().removeClass('slide-notify').addClass('hide'); 
      //parent() because i think you want to change the class of the div ...
 });
</script>


	<?php wp_footer(); ?>
</body>
</html> <!-- end page. what a ride! -->