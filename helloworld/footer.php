 <footer class="footer">
        <nav class = "footer-navigation">
           <?php
			wp_nav_menu($arg = array(
				'menu_class' => 'footer_navigation',
				'theme_location' => 'primary'));
		?>
        </nav>
</footer>
<?php wp_footer();?>
</body>
</html>
