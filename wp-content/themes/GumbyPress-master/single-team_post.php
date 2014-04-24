<?php
 /*Template Name: Team
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

    $team_members = array(
        'post_type' => 'team_post',
    );
    $loop = new WP_Query( $team_members );
    ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post();?>

            <section class="three columns gen-div <?php echo esc_html( get_post_meta( get_the_ID(), 'team_category', true ) ); ?> team"> 
                <h3 class="gen-div-header"><?php the_title(); ?></h3>
                <article class="gen-div-inner">
                    <article class="twelve columns">
                        <?php the_post_thumbnail(); ?>
                    </article>
                    <p><?php echo esc_html( get_post_meta( get_the_ID(), 'team_position', true ) ); ?> <br />
                        <?php echo esc_html( get_post_meta( get_the_ID(), 'team_phone', true ) ); ?> <br />
                        <a href="mailto:<?php echo esc_html( get_post_meta( get_the_ID(), 'team_email', true ) ); ?>">
                            <?php echo esc_html( get_post_meta( get_the_ID(), 'team_email', true ) ); ?>
                        </a>
                    </p>
                </article>
            </section>

    <?php endwhile; ?>
</div>

<?php wp_reset_query(); ?>
<?php get_footer(); ?>