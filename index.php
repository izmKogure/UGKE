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
				<div>
					<img src="<?php bloginfo('template_directory');?>/images/button_moregenre.gif" width="288" height="78" alt="もっとジャンルを見る">
				</div>
			</section>

			<section id="service">
				<h2>UGOKIEのサービスについて</h2>
				<dl>
					<dt><span>他の動画制作サービスやクラウドソーシングとUGOKIEはどう違うの？</span></dt>
					<dd><span>UGOKIEは動画の制作から運用(動画の再活用)までをトータルにサポートするサービスです。また、依頼主さまのプランニング作業や交渉を必要とする動画制作クラウドソーシングとは違い、私たちUGOKIEがプランニングから実制作、クオリティー管理、配信先の提案（アフターフォロー）まで全て行います。動画の制作料金も４つのコースプランを予めご用意していますので、最後に不透明な追加料金を請求する事もございません。</span></dd>
				</dl>

				<ul>
					<li>
						<img src="<?php bloginfo('template_directory');?>/images/icon_ryoukin.png" width="280" height="280" alt="明解な料金プラン">
						<h3>明解な料金プラン</h3>
						<p>9.8万円のプランからオリジナルプランまで４つのコースを予めご用意しています。（オリジナルプラン以外の３コースは）予算や制作内容にマッチしたプランをお選び頂くだけで、難解な見積書に目を通す必要もありません。納品後に追加料金を請求する事も無いため、後から予算追加の心配も一切ありません。</p>
					</li>
					<li>
						<img src="<?php bloginfo('template_directory');?>/images/icon_anshin.png" width="280" height="280" alt="安心の制作フロー">
						<h3>安心の制作フロー</h3>
						<p>クラウドソーシングとは違い、一貫してマネージメントを行います。依頼したけど期限になっても提案がない…こちらの要望とかけ離れている…というような苦労とは無縁です。コース別の制作フローに沿って安心した動画制作を提供致します。</p>
					</li>
					<li>
						<img src="<?php bloginfo('template_directory');?>/images/icon_after.png" width="280" height="280" alt="アフターフォロー">
						<h3>アフターフォロー</h3>
						<p>近年、動画の配信先はTVCMに限らず、街頭テレビジョンやYouTube、スマホへのリッチ広告と多種多様に広がっています。せっかく予算と時間をかけて制作した動画を１つの場所に限って配信したのでは、ムダが多いうえ、宣伝効果も限られます。UGOKIEでは制作済みの動画コンテンツを別の媒体先でも配信できるように再活用の提案と動画編集も行なっております。</p>
					</li>
				</ul>
			</section>

			<section id="seisaku">
				<div class="wrapper">
				<div class="youtube">
					<?php do_action('slideshow_deploy', '34'); ?>
				</div>
				<div class="zisseki">
					<h2>制作実績</h2>
					<p>UGOIEが手がけた映像制作事例です。<br>様々な案件に合せて、よりユーザーへリーチする映像制作を心がけています。<br>ただ作るだけでは終わらない、UGOKIEの映像制作をご覧ください。</p>
					<img src="<?php bloginfo('template_directory');?>/images/button_zisseki.gif" width="230" height="40" alt="制作実績をもっと見る">
				</div>
				</div>
			</section>

			<section id="news">
				<div class="wrapper">
					<h2>ニュース</h2>
					<div class="side-news">
						<ul class="blog">
							<?php query_posts('cat=1&showposts=4');
							if (have_posts()) : while (have_posts()) : the_post(); ?>
								<li><a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail(array(176,100)); ?></a>
								<p><span><?php the_time(Y年m月d日); ?></span><br>
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
								</li>
							<?php endwhile; endif; wp_reset_query(); ?>
						</ul>
					</div>
					<div id="likebox">
					<?php if ( have_posts() ) : ?>
					<div id="fb-root"></div>
						<script>(function(d, s, id) {
							var js, fjs = d.getElementsByTagName(s)[0];
							if (d.getElementById(id)) return;
							js = d.createElement(s); js.id = id;
							js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&appId=758942267458537&version=v2.0";
							fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));</script>
							<div class="fb-like-box" data-href="https://www.facebook.com/FacebookDevelopers" data-width="450" data-height="520" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
					</div>
				</div>
			</section>


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
