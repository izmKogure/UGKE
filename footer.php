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
		<div id="call">
			<div class="wrapper">
				<ul>
					<li><a href="お問合せ"><img src="<?php bloginfo('template_directory');?>/images/button_shitumon.png" width="320" height="60" alt="ご質問・ご依頼はこちら"></a></li>
					<li>お電話でもお気軽にお問合せください<br><span><img src="<?php bloginfo('template_directory');?>/images/footer_icon_call.png" width="40" height="40"><span class="mgrr10">03-6416-3240</span></li>
					<li>受付時間 ／ 平日10:00〜20:00</li>
				</ul>
			</div>
		</div>
		<div id="serviceinfo">
			<div class="wrapper">
				<dl>
					<dt>
						<img src="<?php bloginfo('template_directory');?>/images/logo_1c.png" width="286" height="60" alt="動画制作をトータルサポート　UGOKIE">
					</dt>
					<dd>
						東京都渋谷区道玄坂2-15-1 ノア道玄坂6F<br>TEL / 03-6416-3240  FAX / 0120-000-0000
						<ul>
							<li><img src="<?php bloginfo('template_directory');?>/images/button_youtube.png" width="40" height="40" alt="Youtube"></li>
							<li><img src="<?php bloginfo('template_directory');?>/images/button_facebook.png" width="40" height="40" alt="Facebook"></li>
						</ul>
					</dd>
			</div>
		</div>
		<div id="boshu">
			<img src="<?php bloginfo('template_directory');?>/images/button_boshu.png" width="320" height="60" alt="クリエイター募集中 詳しくはこちら">
		</div>
		<div id="copyright">
			<div class="wrapper">
				2014 © UGOKIE<span><a href="会社概要">会社概要</a>　／　クリエイター募集　／　<a href="個人情報保護方針">個人情報保護方針</a></span>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
