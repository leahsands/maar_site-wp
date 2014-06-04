<?php
 /*Template Name: Community 
 */
 
get_header(); ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="maar-content-inner">

<div class="main-body row">
    <div class="row">
        <section class="twelve columns">
            <h1><?php the_title(); ?></h1>
        </section>
    </div>
    <div class="row">
        <div class="eight columns">
            <section class="row gen-div">
                <div class="gen-div-inner">
                    <?php the_field('community_description'); ?>
                </div>
            </section>
            <section class="row gen-div">
                <div class="four columns community">
                    <img src="<?php the_field('community_image'); ?>">
                </div>
                <div class="eight columns">
                    <div class="gen-div-header">
                        <h4>Community Members</h4>
                    </div>
                    <div class="gen-div-inner">
                        <?php the_field('community_members'); ?>
                    </div>
                </div>
            </section>
            <section class="row gen-div">
                <?php the_field('community_more_info'); ?>
            </section>
        </div>
        <div class="four columns">
            <section class="row gen-div">
                <div class="gen-div-inner">
                    <?php the_field('community_social'); ?>
                </div>
            </section>
        </div>
    </div>
</div>
    
<?php wp_reset_query(); ?>
<?php get_footer(); ?>