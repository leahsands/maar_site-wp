<?php
 /*Template Name: Team Post
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

    <?php while ( have_posts() ) : the_post(); ?>
            <section class="three columns">
                <img src="<?php the_field('display_picture'); ?>" alt="" />
            </section>
            <section style="margin-top: 0;" class="five columns gen-div <?php echo esc_html( get_post_meta( get_the_ID(), 'team_category', true ) ); ?> team"> 
                <article class="gen-div-inner">
                    <p><?php echo esc_html( get_post_meta( get_the_ID(), 'team_position', true ) ); ?> <br />
                        <?php echo esc_html( get_post_meta( get_the_ID(), 'team_phone', true ) ); ?> <br />
                        <a href="mailto:<?php echo esc_html( get_post_meta( get_the_ID(), 'team_email', true ) ); ?>">
                            <?php echo esc_html( get_post_meta( get_the_ID(), 'team_email', true ) ); ?>
                        </a>
                    </p>
                </article>
            </section>
            <?php if($x == 3) { $x = -1; echo '</div><div class="row">'; } ?>
    <?php $x++; ?>
    <?php endwhile; ?>

    <div class="row">
        <section class="twelve columns">
            <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'team' ) ) ); ?>"><h4><i class="icon-left-open"></i>Go back to Team Members</h4></a>

<?php wp_reset_query(); ?>
<?php get_footer(); ?>