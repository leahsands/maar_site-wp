<?php
 /*Template Name: Ordinance Post
 */
 
get_header(); ?>
<div class="maar-content-inner">

<div class="main-body row">
    <div class="row">
        <section class="twelve columns">
            <a href="<?php echo esc_html( get_post_meta( get_the_ID(), 'website', true ) ); ?>" target="_blank"><h1 style="float: left;"><?php the_title(); ?></h1></a>
            <div class="btn default medium" style="margin: 22px 0 0 12px;">
                <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'laws-regulations' ) ) ); ?>">Back to the Map</a>
            </div>
        </section>
    </div>

    <div class="row">

    <?php while ( have_posts() ) : the_post(); ?>
            <section class="four columns push_eight">
                <div class="row">
                    <div class="gen-div">
                        <div class="gen-div-inner">
                            <?php if ( get_post_meta($post->ID, 'city', true) ) : ?>
                            <h6>Address</h6>
                            <p><?php echo esc_html( get_post_meta( get_the_ID(), 'address1', true ) ); ?><br />
                            <?php echo esc_html( get_post_meta( get_the_ID(), 'city', true ) ); ?>, <?php echo esc_html( get_post_meta( get_the_ID(), 'zip', true ) ); ?></p>
                            <?php endif; ?>
                            
                            <?php if ( get_post_meta($post->ID, 'phonenumber', true) ) : ?>
                            <h6>Phone Number</h6>
                            <p><?php echo esc_html( get_post_meta( get_the_ID(), 'phonenumber', true ) ); ?></p>
                            <?php endif; ?>

                            <?php if ( get_post_meta($post->ID, 'website', true) ) : ?>
                            <div class="btn medium primary">
                                <a href="<?php echo esc_html( get_post_meta( get_the_ID(), 'website', true ) ); ?>" target="_blank">Website</a>
                            </div>
                            <?php endif; ?>

                            <?php if ( get_post_meta($post->ID, 'email', true) ) : ?>
                            <div class="btn medium primary">
                                <a href="mailto:<?php echo esc_html( get_post_meta( get_the_ID(), 'email', true ) ); ?>">Email</a>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="row main-body">
                    <p class="alignright"><em>Date last modified: <?php if( get_the_modified_date() != get_the_date() ) echo the_modified_date();?></em></p>
                </div>
            </section>

            <section class="eight columns pull_four">
                <?php if ( get_post_meta($post->ID, 'sign_ordinance', true) ) : ?>
                    <div class="row">
                        <h2>Sign Ordinances</h2>
                        <p><?php the_field('sign_ordinance'); ?></p>
                    </div>
                <?php endif; ?>

                <?php if ( get_post_meta($post->ID, 'tos2', true) ) : ?>
                    <div class="row">
                        <h2>Time-of-Sale Ordinance</h2>
                        <p><?php the_field('tos2'); ?></p>
                    </div>
                <?php endif; ?>


                <?php if ( get_post_meta($post->ID, 'vacant-prop', true) ) : ?>
                    <div class="row">
                        <h2>Vacant Property Registration</h2>
                        <p><?php the_field('vacant-prop'); ?></p>
                    </div>
                <?php endif; ?>

                <?php if ( get_post_meta($post->ID, 'rental-reg', true) ) : ?>
                    <div class="row">
                        <h2>Rental Regulations</h2>
                        <p><?php the_field('rental-reg'); ?></p>
                    </div>
                <?php endif; ?>
            </section>

            
            <?php if($x == 3) { $x = -1; echo '</div><div class="row">'; } ?>
    <?php $x++; ?>
    <?php endwhile; ?>
</div>
<div class="row main-body">
    <section class="ten columns">
        <div class="btn default medium">
            <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'laws-regulations' ) ) ); ?>">Back to the Map</a>
        </div>
    </section>
</div>

<?php wp_reset_query(); ?>
<?php get_footer(); ?>