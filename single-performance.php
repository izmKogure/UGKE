<?php
/**
 * The template for displaying all single posts.
 *
 * @package UGOKIE
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_title( '<h1 class="performance-title">', '</h1>' ); ?>
			<div id="performancemovie">
				<?php the_field('実績映像',$post->ID); ?>
			</div>
			<?php get_template_part( 'content', 'single-performance' ); ?>
			<!-- <?php ugokie_post_nav(); ?>
			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<style type="text/css">
h1.performance-title {
	background-image:url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>);
}
</style>
<?php get_footer(); ?>
