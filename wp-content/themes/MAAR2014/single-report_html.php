<?php
/*
Single Post Template: LMU Template
*/
?>

<?php get_header(); ?>

<!-- Page Content -->
<div class="maar-content-inner" id="top-page">

<div class="main-body row">
	<?php
		$reports = array(
			'post_status' => 'publish',
			'rewrite' => array('slug' => 'reports')
		);
    	$loop = new WP_Query( $reports );
		$x = 0;

	while ( $loop->have_posts() ) : $loop->the_post(); ?>
	<div class="row">
		<section class="twelve columns">
			<h1>Local Market Updates for <? the_title(); ?></h1>
		</section>
	</div>
	<div class="row">
		<div class="ten columns">
		<div class="row">
			<div class="btn default medium" style="margin: 22px 0 0 0">
				<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'market-data' ) ) ); ?>">Back to Archive</a>
			</div>
		</div>
		<div class="row">
			<div class="three columns">
			<p>
			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Twin-Cities.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Entire Twin Cities Area</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Afton.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Afton</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Albertville.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Albertville</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Andover.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Andover</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Annandale.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Annandale</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Anoka.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Anoka</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Anoka-County.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Anoka County</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Apple-Valley.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Apple Valley</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Arden-Hills.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Arden Hills</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Armatage.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Armatage</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Audubon-Park.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Audubon Park</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Bancroft.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Bancroft</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Bayport.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Bayport</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Baytown-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Baytown Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Becker.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Becker</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Belle-Plaine.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Belle Plaine</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Belle-Plaine-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Belle Plaine Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Beltrami.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Beltrami</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Benton-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Benton Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Bethel.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Bethel</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Big-Lake.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Big Lake</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Birchwood-Village.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Birchwood Village</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Blaine.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Blaine</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Blakeley-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Blakeley Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Bloomington.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Bloomington</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Bottineau.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Bottineau</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Brooklyn-Center.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Brooklyn Center</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Brooklyn-Park.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Brooklyn Park</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Bryant.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Bryant</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Bryn-Mawr.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Bryn Mawr</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Buffalo.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Buffalo</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Nowthen.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Burns Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Burnsville.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Burnsville</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Calhoun-CARAG.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Calhoun (CARAG)</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Cambridge.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Cambridge</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Camden-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Camden Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Cannon-Falls.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Cannon Falls</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Carver.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Carver</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Carver-County.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Carver County</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Castle-Rock-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Castle Rock Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Cedar-Lake-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Cedar Lake Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Cedar-Isles-Dean.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Cedar-Isles-Dean</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Cedar-Riverside.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Cedar-Riverside</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Centerville.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Centerville</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Central.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Central</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Champlin.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Champlin</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Chanhassen.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Chanhassen</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Chaska.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Chaska</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Chisago.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Chisago</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Chisago-County.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Chisago County</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Circle-Pines.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Circle Pines</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Clear-Lake.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Clear Lake</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Clearwater.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Clearwater</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Cleveland.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Cleveland</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Coates.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Coates</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Cokato.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Cokato</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Cologne.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Cologne</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Columbia-Heights.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Columbia Heights</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Columbia-Park.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Columbia Park</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Columbus.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Columbus</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Coon-Rapids.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Coon Rapids</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Cooper.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Cooper</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Corcoran.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Corcoran</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Corcoran-Neighborhood.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Corcoran Neighborhood</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Cottage-Grove.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Cottage Grove</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Credit-River-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Credit River Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Crystal.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Crystal</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Dahlgren-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Dahlgren Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Dakota-County.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Dakota County</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Dayton.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Dayton</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Deephaven.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Deephaven</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Delano.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Delano</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Dellwood.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Dellwood</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Diamond-Lake.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Diamond Lake</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Douglas-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Douglas Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Downtown-East-Mpls.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Downtown East - Mpls</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Downtown-West-Mpls.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Downtown West - Mpls</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Eagan.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Eagan</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/East-Bethel.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">East Bethel</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/East-Bloomington.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">East Bloomington</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/East-Calhoun.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">East Calhoun</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/East-Harriet.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">East Harriet</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/East-Isles.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">East Isles</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/East-Phillips.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">East Phillips</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Eden-Prairie.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Eden Prairie</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Edina.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Edina</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Elk-River.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Elk River</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Elko-New-Market.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Elko</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Elko-New-Market.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Elko New Market</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Elliot-Park.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Elliot Park</a><br /><? php ; } ?>

			</p>
			</div>

			<div class="three columns">
			<p>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Empire-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Empire Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Ericsson.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Ericsson</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Eureka-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Eureka Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Excelsior.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Excelsior</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Falcon-Heights.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Falcon Heights</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Faribault.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Faribault</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Farmington.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Farmington</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Field.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Field</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Folwell.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Folwell</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Forest-Lake.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Forest Lake</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Fridley.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Fridley</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Fulton.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Fulton</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Gem-Lake.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Gem Lake</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Golden-Valley.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Golden Valley</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Goodhue-County.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Goodhue County</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Grant.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Grant</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Greenfield.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Greenfield</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Greenvale-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Greenvale Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Greenwood.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Greenwood</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Grey-Cloud-Island-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Grey Cloud Island Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Hale.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Hale</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Ham-Lake.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Ham Lake</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Hamburg.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Hamburg</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Hammond.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Hammond</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Hampton.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Hampton</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/nodata.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Hampton Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Hancock-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Hancock Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Hanover.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Hanover</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Harrison.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Harrison</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Hassan-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Hassan Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Hastings.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Hastings</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Hawthorne.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Hawthorne</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Helena-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Helena Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Hennepin-County.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Hennepin County</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Hiawatha.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Hiawatha</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Hilltop.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Hilltop</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Holland.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Holland</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Hollywood-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Hollywood Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Hopkins.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Hopkins</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Howe.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Howe</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Hudson.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Hudson</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Hugo.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Hugo</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Hutchinson.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Hutchinson</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Independence.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Independence</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Inver-Grove-Heights.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Inver Grove Heights</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Isanti.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Isanti</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Isanti-County.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Isanti County</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Jackson-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Jackson Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Jordan.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Jordan</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Jordan-Neighborhood.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Jordan Neighborhood</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Kanabec-County.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Kanabec County</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Keewaydin.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Keewaydin</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Kenny.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Kenny</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Kenwood.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Kenwood</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Kenyon.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Kenyon</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Kingfield.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Kingfield</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Lake-Elmo.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Lake Elmo</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Lake-Minnetonka-Area.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Lake Minnetonka Area</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Lake-Saint-Croix-Beach.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Lake St. Croix Beach</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Lakeland.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Lakeland</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Lakeland-Shores.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Lakeland Shores</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Laketown-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Laketown Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Lakeville.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Lakeville</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/nodata.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Landfall</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Lauderdale.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Lauderdale</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Lexington.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Lexington</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Lilydale.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Lilydale</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Lind-Bohanon.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Lind-Bohanon</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Linden-Hills.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Linden Hills</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Lindstrom.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Lindstrom</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Lino-Lakes.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Lino Lakes</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Linwood-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Linwood Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Little-Canada.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Little Canada</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Logan-Park.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Logan Park</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Long-Lake.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Long Lake</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Longfellow.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Longfellow</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Lonsdale.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Lonsdale</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Loretto.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Loretto</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Loring-Park.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Loring Park</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Louisville-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Louisville Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Lowry-Hill.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Lowry Hill</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Lowry-Hill-East.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Lowry Hill East</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Lyndale.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Lyndale</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Lynnhurst.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Lynnhurst</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Mahtomedi.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Mahtomedi</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Maple-Grove.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Maple Grove</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Maple-Lake.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Maple Lake</a><br /><? php ; } ?>

			</p>
			</div>

			<div class="three columns">
			<p>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Maple-Plain.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Maple Plain</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Maplewood.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Maplewood</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Marcy-Holmes.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Marcy Holmes</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Marine-on-Saint-Croix.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Marine on St. Croix</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Marshall-Terrace.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Marshall Terrace</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Marshan-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Marshan-Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/May-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">May Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Mayer.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Mayer</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/McKinley.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">McKinley</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Medicine-Lake.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Medicine Lake</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Medina.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Medina</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Mendota.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Mendota</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Mendota-Heights.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Mendota Heights</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Midtown-Phillips.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Midtown Phillips</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Miesville.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Miesville</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Mille-Lacs-County.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Mille Lacs County</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Minneapolis.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Minneapolis</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Minneapolis-Calhoun-Isle.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Minneapolis - Calhoun-Isle</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Minneapolis-Camden.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Minneapolis - Camden</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Minneapolis-Central.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Minneapolis - Central</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Minneapolis-Longfellow.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Minneapolis - Longfellow</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Minneapolis-Near-North.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Minneapolis - Near North</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Minneapolis-Nokomis.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Minneapolis - Nokomis</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Minneapolis-Northeast.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Minneapolis - Northeast</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Minneapolis-Phillips.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Minneapolis - Phillips</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Minneapolis-Powderhorn.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Minneapolis - Powderhorn</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Minneapolis-Southwest.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Minneapolis - Southwest</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Minneapolis-University.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Minneapolis - University</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Minnehaha.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Minnehaha</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Minnetonka.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Minnetonka</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Minnetonka-Beach.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Minnetonka Beach</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Minnetrista.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Minnetrista</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Monticello.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Monticello</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Montrose.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Montrose</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Mora.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Mora</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Morris-Park.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Morris Park</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Mound.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Mound</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Mounds-View.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Mounds View</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Near-North.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Near North</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/New-Brighton.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">New Brighton</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/New-Germany.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">New Germany</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/New-Hope.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">New Hope</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Elko-New-Market.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">New Market</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/New-Market-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">New Market Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/New-Prague.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">New Prague</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/New-Richmond.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">New Richmond</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/New-Trier.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">New Trier</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Newport.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Newport</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Nicollet-Island-East-Bank.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Nicollet Island - East Bank</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Nininger-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Nininger Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/North-Branch.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">North Branch</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/North-Loop.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">North Loop</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/North-Oaks.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">North Oaks</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/North-Saint-Paul.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">North Saint Paul</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Northeast-Park.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Northeast Park</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Northfield.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Northfield</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Northrup.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Northrup</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Norwood-Young-America.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Norwood Young America</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Nowthen.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Nowthen</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Oak-Grove.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Oak Grove</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Oak-Park-Heights.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Oak Park Heights</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Oakdale.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Oakdale</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Orono.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Orono</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Osseo.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Osseo</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Otsego.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Otsego</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Page.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Page</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Phillips-West.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Phillips West</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Pine-City.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Pine City</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Pine-Springs.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Pine Springs</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Plymouth.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Plymouth</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Powderhorn-Park.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Powderhorn Park</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Princeton.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Princeton</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Prior-Lake.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Prior Lake</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Prospect-Park.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Prospect Park</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Ramsey.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Ramsey</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Ramsey-County.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Ramsey County</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Randolph.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Randolph</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Randolph-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Randolph Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Ravenna-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Ravenna Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Red-Wing.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Red Wing</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Regina.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Regina</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Rice-County.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Rice County</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Richfield.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Richfield</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/River-Falls.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">River Falls</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Robbinsdale.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Robbinsdale</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Rockford.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Rockford</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Rogers.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Rogers</a><br /><? php ; } ?>

			</p>
			</div>

			<div class="three columns">
			<p>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Rosemount.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Rosemount</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Roseville.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Roseville</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Rush-City.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Rush City</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Saint-Anthony.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Saint Anthony</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Saint-Anthony-East.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Saint Anthony East</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Saint-Anthony-West.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Saint Anthony West</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Saint-Bonifacius.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Saint Bonifacius</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Saint-Croix-County.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Saint Croix County</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Saint-Francis.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Saint Francis</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Saint-Lawrence-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Saint Lawrence Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Saint-Louis-Park.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Saint Louis Park</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Saint-Marys-Point.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Saint Mary's Point</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Saint-Michael.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Saint Michael</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Saint-Paul.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Saint Paul</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Saint-Paul-Park.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Saint Paul Park</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/San-Francisco-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">San Francisco Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Sand-Creek-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Sand Creek Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Savage.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Savage</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Scandia.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Scandia</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Sciota-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Sciota Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Scott-County.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Scott County</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Seward.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Seward</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Shakopee.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Shakopee</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Sherburne-County.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Sherburne County</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Sheridan.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Sheridan</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Shingle-Week.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Shingle Creek</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Shoreview.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Shoreview</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Shorewood.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Shorewood</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Somerset.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Somerset</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/South-Haven.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">South Haven</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/South-Saint-Paul.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">South Saint Paul</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Southeast-Como.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Southeast Como</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Spring-Lake-Park.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Spring Lake Park</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Spring-Lake-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Spring Lake Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Spring-Park.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Spring Park</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Saint-Paul-Battle-Creek-Highwood.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">St. Paul - Battle Creek - Highwood</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Saint-Paul-Como-Park.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">St. Paul - Como Park</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Saint-Paul-Daytons-Bluff.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">St. Paul - Dayton‘s Bluff</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Saint-Paul-Downtown.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">St. Paul - Downtown</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Saint-Paul-Greater-East-Side.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">St. Paul - Greater East Side</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Saint-Paul-Hamline-Midway.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">St. Paul - Hamline-Midway</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Saint-Paul-Highland-Park.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">St. Paul - Highland Park</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Saint-Paul-Lexington-Hamline.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">St. Paul - Lexington - Hamline</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Saint-Paul-Macalester-Groveland.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">St. Paul - Macalester-Groveland</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Saint-Paul-North-End.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">St. Paul - North End</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Saint-Paul-Payne-Phalen.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">St. Paul - Payne-Phalen</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Saint-Paul-Saint-Anthony-Park.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">St. Paul - Saint Anthony Park</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Saint-Paul-Summit-Hill.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">St. Paul - Summit Hill</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Saint-Paul-Summit-University.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">St. Paul - Summit-University</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Saint-Paul-Thomas-Dale.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">St. Paul - Thomas-Dale</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Saint-Paul-West-Seventh.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">St. Paul - West Seventh</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Saint-Paul-West-Side.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">St. Paul - West Side</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Stacy.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Stacy</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Standish.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Standish</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Stevens-Square.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Stevens Square</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Stillwater.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Stillwater</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Stillwater-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Stillwater Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Sumner-Glenwood.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Sumner-Glenwood</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Sunfish-Lake.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Sunfish Lake</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Tangletown.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Tangletown</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Tonka-Bay.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Tonka Bay</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/University-District.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">University District</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Vadnais-Heights.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Vadnais Heights</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Ventura-Village.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Ventura Village</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Vermillion.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Vermillion</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Vermillion-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Vermillion Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Victoria.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Victoria</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Victory.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Victory</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Waconia.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Waconia</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Waconia-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Waconia Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Waite-Park.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Waite Park</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Washington-County.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Washington County</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Waterford-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Waterford Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Watertown.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Watertown</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Watertown-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Watertown Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Wayzata.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Wayzata</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Webber-Camden.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Webber-Camden</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Wenonah.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Wenonah</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/West-Bloomington.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">West Bloomington</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/West-Calhoun.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">West Calhoun</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/West-Lakeland-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">West Lakeland Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/West-Saint-Paul.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">West Saint Paul</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/White-Bear-Lake.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">White Bear Lake</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/White-Bear-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">White Bear Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Whittier.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Whittier</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Willard-Hay.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Willard Hay</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Willernie.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Willernie</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Windom.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Windom</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Windom-Park.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Windom Park</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Woodbury.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Woodbury</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Woodland.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Woodland</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Wright-County.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Wright County</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Wyoming.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Wyoming</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Young-America-Township.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Young America Township</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Zimmerman.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Zimmerman</a><br /><? php ; } ?>

			<?php $filename = get_template_directory_uri() . '/lmu/' . esc_html( get_post_meta( get_the_ID(), 'yyyy-mm', true ) ) . '/Zumbrota.pdf';if (@fopen("$filename", "r")) { ?><a href="<?php echo $filename ?>" target="_blank">Zumbrota</a><br /><? php ; } ?>


			</p>
			</div> <!-- end three columns -->

		
		</div> <!-- end row -->

		<div class="row">
			<div class="btn default medium" style="margin: 22px 0 0 0;">
				<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'market-data' ) ) ); ?>">Back to Archive</a>
			</div>
		</div>
		</div> <!-- end ten columns -->
	</div>
	<?php endwhile; ?>
</div>


<?php get_footer(); ?>