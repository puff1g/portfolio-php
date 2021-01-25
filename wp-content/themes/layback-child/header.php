<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action('lb_after_body_tag'); ?>


	<div id="header" class="site-header">
		<div class="bannerimage">
			<div class="imaget">
				<img src="<?php echo wp_get_attachment_url(53); ?>">
				<div class="navmenu">

					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
								<a class="site-logo" href="<?php echo esc_url(home_url()); ?>">
									<?php

									$custom_logo_id = get_theme_mod('custom_logo');
									if ($custom_logo_id) {
										svgimage($custom_logo_id);
									} else {

										if (get_theme_mod('company')) {
											echo '<h1>' . get_theme_mod('company') . '</h1>';
										} else {
											echo '<h1><b>THOMAS</b>ERIKSEN</h1>';
										}
									}
									?>
								</a>
							</div>
							<nav class="site-navigation col-md col-lg">
								<?php
								$args = array(
									'container'			=> 'ul',
									'theme_location' 	=> 'primary',
									'menu_class' 		=> 'nav-menu',
									'menu_id' 			=> 'primary-menu',
									'after' 			=> '<span></span>'
								);
								wp_nav_menu($args);
								?>
							</nav>
						</div>
					</div>
				</div>
				<div class="Blureffect"></div>

				<div class="Maintxt">
					<div class="smalltxt">
						<h1>Developer in learning</h1>
					</div>
					<div class="biggrtxt">
						<h1>Creating leg-sweeping <br />
							apps & websites.</h1>
					</div>
					<div class="buttonsban">
						<a href="#"><button class="button1">View Projects</button></a>
						<a href="#"><button class="button2">Contact Me</button></a>
					</div>
				</div>
			</div>
			<div>
			</div>
		</div>
	</div>
	</div>