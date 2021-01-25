<div id="colophon" class="site-footer">
	<?php if ( is_active_sidebar( 'footer' ) ) : ?>
		<div class="widgets">
			<div class="container">
				<div class="row">
					<?php dynamic_sidebar( 'footer' ); ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
		
		
		<div class="container">
		<div class="footmain">
				<div class="raisedbutton">
					<i class="far fa-chevron-up"></i>
				</div>
				<h2>ThomasEriksen</h2>
				<div class="socials">
					<a href="https://www.facebook.com/thomaskian.eriksen/"><i class="fab fa-facebook-f"></i></a>
					<a href="https://www.instagram.com/eriksen37/?hl=da"><i class="fab fa-instagram"></i></a>
					<a href="https://github.com/puff1g"><i class="fab fa-github"></i></a>
					<a href="https://dk.linkedin.com/in/thomas-kian-eriksen-085547171"><i class="fab fa-linkedin-in"></i></a>
					<a href="mailto:tke2000wow@gmail.com"><i class="fas fa-envelope"></i></a>
				</div>
				<div class="copyright"> &copy;  
					<span class="yearc"><?php echo date('Y'); ?></span> </div>
				</div>
	</div>


</div>

<?php wp_footer(); ?>

</body>
</html>