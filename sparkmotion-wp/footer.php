<?php?>

	

	<footer id="footer">
		<div id="footer-socialmedia">
			<ul>
				<li class="footer-socialmedia-icon"><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li class="footer-socialmedia-icon"><a href="#"><i class="fa fa-instagram"></i></a></li>
				<li class="footer-socialmedia-icon"><a href="#" class="footer-socialmedia-icon"><i class="fa fa-twitter"></i></a></li>
			</ul>
			
		</div>
		<div id="footer-links">
			<?php wp_nav_menu(array('theme_location'=>'footer')); ?>
		</div>
		<div id="footer-copyright">
			<p>&copy; Spark Motion 2019</p>
		</div>
	</footer>



<?php wp_footer(); ?>

</body>
</html>
