<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ACStarter
 */

get_header(); ?>

	<div id="primary" class="full-content-area clear">
		<main id="main" class="site-main subpage-content wrapper text-center" role="main">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'acstarter' ); ?></h1>
			</header><!-- .page-header -->
			<div class="page-content">
				<p><?php esc_html_e( 'Nothing was found at this location.', 'acstarter' ); ?></p>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
