<?php
/**
 * @package UGOKIE
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php the_title( '<h2 class="performance-title">', '</h2>' ); ?>

	<div class="performance-content">
		<p class="client"><?php the_field('クライアント',$post->ID); ?></p>
		<ul class="snsb">
			<li class="twitter-button"><a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></li>
			<li class="facebook-button"><div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&appId=758942267458537&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div></li>
		</ul>
		<p class="category"><span class="genre"><?php the_field('ジャンル',$post->ID); ?></span>&nbsp;&nbsp;<span class="plan"><?php the_field('プラン',$post->ID); ?></spn></p>
		<div class="performance-post"><?php the_content(); ?></div>
		<div class="performance-footer"><a href="../実績一覧">実績一覧へ戻る</a> ｜ <a href="<?php echo home_url(); ?>">トップページへ戻る</a></div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php ugokie_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
