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
								<li><a class="youtube" href="http://www.youtube.com" target="_blank"><span>YouTube</span></a></li>
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
<script type="text/javascript">
jQuery(function(){
  jQuery(window).scroll(function(){
    //最上部から現在位置までの距離を取得して、変数[now]に格納
    var now = jQuery(window).scrollTop();
    //最上部から現在位置までの距離(now)が600以上
    if(now > 600){
      //[#page-top]をゆっくりフェードインする
      jQuery('#page-top').fadeIn('slow');
      //それ以外だったらフェードアウトする
    }else{
      jQuery('#page-top').fadeOut('slow');
    }
  });
  //ボタン(id:move-page-top)のクリックイベント
  jQuery('#move-page-top').click(function(){
  //ページトップへ移動する
  jQuery('body,html').animate({
          scrollTop: 0
      }, 800);
  });
});
</script>
<script type="text/javascript">
jQuery(function(){
     var jQueryelem = jQuery(".footer-top"), //表示の操作をするオブジェクト(フッター)
               jQuerycontent = jQuery("footer"), //表示を変更する基準となるオブジェクト
               jQuerywin = jQuery(window); //windowオブジェクト

     var contentTop = 0; //表示変更をする基準点

     jQuerywin
          .load(function(){
               updatePosition();
               update();
          })
          .resize(function(){
               updatePosition();
               update();
          })
          .scroll(function(){
               update();
          });


     // HTMLが動的に変わることを考えて、contentTopを最新の状態に更新します
     function updatePosition(){
          contentTop = jQuerycontent.offset().top + jQueryelem.outerHeight();
     }

     // スクロールのたびにチェック
     function update(){
          // 現在のスクロール位置 + 画面の高さで画面下の位置を求めます
          if( jQuerywin.scrollTop() + jQuerywin.height() > contentTop ){
               jQueryelem.addClass("static");
          }else if( jQueryelem.hasClass("static") ){
               jQueryelem.removeClass("static");
          }
     }
}); 
</script>
</body>
</html>
