<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package UGOKIE
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<div class="events_contents">
 
<h2 class="<?php echo esc_attr(get_post_type()); ?>"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h2>
<?php if(has_post_thumbnail()): ?>
<p><a href="<?php the_permalink(); ?>" ><?php the_post_thumbnail('medium'); ?></a></p>
<?php endif; ?>
 
</div><!-- end of .events_contents -->
<?php endwhile; endif; ?>
<?php pagenavi(); ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
