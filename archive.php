<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package UGOKIE
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<?php
$year = get_query_var('year');
$args = array(
'post_status' => 'publish'
);
if ($year) {
$start_date = $year.'/1/1';
$end_date = ($year).'/12/31 23:59:59';
$args += array('date_query' => array (
'compare' => 'BETWEEN',
'after' => $start_date,
'before' => $end_date,
'inclusive' => true
));
}
$query = new WP_Query($args);
echo '<table>';
if ($query->have_posts()) : while ($query->have_posts() ) : $query->the_post(); ?>
<tr>
<th><span><?php echo get_the_date('Y.m.d'); ?></span></th>
<td><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></td>
</tr>
<?php endwhile; endif;
echo '</table>';
wp_reset_query();
?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
