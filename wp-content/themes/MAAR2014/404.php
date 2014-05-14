<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage MAAR 2014
 * @since MAAR 2014 1.0
 */

get_header(); ?>
<!-- Page Content -->
<div class="maar-content-inner">

<div class="main-body row">
	<div class="row">
		<div class="ten columns">

			<h1 class="page-title"><?php _e( 'Not Found', 'MAAR 2014' ); ?></h1>

				<h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'MAAR 2014' ); ?></h2>
				<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'MAAR 2014' ); ?></p>
				<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
				    <ul>
				    	<li class="field search-field" style="float: left;">
					        <input class="toggle search input icon-right icon-search" type="text" id="s" name="s" value="<?php the_search_query(); ?>" placeholder="Search" gumby-trigger="#meta-nav .field" gumby-on="focus blur" />
					        <i class="icon-search"></i>
					    </li>
					</ul>
				</form>
				<br style="clear:both;" />
				<p><?php _e( 'Or you could even try navigating to one of the pages on the side!', 'MAAR 2014' ); ?></p>

		</div>
	</div>

</div>

<?php get_footer(); ?>