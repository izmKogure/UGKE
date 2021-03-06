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
<header class="entry-header">
	<h1 class="entry-title">UGOKIE Lab.</h1>
</header>
<div class="entry-content">
<h2 class="news-list">UGOKIE Lab.</h2>
<?php $args = array(
	'hide_empty'         => 0,
	'exclude'       => '1',
	'title_li'           => ''
); ?>
			
			<dl class="news-list clearfix lab">
				<dt class="lab"><span class="lablist">記事一覧</span><li class="all"><a href="/lab">すべて</a></li><?php wp_list_categories( $args ); ?></dt>
		<?php query_posts('post_type=lab');
		if (have_posts()) : while (have_posts()) : the_post(); ?>
			<dd class="lab">
					<?php the_category(); ?>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<p class="date"><?php the_time(Y年m月d日); ?></p>
					<?php the_tags( '<ul class="lab-tag"><li>','</li><li>','</li></ul>' ); ?>
					<div class="labnew-wrapper">
						<?php the_content( $post->post_content ) ?>
								<?php
									$days = 7; //Newマーク表示の日数
									$daysInt = ($days-1)*86400;
									$today = time();
									$entry = get_the_time('U');
									$dayago = $today-$entry;
									    if ($dayago < $daysInt) {
									    $blogUrl = get_bloginfo('template_url');
									    echo '<div class="new">New</div>';
									    }
								?>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(630,355)); ?></a>
					</div>
					<div id="sns_button">
						<a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>" target="_blank"><span class="sns_count facebook"><?php echo get_facebook_like_count( get_the_permalink() );?></span></a>
						<a href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=UGOKIE&" target="_blank"><span class="sns_count twitter"><?php echo get_twitter_tweet_count( get_the_permalink() );?></span></a>
					</div>
					<a href="<?php the_permalink(); ?>" class="more"><span>この記事を見る</span></a>
				</dd>
<?php endwhile; else: ?>
			<dd>
			<p>UGOKIE lab. 近日公開予定！</p>
			</dd>
		<?php endif; wp_reset_query(); ?>
			</dl>
			<div class="clearfix"></div>
</div>
<style type="text/css">
h1.entry-title {
	background-image:url(<?php bloginfo('template_directory');?>/images/headerimg_blog.png);
}
div.entry-content h2 {
	background: url(<?php bloginfo('template_directory');?>/images/background_h2_lab.png) no-repeat left 50%;
}
</style>
<?php get_footer(); ?>