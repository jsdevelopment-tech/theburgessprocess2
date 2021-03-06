<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Bouquet
 */

get_header(); ?>

	<div id="content-wrapper">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php comments_template(); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #content-wrapper -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>