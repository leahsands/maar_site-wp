<?php
 /*Template Name: Leadership Post
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
                <?php the_post_thumbnail(); ?>
            </section>
            <section style="margin-top: 0;" class="five columns gen-div <?php echo esc_html( get_post_meta( get_the_ID(), 'leadership_category', true ) ); ?> team"> 
                <article class="gen-div-inner">
                    <p><?php echo esc_html( get_post_meta( get_the_ID(), 'leadership_position', true ) ); ?> <br />
                        <a href="mailto:<?php echo esc_html( get_post_meta( get_the_ID(), 'leadership_email', true ) ); ?>">
                            <?php echo esc_html( get_post_meta( get_the_ID(), 'leadership_email', true ) ); ?>
                        </a><br />
                        <span><?php echo date('Y'); ?> <?php echo esc_html( get_post_meta( get_the_ID(), 'leadership_category', true ) ); ?> </span>
                    </p>
                </article>
            </section>
            <?php if($x == 3) { $x = -1; echo '</div><div class="row">'; } ?>
    <?php $x++; ?>
    <?php endwhile; ?>

    <div class="row">
        <section class="twelve columns">
            <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'leadership' ) ) ); ?>"><h4><i class="icon-left-open"></i>Go back to Leadership</h4></a>

<?php wp_reset_query(); ?>
<?php get_footer(); ?>