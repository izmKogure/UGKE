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
					<dt>ひとことで”動画”といっても、用途に応じた様々な映像があります。”動画”や”動画広告”ってフレーズを最近良く耳にするけど、実際どんな場面で動画を活用したら良いの？</dt>
					<dd>ひとことで”動画”といっても、用途に応じた様々な映像があります。用途は大きく分けて２つ。消費者向けに商品の販売促進や会社PR等を目的とする映像と会社スタッフや関係者向けに交流や現場改善等を目的とする映像の２つがあります。UGOKIE（ウゴキエ）はWebCMからアプリ紹介動画、企業のプレゼンテーション動画まで幅広い動画制作に対応し、お客さあの求める最適な動画活用をご提案致します。</dd>
				</dl>
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
