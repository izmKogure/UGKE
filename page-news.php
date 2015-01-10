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
<h2 class="news-list">ニュース</h2>
			<dl class="news-list">
				<dt><p>2015年</p></dt>
		<?php query_posts();
		if (have_posts()) : while (have_posts()) : the_post(); ?>
			<dd>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<p class="date"><?php the_time(Y年m月d日); ?></p>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(220,124)); ?></a>
					<?php the_content( $post->post_content ) ?>
				</dd>
		<?php endwhile; endif; wp_reset_query(); ?>
			</dl>

<?php get_footer(); ?>