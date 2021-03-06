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
		<h2 class="news-list">UGOKIE Lab.</h2>
<?php $args = array(
	'hide_empty'         => 0,
	'exclude'       => '1',
	'title_li'           => ''
); ?>
			<dl class="news-list clearfix lab">
				<dt class="lab"><span class="lablist">記事一覧</span><li class="all"><a href="/lab">すべて</a></li><?php wp_list_categories( $args ); ?></dt>
					<dd class="lab">
						<?php the_category(); ?>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p class="date"><?php the_time(Y年m月d日); ?></p>
						<?php the_tags( '<ul class="lab-tag"><li>','</li><li>','</li></ul>' ); ?>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(630,335)); ?></a>
						<div id="sns_button">
							<a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>" target="_blank"><span class="sns_count facebook"><?php echo get_facebook_like_count( get_the_permalink() );?></span></a>
							<a href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=UGOKIE&" target="_blank"><span class="sns_count twitter"><?php echo get_twitter_tweet_count( get_the_permalink() );?></span></a>
						</div>
						<?php the_content( $post->post_content ) ?>
					</dd>
					
			</dl>
	</div><!-- .entry-content -->

</article>


		<?php endwhile; // end of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<style type="text/css">
h1.entry-title {
	background-image:url(<?php bloginfo('template_directory');?>/images/headerimg_blog.png);
}
div.entry-content h2 {
	background: url(<?php bloginfo('template_directory');?>/images/background_h2_lab.png) no-repeat left 50%;
}
</style>
<?php get_footer(); ?>
