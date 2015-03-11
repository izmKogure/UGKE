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

<div id="creater-form">
<h2 class="mgrb50">動画クリエイター募集</h2>
<h3 class="pink">新しい動画を共に作って頂ける方、誠実な想いで仕事に取り組んで頂ける方</h3>
<p>通信技術などインフラの発展により、WEB動画広告を中心に、ビジネスのシーンで動画が活用される機会が急激に増えております。クライアント様の課題を、動画という手法で解決するには動画クリエイターの感性・技術がかかせません。動画新時代を共に歩んで頂ける方を求めております。</p>
<hr>

      <dl class="creator mgrr20">
      		<dt><img src="<?php bloginfo('template_directory');?>/images/img_c01.png" alt="ディレクター"></dt>
            <dd>
            <b>ディレクター</b>
            お客様の要望をヒアリングし、動画で見せるための構成を作成し、
            現場でのディレクション、編集、納品までを担当していただきます。
            </dd>
      </dl>
       <dl class="creator">           
            <dt><img src="<?php bloginfo('template_directory');?>/images/img_c02.png" alt="ムービーカメラマン"></dt>
            <dd>
            <b>ムービーカメラマン</b>
            ビデオカメラ、一眼レフ、大判センサーカメラなどを駆使し、ディレクターと連携して撮影を行って頂きます。
            </dd>
      </dl>
       <dl class="creator mgrr20">      
            <dt><img src="<?php bloginfo('template_directory');?>/images/img_c03.png" alt="エディター"></dt>
            <dd>
            <b>エディター</b>
            動画の編集、テロップ作成、図の作成などディレクターの構成を元に映像を作り上げていただきます。
            </dd>
      </dl>
       <dl class="creator">   
            <dt><img src="<?php bloginfo('template_directory');?>/images/img_c04.png" alt="制作アシスタント"></dt>
            <dd>
            <b>制作アシスタント</b>
            現場での進行、撮影の準備(ロケ場所、小道具、スケージュールの作成など)を行い、他スタッフのサポートを行っていただきます。
            </dd>
      </dl>
       <dl class="creator mgrr20">
            <dt><img src="<?php bloginfo('template_directory');?>/images/img_c05.png" alt="CGクリエイター"></dt>
            <dd>
            <b>CGクリエーター</b>
            プロモーションやCMのCG効果を担当いただきます。
            </dd>
      </dl>
       <dl class="creator mgrb40">
            <dt><img src="<?php bloginfo('template_directory');?>/images/img_c06.png" alt="ナレーター"></dt>
            <dd>
            <b>ナレーター</b>
            ディレクターの意図を理解し、動画のテイストに沿ったナレーションをお願いします。ご自宅に録音設備のある方も歓迎します。
            </dd>
      </dl>
 <table id="form">
	<tbody>
		<tr>
			<th>募集職種</th>
			<td>
<b>●ディレクター</b><br>
<b>●ムービーカメラマン</b><br>
<b>●エディター</b><br>
<b>●制作アシスタント</b><br>
<b>●CGクリエイター</b><br>
<b>●ナレーター</b></td>
		</tr>
		<tr>
			<th>対　象</th>
			<td>当社との契約が可能な方（業務委託契約） </td>
		</tr>
		<tr>
			<th>雇用形態</th>
			<td> 個人 / 法人</td>
		</tr>
		<tr>
			<th>勤務地</th>
			<td>案件によって異なります。</td>
		</tr>
		<tr>
			<th>勤務時間</th>
			<td>案件によって異なります。</td>
		</tr>
		<tr>
			<th>支　払</th>
			<td>経験・能力を考慮し、業務開始前に決定またはご連絡しております。</td>
		</tr>
		<tr>
			<th>業務委託契約までの流れ</th>
			<td>
応募フォーム<br>
　↓<br>
書類選考<br>
　↓<br>
ミーティング<br>
　↓<br>
契約・発注<br>
			</td>
		</tr>
	</tbody>
</table>

<h2 class="mgrb50">応募フォーム</h2>

<?php echo do_shortcode( '[contact-form-7 id="108" title="お問合せ"]' ); ?>
</div>
<style type="text/css">
h1.entry-title {
	background-image:url(<?php bloginfo('template_directory');?>/images/headerimg_creator.png);
}
</style>
<?php get_footer(); ?>