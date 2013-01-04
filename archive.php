<?php get_header(); ?>
<?php roots_content_before(); ?>
<div id="content" class="<?php echo $roots_options['container_class']; ?>">
	<?php roots_main_before(); ?>
	<div id="main" class="main_col <?php echo $roots_options['main_class']; ?>" role="main">
		<div class="container">
			<h1>
<?php
if (is_day()) {
	printf(__('Daily Archives: %s', 'roots'), get_the_date());
} elseif (is_month()) {
	printf(__('Monthly Archives: %s', 'roots'), get_the_date('F Y'));
} elseif (is_year()) {
	printf(__('Yearly Archives: %s', 'roots'), get_the_date('Y'));
} else {
	single_cat_title();
}
?>
			</h1>
			<div class="discussion_topics">
<?php
roots_loop_before();
get_template_part('loop', 'category');
roots_loop_after();
?>
			</div>
		</div>
	</div><!-- /#main -->

	<?php roots_main_after(); ?>
	<?php roots_sidebar_before(); ?>
	<aside id="sidebar" class="<?php echo $roots_options['sidebar_class']; ?>" role="complementary">
		<?php roots_sidebar_inside_before(); ?>
		<div class="container">
			<?php get_sidebar(); ?>
		</div>
		<?php roots_sidebar_inside_after(); ?>
	</aside><!-- /#sidebar -->
	<?php roots_sidebar_after(); ?>
</div><!-- /#content -->
<?php roots_content_after(); ?>
<?php get_footer(); ?>
