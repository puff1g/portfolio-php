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
					<a href="#"><i class="fab fa-facebook-f"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
					<a href="#"><i class="fab fa-github"></i></a>
					<a href="#"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<div class="copyright"> &copy;  
					<span class="yearc"><?php echo date('Y'); ?></span> </div>
				</div>
	</div>


</div>

<?php wp_footer(); ?>

</body>
</html>