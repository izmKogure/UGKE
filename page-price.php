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
	<p>UGOKIEは、映像の制作からアフターフォロー(映像の再活用)までをトータルサポートする動画制作サービスです。“ただ作って終わり”ではなく、一度配信した動画の新たな使い道提案や、再編集まで徹底サポート致します。</p>
	<hr>
	<table>
		<tr>
			<td>
				<img src="<?php bloginfo('template_directory');?>/images/price_01.png" width="441" height="430" class="left-image">
			</td>
			<td class="text">
				<h3>アフターフォローが<br>他社にはない最大の魅力</h3>
				<p>私たちは様々な配信媒体を分析し、配信時により視聴者に響く映像制作を心がけています。“ただ作るだけでは終わらない”を意識して制作したUGOKIEの動画事例を是非ご覧ください。</p>
				<div class="center"><img src="<?php bloginfo('template_directory');?>/images/price_moreafter.png" width="290" height="80"></div>
			</td>
		</tr>
	</table>
</div>
</section>

<section class="gray">
	<div class="pricewrapper">
		<h2 class="price2">料金プラン</h2>
		<h3 class="pink">初めて動画に取組む企業でも導入しやすい価格を実現</h3>
		<p>9.8万円のプランからオリジナルプランまで、４つのコースを予めご用意しています。<br>予算や制作内容にマッチしたプランをお選び頂くだけで、難解な見積書に目を通す必要もありません。
	</p>
	<hr>
	<img src="<?php bloginfo('template_directory');?>/images/price_ill_01.png" width="960" height="675" class="price-ill">
	<ul class="kome">
		<li>シンプルプラン・スタンダードプランは、お客様に事前にご記入頂くシナリオボードに沿って動画制作を進めます。</li>
		<li>スタンダードプラン・ディレクターズプランでの動画撮影やナレーション収録は、お客様の立ち会いを必須と致しますが、<br>再収録の対応ができかねる事をご理解頂ける場合に限り、立ち会いは必須ではございません。</li>
		<li>オリジナルプランはフルオーダーメイドまで対応可能なため、特別な制限はありません。</li>
	</ul>
</div>
</section>

<section>
	<div class="pricewrapper">
		<h2 class="price3">制作フロー</h2>
		<h3 class="pink">UGOKIEが一貫してクオリティ管理を実施</h3>
		<p class="mgrb60">クラウドソーシング等でありがちな「納期になっても提案がない…」「こちらの要望とかけ離れている…」というような苦労とは無縁です。</p>
		<div class="center"><img src="<?php bloginfo('template_directory');?>/images/price_button_01.png" width="358" height="30" alt="シナリオボードをダウンロードする"></div>
		<hr>
		<ul class="tag">
			<li>シンプルプラン</li>
			<li>スタンダードプラン</li>
			<li>ディレクターズプラン</li>
		</ul>
<img src="<?php bloginfo('template_directory');?>/images/price_ill_tag01.png" width="960" height="620">
</div>
</section>

<section class="gray">
	<div class="pricewrapper">
		<h2 class="price4">幅広い動画に対応し、社内向けも強化</h2>
		<p>ひとことで“動画”といっても、目的に応じた様々な動画ジャンルがあります。<br>UGOKIEは、WebCMからアプリ紹介ムービー、更に社内向けビデオにも力を入れ、お客様の求める最適な動画活用を実現致します。</p>
		<hr>
		<ul class="price-genre">
			<li><img src="<?php bloginfo('template_directory');?>/images/icon_cm.png" width="168" height="101" alt="CM">CM</li>
			<li><img src="<?php bloginfo('template_directory');?>/images/icon_app.png" width="168" height="101" alt="アプリ紹介">アプリ紹介</li>
			<li><img src="<?php bloginfo('template_directory');?>/images/icon_interview.png" width="168" height="101" alt="インタビュー">インタビュー</li>
			<li><img src="<?php bloginfo('template_directory');?>/images/icon_event.png" width="168" height="101" alt="展示・イベント">展示・イベント</li>
			<li><img src="<?php bloginfo('template_directory');?>/images/icon_rec.png" width="168" height="101" alt="採用">採用</li>
		</ul>
		<ul class="price-genre">
			<li><img src="<?php bloginfo('template_directory');?>/images/icon_prezen.png" width="168" height="101" alt="プレゼン">プレゼン</li>
			<li><img src="<?php bloginfo('template_directory');?>/images/icon_manu.png" width="168" height="101" alt="マニュアル">マニュアル</li>
			<li><img src="<?php bloginfo('template_directory');?>/images/icon_kyouiku.png" width="168" height="101" alt="教育研修">教育研修</li>
			<li><img src="<?php bloginfo('template_directory');?>/images/icon_kinen.png" width="168" height="101" alt="記念行事">記念行事</li>
			<li><img src="<?php bloginfo('template_directory');?>/images/icon_katsudou.png" width="168" height="101" alt="活動記録">活動記録</li>
		</ul>
		<p class="mgrb40"><span>※消費者向けに商品の販売促進や会社のPＲ等を目的とする映像</span></p>
		<h3 class="pink">社内向けの動画ジャンルまでカバー</h3>
		<ul class="price-genre">
			<li><img src="<?php bloginfo('template_directory');?>/images/icon_cm.png" width="168" height="101" alt="CM">CM</li>
			<li><img src="<?php bloginfo('template_directory');?>/images/icon_app.png" width="168" height="101" alt="アプリ紹介">アプリ紹介</li>
			<li><img src="<?php bloginfo('template_directory');?>/images/icon_interview.png" width="168" height="101" alt="インタビュー">インタビュー</li>
			<li><img src="<?php bloginfo('template_directory');?>/images/icon_event.png" width="168" height="101" alt="展示・イベント">展示・イベント</li>
			<li><img src="<?php bloginfo('template_directory');?>/images/icon_rec.png" width="168" height="101" alt="採用">採用</li>
		</ul>
		<p><span>※会社のスタッフや関係者向けに交流や現場改善等を目的とする映像</span></p>
	</div>
</section>

</div>
<?php get_footer(); ?>