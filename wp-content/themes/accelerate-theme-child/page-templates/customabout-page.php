<?php
/**
 * Template Name: Full Width Page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div id="primary" class="home-page hero-content">
	<div class="main-content" role="main">
		<?php while (have_posts() ) : the_post();
		$content = get_field("content");
		$title_1 = get_field("title_1");
		$content_1 = get_field("content_1");
		$content_image_1 = get_field("content_image_1");
		$title_2 = get_field("title_2");
		$content_2 = get_field("content_2");
		$content_image_2 = get_field("content_image_2");
		$title_3 = get_field("title_3");
		$content_3 = get_field("content_3");
		$content_image_3 = get_field("content_image_3");
		$title_4 = get_field("title_4");
		$content_4 = get_field("content_4");
		$content_image_4 = get_field("content_image_4");
		$size = "small";
	 ?>
		<p class = "about-intro">Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</p>

	</div><!-- .main-content -->
</div><!-- #primary -->

<section class="about-services">
	<div class="page-content">
		<h4>Our Services</h4>
			<p class = "about-serv"><?php echo $content; ?></p>
					 <article class="about-us">
					 	<aside class="about-us-sidebar">
							<div class = "individual-image">
									<?php echo wp_get_attachment_image($content_image_1, $size); ?>
							</div>
							<div class = "about-content strategy"><h5><?php echo $title_1; ?></h5><?php echo $content_2; ?></div>

							<div class = "individual-mapping-image">
									<?php echo wp_get_attachment_image($content_image_2, $size); ?>
							</div>
							<div class = "about-influencer-content"><h5><?php echo $title_2; ?></h5><?php echo $content_2; ?></div>

							<div class = "individual-socialmedia-image">
									<?php echo wp_get_attachment_image($content_image_3, $size); ?>
							</div>

							<div class = "about-socialmedia-content"><h5><?php echo $title_3; ?></h5><?php echo $content_3; ?></div>

							<div class = "individual-designdev-image">
									<?php echo wp_get_attachment_image($content_image_4, $size); ?>
							</div>
							<div class = "about-designdev-content"><h5><?php echo $title_4; ?></h5><?php echo $content_4; ?></div>

					 	</aside>
					 </article>

			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
