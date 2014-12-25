<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package UGOKIE
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div id="mainvideo">
				<video autoplay loop poster="http://mattgrossdesign.com/raw-media/first-frame-screencap" id="video-background" muted>
					<source src="<?php bloginfo('template_directory');?>/images/d.mp4" type="video/webm">
				</video>
			</div>
			<section id="mainvisual">
				<div>
				<h2>映像制作ならUGOKIEへお任せ下さい</h2>
				<ul>
					<li>安心の料金</li>
					<li>サービスの特徴</li>
				</ul>
				</div>
			</section>

			<section id="performance">
				<h2>動画の活用シーン</h2>
				<dl>
					<dt><span>“動画”や“動画広告”ってフレーズを最近よく耳にするけど、実際どんな場面で動画を活用したら良いの？</span></dt>
					<dd><span>ひとことで“動画”といっても、用途に応じた様々な映像があります。用途は大きく分けて２つ。消費者向けに商品の販売促進や会社のPＲ等を目的とする映像と会社のスタッフや関係者向けに交流や現場改善等を目的とする映像の２つがあります。UGOKIE（ウゴキエ）はWebCMからアプリ紹介動画、企業のプレゼンテーション動画まで幅広い動画制作に対応し、お客様の求める最適な動画活用をご提案致します。</span></dd>
				</dl>

				<h3>消費者向けジャンル</h3>
				<ul>
					<li><img src="<?php bloginfo('template_directory');?>/images/icon_cm.png" width="168" height="101" alt="CM">CM</li>
					<li><img src="<?php bloginfo('template_directory');?>/images/icon_app.png" width="168" height="101" alt="アプリ紹介">アプリ紹介</li>
					<li><img src="<?php bloginfo('template_directory');?>/images/icon_interview.png" width="168" height="101" alt="インタビュー">インタビュー</li>
					<li><img src="<?php bloginfo('template_directory');?>/images/icon_event.png" width="168" height="101" alt="展示・イベント">展示・イベント</li>
					<li><img src="<?php bloginfo('template_directory');?>/images/icon_rec.png" width="168" height="101" alt="採用">採用</li>
				</ul>
				<h3>開発者向けジャンル</h3>
				<ul>
					<li><img src="<?php bloginfo('template_directory');?>/images/icon_prezen.png" width="168" height="101" alt="プレゼン">プレゼン</li>
					<li><img src="<?php bloginfo('template_directory');?>/images/icon_manu.png" width="168" height="101" alt="マニュアル">マニュアル</li>
					<li><img src="<?php bloginfo('template_directory');?>/images/icon_kyouiku.png" width="168" height="101" alt="教育研修">教育研修</li>
					<li><img src="<?php bloginfo('template_directory');?>/images/icon_kinen.png" width="168" height="101" alt="記念行事">記念行事</li>
					<li><img src="<?php bloginfo('template_directory');?>/images/icon_katsudou.png" width="168" height="101" alt="活動記録">活動記録</li>
				</ul>
			</section>



		<!-- <?php if ( have_posts() ) : ?> -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php ugokie_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
