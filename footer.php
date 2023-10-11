<!--
	Website: Patsfarmsgardencenter.com
	Filename: footer.php
	Description: Common footer all WP pages
	First released: 10.5.2023 
	Modification History: 
-->
		
		<!-- Scripts -->
		<script src="<?php echo get_theme_file_uri('assets/js/jquery.min.js') ?>"></script>
		<script src="<?php echo get_theme_file_uri('assets/js/browser.min.js') ?>"></script>
		<script src="<?php echo get_theme_file_uri('assets/js/breakpoints.min.js') ?>"></script>
		<script src="<?php echo get_theme_file_uri('assets/js/main.js') ?>"></script>

        <?php  wp_footer(); // loads final wp functions, ie css, js that are specified in function.php.  ?>
	</body>
</html>

