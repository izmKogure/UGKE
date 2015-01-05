<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package UGOKIE
 */

get_header(); ?>
<h2 class="performance">実績一覧</h2>
	<ul>
		<?php query_posts('post_type=performance&showposts=4');
		if (have_posts()) : while (have_posts()) : the_post(); ?>
			<li><a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail(array(176,100)); ?></a>
			<p><span><?php the_time(Y年m月d日); ?></span><br>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
			<viddeo src="<?php the_field('実績動画',$post -> ID); ?>">
			<p><?php the_field('クライアント',$post->ID); ?></p>
			</li>
		<?php endwhile; endif; wp_reset_query(); ?>
	</ul>

<?php get_footer(); ?>