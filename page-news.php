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
<h2 class="news">ニュース</h2>
			<dl>
				<dt>2015年</dt>
		<?php query_posts();
		if (have_posts()) : while (have_posts()) : the_post(); ?>



				<dd>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(220,124)); ?></a>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<?php the_time(Y年m月d日); ?>
					<?php the_content( $post->post_content ) ?>
				</dd>
			</dl>
		<?php endwhile; endif; wp_reset_query(); ?>


<?php get_footer(); ?>