<?php
/**
 * @package WordPress
 * @subpackage Starkers
 */
?>

		<div id="footer">
			<?php wp_nav_menu( array('theme_location' => 'footer-menu' )); ?>			
			
			<div class="copyright">&copy; <?php bloginfo('name'); ?></div>
		</div>
		
		<?php wp_footer(); ?>
	</body>
</html>