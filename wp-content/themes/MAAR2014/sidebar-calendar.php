<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('home-calendar') ) : else : ?>

	<style>
		caption { display: none; }
		tfoot { display: none; }
		table thead th,
		table tbody td,
		table tr td { padding: 0 10px; }
	</style>

<?php endif; ?>
