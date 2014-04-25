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

    $leadership_members = array( 'post_type' => 'leadership_post' );
    $loop = new WP_Query( $leadership_members );
    $x = 0;
    
    while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <section class="three columns gen-div team" style="padding-bottom: 0;"> 
                <h3 class="gen-div-header"><?php the_title(); ?></h3>
                <article class="gen-div-inner">
                    <article class="twelve columns">
                        <?php the_post_thumbnail(); ?>
                    </article>
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

<?php wp_reset_query(); ?>
<?php get_footer(); ?>