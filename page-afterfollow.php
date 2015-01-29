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
Template Name: content-page-after-follow
*/
?>
<div class="after-follow">
	<section>
	<div class="wrapper">
		<h2 class="mgrb60 after2">アフターフォローで動画をフル活用</h2>
		<p class="mgrb40">ただ作るだけの動画制作時代は終っています。一度作った動画は徹底的に活用してこそ意味があり、UGOKIEでは新たな動画制作時代に応えるため、確実に効果を上げる事がでるアフターフォローを提供致します。</p>
		<hr>
		<h3 class="pink">UGOKIEでは新たな配信先まで徹底サポート致します</h3>
			<dl class="genre">
				<dt><img src="<?php bloginfo('template_directory');?>/images/icon_top_13.png" width="225" height="134" alt="CM"></dt>
				<dd><a><span>DVD制作</span></a></dd>
			</dl>
			<dl class="genre">
				<dt><img src="<?php bloginfo('template_directory');?>/images/icon_top_14.png" width="225" height="134" alt="CM"></dt>
				<dd><a><span>TrueView広告</span></a></dd>
			</dl>
			<dl class="genre">
				<dt><img src="<?php bloginfo('template_directory');?>/images/icon_top_15.png" width="225" height="134" alt="CM"></dt>
				<dd><a><span>動画メルマガ</span></a></dd>
			</dl>
			<dl class="genre last">
				<dt><img src="<?php bloginfo('template_directory');?>/images/icon_top_16.png" width="225" height="134" alt="CM"></dt>
				<dd><a><span>サイネージ</span></a></dd>
			</dl>
			<div class="clearfix"></div>
			<ul>
				<li>予算と手間をかけて制作した動画は、別の場所に配信する事で新たな効果を得る事ができます。UGOKIEはDVD制作、TrueView広告、動画メルマガ配信、街頭ビジョン、トレインチャンネルなど様々なシーンへの二次利用や再配信を提案致します。</li>
			</ul>
			<h3 class="pink">UGOKIEでは納品後の修正も対応致します</h3>
			<img src="<?php bloginfo('template_directory');?>/images/after_ill01.png" width="960" height="340" alt="CM">
			<ul class="mgrb70">
				<li>配信後の反響やトレンドの変化に合わせてキャッチコピーや画像を入替えたりする事で、以前とは違った宣伝結果を得る事ができます。UGOKIEで過去に制作した編集データや素材データは、全て保管しているため、再編集に迅速に対応致します。配信媒体に合わせたビデオファイル変換もサポートしています。</li>
			</ul>
	</div>
	</section>
	<section class="gray">
		<div class="wrapper">
			<h2 class="mgrb70">先着５０社様限定、オープンキャンペーン！</h2>
			<div style="text-align:center;"><a href="お問合せ"><img src="<?php bloginfo('template_directory');?>/images/banner_campaign.png" width="750" height="310" alt="オープンキャンペーン｜先着50社様限定　納品後1年間無料で差し替えます　詳細はお問合せ下さい"></a></div>
		</div>
	</section>
</div>
<style type="text/css">
h1.entry-title {
	background-image:url(<?php bloginfo('template_directory');?>/images/headerimg_af.png);
}
</style>
<?php get_footer(); ?>