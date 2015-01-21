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

<div id="form">
<h2 class="mgrb50">お急ぎの場合はお電話でお問合せください</h2>
<p>制作や料金に関するご質問から、映像の二次利用や配信先のことまで、<br>動画活用でお困りのときはお気軽にご相談ください。電話相談も無料でお答えいたします。</p>
<img src="<?php bloginfo('template_directory');?>/images/form_ill01.png" width="960" height="115" alt="お気軽にお問合せください 03-6416-3240 受付時間 ／ 平日10:00〜20:00">

<h2 class="mgrb50">フォームからのお問合せはこちら</h2>
<p>お問合せフォームからのご相談は2日以内にご返信いたします。土日祝日に頂いたお問合せにつきましては、営業日にご返信となります。UGOKIEサポートチームがどんなことでもお答えいたします！</p>

<?php echo do_shortcode( '[contact-form-7 id="97" title="お問合せ"]' ); ?>
</div>

<?php get_footer(); ?>