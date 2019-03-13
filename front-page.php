<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>
<div id="primary" class="full-content-area wrapper home-content clear">
	<main id="main" class="site-main clear" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php  
				$intro_title = get_field('intro_title');
				$intro_text = get_field('intro_text');
			?>
		<?php endwhile; ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_template_part('template-parts/restaurants');  ?>	

<?php
get_footer();
