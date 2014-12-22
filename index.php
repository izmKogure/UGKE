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
				<h2>UGOKIEのサービスとは？</h2>
				<p>UGOKIEは様々な動画制作に対応します。作って終わりではなく、動画の活用方法までサポートするサービスです。</p>
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
