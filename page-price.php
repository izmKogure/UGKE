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
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
<?php
/*
Template Name: content-page-price
*/
?>
<div id="price">
<section>
<div class="pricewrapper">
	<h2 class="price1">UGOKIEのサービスとは？</h2>
	<p>UGOKIEは、映像の制作からアフターフォロー(映像の再活用)までをトータルサポートする動画制作サービスです。<br>“ただ作って終わり”ではなく、一度配信した動画の新たな使い道の提案や、再編集まで徹底サポート致します。</p>
	<hr>
	<h3 class="pink mgrb40">アフターフォローが他社にはない最大の魅力</h3>
	<table class="price-top">
		<tr>
			<td>
				<img src="<?php bloginfo('template_directory');?>/images/price_01.png" width="444" height="432" class="left-image">
			</td>
			<td class="text">
				<p class="mgrb20">UGOKIEは、映像プランの提案から動画やナレーションの収録、映像編集、納品まで全てを私たちが一元管理して実制作を進めます。そして更に、納品後のアフターフォローまで発展させた動画制作サービスが、UGOKIEのトータルサポートです。</p>
				<div class="center"><a class="afterfollow_button" href="アフターフォロー"><span>アフターフォローを見る</span></a></div>
			</td>
		</tr>
	</table>
</div>
</section>

<section class="gray" id="4price">
	<div class="pricewrapper">
		<h2 class="price2">料金プラン</h2>
		<h3 class="pink">初めて動画に取組む企業でも導入しやすい価格を実現</h3>
		<p>9.8万円のプランからオリジナルプランまで、４つのコースを予めご用意しています。<br>予算や制作内容にマッチしたプランをお選び頂くだけで、難解な見積書に目を通す必要もありません。
	</p>
	<hr>
	<img src="<?php bloginfo('template_directory');?>/images/price_ill_01.png" width="960" height="675" class="price-ill">
	<ul class="kome">
		<li>シンプルプラン・スタンダードプランは、お客様に事前にご記入頂くシナリオボードに沿って動画制作を進めます。</li>
		<li>スタンダードプラン・ディレクターズプランでの動画撮影は、お客様の立ち会いを必須と致しますが、<br>再収録の対応ができかねる事をご理解頂ける場合に限り、立ち会いは必須ではございません。</li>
		<li>オリジナルプランはフルオーダーメイドまで対応可能なため、特別な制限はありません。</li>
	</ul>
</div>
</section>

<section id="seisakuflow">
	<div class="pricewrapper">
		<h2 class="price3">制作フロー</h2>
		<h3 class="pink">UGOKIEが一貫してクオリティ管理を実施</h3>
		<p class="mgrb60">クラウドソーシング等でありがちな「納期になっても提案がない…」「こちらの要望とかけ離れている…」というような苦労とは無縁です。</p>
		<div class="center"><img src="<?php bloginfo('template_directory');?>/images/price_button_01.png" width="358" height="30" alt="シナリオボードをダウンロードする"></div>
		<hr>
<?php echo do_shortcode('
[su_tabs]
  [su_tab title="シンプルプラン"]<div class="tab1"></div>[/su_tab]
  [su_tab title="スタンダードプラン"]<div class="tab2"></div>[/su_tab]
  [su_tab title="ディレクターズプラン"]<div class="tab3"></div>[/su_tab]
[/su_tabs]
'); ?>
</div>
</section>

<section class="gray" id="genre">
	<div class="pricewrapper">
		<h2 class="price4">幅広い動画に対応し、社内向けも強化</h2>
		<p>ひとことで“動画”といっても、目的に応じた様々な動画ジャンルがあります。<br>UGOKIEは、WebCMからアプリ紹介ムービー、更に社内向けビデオにも力を入れ、お客様の求める最適な動画活用を実現致します。</p>
		<hr>
		<div class="wrapper" >
					<dl class="price-genre">
						<dt><img src="<?php bloginfo('template_directory');?>/images/icon_top_01.png" width="225" height="134" alt="CM"></dt>
						<dd><a><span>CM</span><br>WebCMから店頭用ムービー、YouTube動画広告まで</a></dd>
					</dl>
					<dl class="price-genre">
						<dt><img src="<?php bloginfo('template_directory');?>/images/icon_top_02.png" width="225" height="134" alt="CM"></dt>
						<dd><a><span>アプリ紹介</span><br>アプリのプロモーションから操作説明まで</a></dd>
					</dl>
					<dl class="price-genre">
						<dt><img src="<?php bloginfo('template_directory');?>/images/icon_top_03.png" width="225" height="134" alt="CM"></dt>
						<dd><a><span>展示会・イベント</span><br>ブースの演出映像や商品説明で集客力アップ</a></dd>
					</dl>
					<dl class="price-genre last">
						<dt><img src="<?php bloginfo('template_directory');?>/images/icon_top_04.png" width="225" height="134" alt="CM"></dt>
						<dd><a><span>採用</span><br>新卒や中途採用向け動画で企業イメージを伝える</a></dd>
					</dl>
				<div class="clearfix"></div>
				</div>
				</ul>
				<div class="wrapper" >
					<dl class="price-genre mgrb20">
						<dt><img src="<?php bloginfo('template_directory');?>/images/icon_top_05.png" width="225" height="134" alt="CM"></dt>
						<dd><a><span>営業ツール</span><br>タブレット上で動画をみせてより直感的に</a></dd>
					</dl>
					<dl class="price-genre mgrb20">
						<dt><img src="<?php bloginfo('template_directory');?>/images/icon_top_06.png" width="225" height="134" alt="CM"></dt>
						<dd><a><span>セミナー</span><br>会場で上映する映像や、ネット上で配信するEラーニングまで</a></dd>
					</dl>
					<dl class="price-genre mgrb20">
						<dt><img src="<?php bloginfo('template_directory');?>/images/icon_top_07.png" width="225" height="134" alt="CM"></dt>
						<dd><a><span>会社紹介</span><br>沿革映像や業務紹介ビデオで信用と理解を高める</a></dd>
					</dl>
					<dl class="price-genre mgrb20 last">
						<dt><img src="<?php bloginfo('template_directory');?>/images/icon_top_08.png" width="225" height="134" alt="CM"></dt>
						<dd><a><span>施設・店舗紹介</span><br>歴史的建造物や大型娯楽施設のフロア案内まで</a></dd>
					</dl>
				<div class="clearfix"></div>
				<p class="mgrb40"><span>※消費者向けに商品の販売促進や会社のPＲ等を目的とする映像</span></p>
				</div>
				<div class="wrapper" >
				<h3 class="pink">社内向けの動画ジャンルまでカバー</h3>
					<dl class="price-genre mgrb20">
						<dt><img src="<?php bloginfo('template_directory');?>/images/icon_top_09.png" width="225" height="134" alt="CM"></dt>
						<dd><a><span>プレゼン</span><br>動画でポイントをより伝わりやすく印象に残る発表に</a></dd>
					</dl>
					<dl class="price-genre mgrb20">
						<dt><img src="<?php bloginfo('template_directory');?>/images/icon_top_10.png" width="225" height="134" alt="CM"></dt>
						<dd><a><span>マニュアル</span><br>説明書では表現が難しい操作方法を動画で詳しく</a></dd>
					</dl>
					<dl class="price-genre mgrb20">
						<dt><img src="<?php bloginfo('template_directory');?>/images/icon_top_11.png" width="225" height="134" alt="CM"></dt>
						<dd><a><span>教育研修</span><br>映像上映で効率的かつ、分かりやすい講座を実現</a></dd>
					</dl>
					<dl class="price-genre mgrb20 last">
						<dt><img src="<?php bloginfo('template_directory');?>/images/icon_top_12.png" width="225" height="134" alt="CM"></dt>
						<dd><a><span>記念行事</span><br>総会や式典、社員旅行まで行事ごとはしっかり映像で保管</a></dd>
					</dl>
				<div class="clearfix"></div>
				</div>
		<p><span>※会社のスタッフや関係者向けに交流や現場改善等を目的とする映像</span></p>
	</div>
</section>
</div>
<style type="text/css">
h1.entry-title {
	background-image:url(<?php bloginfo('template_directory');?>/images/headerimg_price.png);
}
</style>
<?php get_footer(); ?>