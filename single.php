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

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

	<div class="entry-content">
		<h2 class="news-list">ニュース</h2>
			<dl class="news-list">
				<dt><p>2015年</p></dt>
					<dd>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p class="date"><?php the_time(Y年m月d日); ?></p>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(220,124)); ?></a>
					</dd>
					<?php //過去記事表示
						$post_id = get_the_ID();
						foreach((get_the_category()) as $cat) {
							$cat_id = $cat->cat_ID ;
							break ;
						}
						query_posts(
							array(
								'cat' => $cat_id,
								'showposts' => 5,
								'post__not_in' => array($post_id)
							)
						);
						if(have_posts()) :
					?>
						<?php while (have_posts()) : the_post(); ?>
						<dd>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p class="date"><?php the_time(Y年m月d日); ?></p>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(220,124)); ?></a>
						</dd>
						<?php endwhile; ?>
					<?php endif; ?>
				<?php wp_reset_query(); ?>
			</dl>
	</div><!-- .entry-content -->

</article>


		<?php endwhile; // end of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
