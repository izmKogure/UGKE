<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UGOKIE
 */
?>

	</div><!-- #content -->

	<footer role="contentinfo">
		<div class="footer-top">
			<div class="wrapper right">
				<p id="pagetop"><a id="move-page-top">▲&nbsp;ページトップへ</a></p>
			</div>
			<div id="call">
				<div class="wrapper">
					<ul>
						<li><a href="お問合せ" class="otoiawase"><span>ご質問・ご依頼はこちら</span></a></li>
						<li><img src="<?php bloginfo('template_directory');?>/images/otoiawase_footer_03.png" width="640" height="60" alt="動画制作をトータルサポート　UGOKIE"></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div id="serviceinfo">
				<div class="wrapper">
					<dl>
						<dt>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('template_directory');?>/images/logo_1c.png" width="286" height="60" alt="動画制作をトータルサポート　UGOKIE"></a>
						</dt>
						<dd>
							東京都渋谷区道玄坂2-15-1 ノア道玄坂6F<br>TEL / 03-6416-3240
							<ul>
								<li><a class="youtube" href="https://www.youtube.com/channel/UCfVs6zmdQzz-xxdG8B5WTyw" target="_blank"><span>YouTube</span></a></li>
								<li><a class="facebook" href="https://www.facebook.com/ugokie" target="_blank"><span>Facebook</span></a></li>
							</ul>
						</dd>
				</div>
			</div>
			<div id="boshu">
				<a href="クリエイター募集"><span>クリエイター募集中　詳しくはこちら</span></a>
			</div>
			<div id="copyright">
				<div class="wrapper">
					2014 © UGOKIE<span><a href="会社概要">会社概要</a>　／　<a href="クリエイター募集">クリエーター募集</a>　／　<a href="個人情報保護方針">個人情報保護方針</a></span>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
