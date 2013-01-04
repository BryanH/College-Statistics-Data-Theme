<?php roots_footer_before(); ?>
<div id="subfooter_container">
	<div id="subfooter">
		<?php dynamic_sidebar('roots-footer'); ?>
	</div>
</div>
	<footer id="content-info" class="<?php global $roots_options; echo $roots_options['container_class']; ?>" role="contentinfo">
		<?php roots_footer_inside(); ?>
		<div class="container">
			<div id="nav-main-wrapper">
				<nav id="footer_menu_container" role="navigation">
					<ul id="footer_menu" class="menu">
						<li class="first">
							<a href="/">Home</a>
						</li>
						<li>
							<a href="/college-stats/">Browse the data</a>
						</li>
						<li>
							<a href="/category/discussion/">Join the discussion</a>
						</li>
						<li>
							<a href="/news-resources/">News &amp; resources</a>
						</li>
						<li>
							<a href="/about/">About this project</a>
						</li>
					</ul>
				</nav>

				<div class="visit">
					<a href="http://chronicle.com" target="external" class="visit_link">chronicle.com</a>
					<img class="chronitron" src="<?php echo get_stylesheet_directory_uri(); ?>/imgassets/footer_chronicle.png">
				</div>
			</div>
		</div>
	</footer>
	<?php roots_footer_after(); ?>
	</div><!-- /#wrap -->

<?php //wp_footer(); ?>
<?php //roots_footer(); ?>

</body>
</html>
