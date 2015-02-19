<?php
/**
 * Search Results Template File
 */ 
get_header(); ?>
<!-- Page Content -->
<div class="maar-content-inner">

<div class="main-body row">
    <div class="row">
        <section class="twelve columns">
            <div class="search-results-num">
                Search Results: &quot;<?php echo get_search_query(); ?>&quot;
            </div>
        </section>
    </div>
    <div class="row">
        <div class="ten columns">
            <ul class="search-results">
                <?php if ( have_posts() ) :  // results found?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <li class="gen-div">
                        <a href="<?php the_permalink(); ?>"><h4><?php the_title();  ?></h4></a>
                        <p><?php my_excerpt('short'); ?></p>
                        <a href="<?php the_permalink(); ?>"><?php the_permalink(); ?></a>
                    </li>
                <?php endwhile; ?>
                <?php else :  // no results?>
                    <li class="gen-div">
                        <h4>No Results Found.</h4>
                    </li>
                <?php endif; ?>
            </ul>
            <div class="search-results-page">
                <?php
                global $wp_query;

                $big = 999999999; // need an unlikely integer

                echo paginate_links( array(
                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'format' => '?paged=%#%',
                    'current' => max( 1, get_query_var('paged') ),
                    'total' => $wp_query->max_num_pages,
                    'prev_text'    => __(''),
                    'next_text'    => __(''),
                ) );
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>