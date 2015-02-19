<?php
 /*Template Name: Leadership
 */
 
get_header(); ?>
<div class="maar-content-inner">

<div class="main-body row">
    <div class="row">
        <section class="twelve columns">
            <h1><?php the_title(); ?></h1>
        </section>
    </div>
    <div class="row">

    <?php

    $leadership_members = array( 'post_type' => 'leadership_post', 'posts_per_page' => -1 );
    $loop = new WP_Query( $leadership_members );
    $x = 0;
    
    while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <section class="three columns gen-div team" style="padding-bottom: 0;"> 
                <article class="twelve columns">
                        <img src="<?php the_field('display_picture'); ?>" alt="" />
                    </article>
		    <h5 class="gen-div-header"><?php the_title(); ?></h5>
		    <article class="gen-div-inner">
                    <p><?php echo esc_html( get_post_meta( get_the_ID(), 'leadership_position', true ) ); ?> <br />
                        <a href="mailto:<?php echo esc_html( get_post_meta( get_the_ID(), 'leadership_email', true ) ); ?>">
                            <?php echo esc_html( get_post_meta( get_the_ID(), 'leadership_email', true ) ); ?>
                        </a> <br />
                        <span><?php echo date('Y'); ?> <?php echo esc_html( get_post_meta( get_the_ID(), 'leadership_category', true ) ); ?> </span>
                    </p>
                </article>
            </section>
            <?php if($x == 3) { $x = -1; echo '</div><div class="row">'; } ?>
    <?php $x++; ?>
    <?php endwhile; ?>
    </div>
</div>

<section class="row main-body">
        <h4 class="btn default">
            <a href="#" class="toggle" gumby-trigger="#past-pres">Past Presidents<i class="icon-down-open-big"></i></a>
        </h4>
    <section class="row">
        <div class="drawer" id="past-pres" style="overflow-y: auto;">
            <div class="gen-div">
                <div class="gen-div-inner">
                    <?php while ( have_posts() ) : the_post(); ?>
                    <?php $content = get_the_content('',FALSE,''); // arguments remove 'more' text
                        echo multi_col($content);
                    ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
</section>

<?php wp_reset_query(); ?>
<?php get_footer(); ?>