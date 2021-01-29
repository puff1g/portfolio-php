<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
		<div class="Single_projects">
		<div id="<?php echo $block_id; ?>" class="<?php if( !empty($block_align) ) { echo 'align-' . $block_align; } ?> block-<?php echo $block_name; ?>">
		<div class="bannerimage">
			<div class="imaget">
				<img src="<?php echo wp_get_attachment_url(53); ?>">
				
				<div class="Blureffect"></div>

				<div class="Maintxt">
					<div class="smalltxt">
					<?php 
				$oPost = get_post(get_the_id());
				?>
					<?php 
							$kat = get_the_terms ( $oPost->ID, "project_cat");
							
							foreach($kat as $key => $oTerm) {
								
								
								?>
								<h1 style="backgroundcolor: <?php echo get_field("term_color", "project_cat_".$oTerm->term_id ); ?>"><?php echo $oTerm->name;   ?> </h1>
								<?php 
							}
							?>
					</div>
					<div class="biggrtxt">
					<?php 
				$oPost = get_post(get_the_id());
				?>
					<h1 class="archive-post-title"><?php echo $oPost->post_title; ?></h1>

						
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
			<div class="scroll-downs">
					<div class="mousey">
						<div class="scroller"></div>
					</div>
					</div>
	</div>
			<div class="container">
				
				<?php while ( have_posts() ) : the_post(); ?>
				
				<?php 
				$oPost = get_post(get_the_id());
				?>
				<a href="<?php the_permalink(); ?>">

						
							<div class="textcontainer">
								
								<div class="type"><?php 
							$kat = get_the_terms ( $oPost->ID, "project_cat");
							
							foreach($kat as $key => $oTerm) {
								
								
								?>
								<span style="backgroundcolor: <?php echo get_field("term_color", "project_cat_".$oTerm->term_id ); ?>">The Case</span>
								<?php 
							}
							?>
							</div>

							<h1 class="archive-post-title"><?php echo $oPost->post_title; ?></h1>
							<div class="excerpt"><?php the_excerpt(); ?></div>
							
						</div>
					</a>
					<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail(); ?>
							<?php endif; ?>
					<?php endwhile; ?>
					
				</div>
			</div>

	<?php endif; ?>

<?php get_footer(); ?>