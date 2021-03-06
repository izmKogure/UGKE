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
					<li><a href="料金特徴#4price">4つの料金プラン</a></li>
					<li><a href="アフターフォロー">アフターフォロー</a></li>
				</ul>
				</div>
			</section>

			<section id="performance">
				<h2>UGOKIEが選ばれる理由</h2>
				<hr>
				<ul class="reason">
					<li>
						<img src="<?php bloginfo('template_directory');?>/images/top_ill_01.png" width="280" height="213" alt="CM">
						<h3>明解な料金プラン</h3>
						<p>追加の制作料金は<br>一切頂きません。</p>
						<a href="料金特徴#4price" style="background-image:url(<?php bloginfo('template_directory');?>/images/button_top_01.png);"><span>料金プランを見る</span></a>
					</li>
					<li>
						<img src="<?php bloginfo('template_directory');?>/images/top_ill_02.png" width="280" height="213" alt="CM">
						<h3>安心の制作フロー</h3>
						<p>クラウドソーシングのような<br>不自由さとは無縁です。</p>
						<a href="料金特徴#seisakuflow" style="background-image:url(<?php bloginfo('template_directory');?>/images/button_top_02.png);"><span>制作フロー</span></a>
					</li>
					<li>
						<img src="<?php bloginfo('template_directory');?>/images/top_ill_03.png" width="280" height="213" alt="CM">
						<h3>アフターフォロー</h3>
						<p>一度配信した動画の<br>修正も心配いりません！</p>
						<a href="アフターフォロー" style="background-image:url(<?php bloginfo('template_directory');?>/images/button_top_03.png);"><span>アフターフォローを見る</span></a>
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
						<dd><a><span>CM</span><br>WebCMから店頭用ムービー、YouTube動画広告まで</a></dd>
					</dl>
					<dl class="genre">
						<dt><img src="<?php bloginfo('template_directory');?>/images/icon_top_02.png" width="225" height="134" alt="CM"></dt>
						<dd><a><span>アプリ紹介</span><br>アプリのプロモーションから操作説明まで</a></dd>
					</dl>
					<dl class="genre">
						<dt><img src="<?php bloginfo('template_directory');?>/images/icon_top_03.png" width="225" height="134" alt="CM"></dt>
						<dd><a><span>展示会・イベント</span><br>ブースの演出映像や商品説明で集客力アップ</a></dd>
					</dl>
					<dl class="genre last">
						<dt><img src="<?php bloginfo('template_directory');?>/images/icon_top_04.png" width="225" height="134" alt="CM"></dt>
						<dd><a><span>採用</span><br>新卒や中途採用向け動画で企業イメージを伝える</a></dd>
					</dl>
				<div class="clearfix"></div>
				</div>
				</ul>
				<h3 class="pink">更に社内向け映像の制作も強化</h3>
				<div class="wrapper" >
					<dl class="genre">
						<dt><img src="<?php bloginfo('template_directory');?>/images/icon_top_05.png" width="225" height="134" alt="CM"></dt>
						<dd><a><span>営業ツール</span><br>タブレット上で動画をみせてより直感的に</a></dd>
					</dl>
					<dl class="genre">
						<dt><img src="<?php bloginfo('template_directory');?>/images/icon_top_06.png" width="225" height="134" alt="CM"></dt>
						<dd><a><span>セミナー</span><br>会場で上映する映像や、ネット上で配信するEラーニングまで</a></dd>
					</dl>
					<dl class="genre">
						<dt><img src="<?php bloginfo('template_directory');?>/images/icon_top_07.png" width="225" height="134" alt="CM"></dt>
						<dd><a><span>会社紹介</span><br>沿革映像や業務紹介ビデオで信用と理解を高める</a></dd>
					</dl>
					<dl class="genre last">
						<dt><img src="<?php bloginfo('template_directory');?>/images/icon_top_08.png" width="225" height="134" alt="CM"></dt>
						<dd><a><span>施設・店舗紹介</span><br>歴史的建造物や大型娯楽施設のフロア案内まで</a></dd>
					</dl>
				<div class="clearfix"></div>
				<div class="center">
					<a href="料金特徴#genre" class="more-genre"><span>もっとジャンルを見る</span></a>
				</div>
				</div>
			</section>

			<section id="seisaku">
				<div class="wrapper">
				<div class="youtube">
					<?php do_action('slideshow_deploy', '34'); ?>
				</div>
				<div class="zisseki">
					<h2><img src="<?php bloginfo('template_directory');?>/images/top_icon_performance.png" width="78" height="72" alt="" class="mgrr20">制作実績</h2>
					<p>私たちは様々な配信媒体を分析し、配信時により視聴者に響く映像制作を心がけています。“ただ作るだけでは終わらない”を意識して制作したUGOKIEの動画事例を是非ご覧ください。</p>
					<a href="制作実績" class="seisaku-zisseki"><span>制作実績をもっと見る</span></a>
				</div>
				</div>
			</section>

			<section id="news">
				<div class="wrapper clearfix">
					<h2>ニュース<a href="ニュース"><img src="<?php bloginfo('template_directory');?>/images/button_tri.png" width="190" height="30" alt=""></a></h2>
					
					<div class="side-news">
						<ul class="blog">
							<?php query_posts('cat=1&showposts=4');
							if (have_posts()) : while (have_posts()) : the_post(); ?>
								<li><a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail(array(176,100)); ?></a>
								<p><span><?php the_time(Y年m月d日); ?></span><br>
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
								<?php
									$days = 7; //Newマーク表示の日数
									$daysInt = ($days-1)*86400;
									$today = time();
									$entry = get_the_time('U');
									$dayago = $today-$entry;
									    if ($dayago < $daysInt) {
									    $blogUrl = get_bloginfo('template_url');
									    echo '<div class="new">New</div>';
									    }
								?>
								</li>
							<?php endwhile; endif; wp_reset_query(); ?>

						</ul>
					</div>
					<h2 style="float:right; margin-top:-60px;">UGOKIE Lab.<a href="lab"><img src="<?php bloginfo('template_directory');?>/images/button_tri2.png" width="190" height="30" alt=""></a></h2>
					<div class="right-side-news">
						<ul class="blog">
							<?php query_posts('post_type=lab&showposts=4');
							if (have_posts()) : while (have_posts()) : the_post(); ?>
								<li><a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail(array(176,100)); ?></a>
								<p><span><?php the_time(Y年m月d日); ?></span><br>
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
								<?php
									$days = 7; //Newマーク表示の日数
									$daysInt = ($days-1)*86400;
									$today = time();
									$entry = get_the_time('U');
									$dayago = $today-$entry;
									    if ($dayago < $daysInt) {
									    $blogUrl = get_bloginfo('template_url');
									    echo '<div class="new">New</div>';
									    }
								?>
								</li>
<?php endwhile; else: ?>
			<li>UGOKIE lab. 近日公開予定！</li>
							<?php endif; wp_reset_query(); ?>

						</ul>
					</div>
					<?php if ( have_posts() ) : ?>
					</div>
				</div>
			</section>


			

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
