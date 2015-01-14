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
<h2 class="mgrb50">電話相談も受付けております</h2>
<p>以下、ダミー文。制作に関するご質問から、同業様での事例や成果など、どんなことでもお気軽にご相談ください。土日祝日休業日以外は 24時間以内 にご返信いたします。<br>お急ぎの場合は以下の電話でも受け付けておりますのでお気軽にご連絡ください。</p>
<img src="<?php bloginfo('template_directory');?>/images/form_ill01.png" width="960" height="115" alt="お気軽にお問合せください 03-6416-3240 受付時間 ／ 平日10:00〜20:00">

<h2 class="mgrb50">フォームからのお問合せはこちら</h2>
<p>以下、ダミー文。制作に関するご質問から、同業様での事例や成果など、どんなことでもお気軽にご相談ください。土日祝日休業日以外は 24時間以内 にご返信いたします。<br>お急ぎの場合は以下の電話でも受け付けておりますのでお気軽にご連絡ください。</p>

<?php echo do_shortcode( '[contact-form-7 id="97" title="お問合せ"]' ); ?>
</div>

<?php get_footer(); ?>