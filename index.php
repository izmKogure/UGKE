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
				<video autoplay loop id="video-background" muted>
					<source src="<?php bloginfo('template_directory');?>/images/UGOKIE_PV_AE_20150110.mp4" type="video/mp4">
					<source src="<?php bloginfo('template_directory');?>/images/UGOKIE_PV_AE_20150110.webm" type="video/webm">
				</video>
			</div>
			<section id="mainvisual">
				<div>
				<h2>作るだけの動画制作はもう古い</h2>
				<p>動画活用のお悩みはUGOKIE（ウゴキエ）で解決！</p>
				<ul>
					<li><a href="料金特徴">4つの料金プラン</a></li>
					<li><a href="アフターフォロー">アフターフォロー</a></li>
				</ul>
				</div>
			</section>

			<section id="performance">
				<h2>UGOKIEが選ばれる理由</h2>
				<ul class="reason">
					<li>
						<img src="<?php bloginfo('template_directory');?>/images/top_ill_01.png" width="280" height="213" alt="CM">
						<h3>明解な料金プラン</h3>
						<p>追加の制作料金は<br>一切頂きません。</p>
						<a href="#" style="background-image:url(<?php bloginfo('template_directory');?>/images/button_top_01.png);"><span>料金プランを見る</span></a>
					</li>
					<li>
						<img src="<?php bloginfo('template_directory');?>/images/top_ill_02.png" width="280" height="213" alt="CM">
						<h3>安心の制作フロー</h3>
						<p>クラウドソーシングのような<br>不自由さとは無縁です。</p>
						<a href="#" style="background-image:url(<?php bloginfo('template_directory');?>/images/button_top_02.png);"><span>制作フロー</span></a>
					</li>
					<li>
						<img src="<?php bloginfo('template_directory');?>/images/top_ill_03.png" width="280" height="213" alt="CM">
						<h3>アフターフォロー</h3>
						<p>一度配信した動画の<br>修正も心配いりません！</p>
						<a href="#" style="background-image:url(<?php bloginfo('template_directory');?>/images/button_top_03.png);"><span>アフターフォローを見る</span></a>
					</li>
				</ul>
			</section>

			<section id="service">
				<h2>UGOKIEなら様々な動画ジャンルに対応</h2>
				<hr>
				<h3 class="pink">WebCMからリクルート映像の制作が可能</h3>
				<div class="wrapper" >
					<dl class="genre">
						<dt><img src="<?php bloginfo('template_directory');?>/images/icon_top_01.png" width="225" height="134" alt="CM"></dt>
						<dd><a href="">CM<br>WebCMから店頭用ムービー、YouTube動画広告まで</a></dd>
					</dl>
					<dl class="genre">
						<dt><img src="<?php bloginfo('template_directory');?>/images/icon_top_02.png" width="225" height="134" alt="CM"></dt>
						<dd><a href="">アプリ紹介<br>アプリのプロモーションから操作説明まで</a></dd>
					</dl>
					<dl class="genre">
						<dt><img src="<?php bloginfo('template_directory');?>/images/icon_top_03.png" width="225" height="134" alt="CM"></dt>
						<dd><a href="">展示会・イベント<br>ブースの演出映像や商品説明で集客アップ</a></dd>
					</dl>
					<dl class="genre last">
						<dt><img src="<?php bloginfo('template_directory');?>/images/icon_top_04.png" width="225" height="134" alt="CM"></dt>
						<dd><a href="">採用<br>新卒や中途採用向け動画で企業イメージをアップ</a></dd>
					</dl>
				<div class="clearfix"></div>
				</div>
				</ul>
				<h3 class="pink">更に社内向け映像の制作も強化</h3>
				<div class="wrapper" >
					<dl class="genre">
						<dt><img src="<?php bloginfo('template_directory');?>/images/icon_top_05.png" width="225" height="134" alt="CM"></dt>
						<dd><a href="">営業ツール<br>タブレット上で動画をみせてより直感的に</a></dd>
					</dl>
					<dl class="genre">
						<dt><img src="<?php bloginfo('template_directory');?>/images/icon_top_06.png" width="225" height="134" alt="CM"></dt>
						<dd><a href="">セミナー<br>会場で上映する映像や、ネット上で配信するEラーニングまで</a></dd>
					</dl>
					<dl class="genre">
						<dt><img src="<?php bloginfo('template_directory');?>/images/icon_top_07.png" width="225" height="134" alt="CM"></dt>
						<dd><a href="">会社紹介<br>沿革映像や業務紹介ビデオで信用と理解を高める</a></dd>
					</dl>
					<dl class="genre last">
						<dt><img src="<?php bloginfo('template_directory');?>/images/icon_top_08.png" width="225" height="134" alt="CM"></dt>
						<dd><a href="">施設・店舗紹介<br>歴史的建造物や大型娯楽施設のフロア案内まで</a></dd>
					</dl>
				<div class="clearfix"></div>
				<div class="center">
					<img src="<?php bloginfo('template_directory');?>/images/button_moregenre.gif" width="288" height="78" alt="もっとジャンルを見る">
				</div>
				</div>
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
					<h2>ニュース<a href="ニュース"><img src="<?php bloginfo('template_directory');?>/images/button_tri.png" width="190" height="30" alt=""></a></h2>
					
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


			

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
