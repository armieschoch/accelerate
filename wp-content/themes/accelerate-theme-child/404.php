<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Whoopsss, Took a Wrong Turn...'); ?></h1>
			</header>

			<div class="page-content">
				<p class="page404-content"><?php _e( 'Sorry, this page no longer exists, never existed or has been moved.'); ?></p>
				<p class="page404-content"><?php _e('Feel free to take a look around our blog or some of our featured work'); ?> </p>
				<p class="page404-content"><?php _e('Maybe try a search?'); ?></p>

				<?php get_search_form(); ?>
			</div><!-- .page-content -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php
// get_sidebar( 'content' );
// get_sidebar();
// get_footer();
