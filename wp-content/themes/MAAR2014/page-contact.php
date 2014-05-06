<?php
 /*Template Name: Contact
 */
 get_header(); ?>

<!-- Page Content -->
<div class="maar-content-inner">

<div class="main-body row">
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="row">
		<section class="twelve columns">
			<h1><?php the_title(); ?></h1>
		</section>
	</div>
	<div class="row">
		<section class="eight columns field">
		<?php the_content(); ?>
		</section>
		<section class="four columns">
			<h4>Address</h4>
			<p>Minneapolis Area Association of REALTORS&reg;<br />
			5750 Lincoln Drive, Minneapolis, MN 55436<br />
			952.933.9020 • 952.933.9021 (fax)</p>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2826.126381014509!2d-93.39990660000001!3d44.90042479999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87f621c779db5991%3A0x5e30239602f63c5e!2s5750+Lincoln+Dr!5e0!3m2!1sen!2sus!4v1396892542519" frameborder="0" style="border:0; width: 100%; height: 400px; "></iframe>
		</section>
	</div>
	<?php endwhile; ?>
</div>


<?php get_footer(); ?>