<?php
/**
 * @package UGOKIE
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php the_title( '<h2 class="performance-title">', '</h2>' ); ?>

	<div class="performance-content">
		<p class="client"><?php the_field('クライアント',$post->ID); ?></p>
		<div id="sns_button">
<a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>" target="_blank"><span class="sns_count facebook"><?php echo get_facebook_like_count( get_the_permalink() );?></span></a>
<a href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=UGOKIE&" target="_blank"><span class="sns_count twitter"><?php echo get_twitter_tweet_count( get_the_permalink() );?></span></a>
</div>
		<p class="category"><span class="genre"><?php the_field('ジャンル',$post->ID); ?></span>&nbsp;&nbsp;<span class="plan"><?php the_field('プラン',$post->ID); ?></spn></p>
		<div class="performance-post"><?php the_content(); ?></div>
		<div class="performance-footer"><a href="../実績一覧">実績一覧へ戻る</a> ｜ <a href="<?php echo home_url(); ?>">トップページへ戻る</a></div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php ugokie_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
