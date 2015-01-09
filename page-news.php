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

		<?php query_posts('post_type=performance');
		if (have_posts()) : while (have_posts()) : the_post(); ?>
			<dl  class="performanceslist">
				<dt>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(220,124)); ?></a>
				</dt>
				<dd>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<p class="client"><?php the_field('クライアント',$post->ID); ?></p>
					<p class="category"><span class="genre"><?php the_field('ジャンル',$post->ID); ?></span>&nbsp;&nbsp;<span class="plan"><?php the_field('プラン',$post->ID); ?></spn></p>
					<?php the_content( $post->post_content ) ?>
				</dd>
			</dl>
		<?php endwhile; endif; wp_reset_query(); ?>


<?php get_footer(); ?>