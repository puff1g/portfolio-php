<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
		<div class="Single_projects">
		<div id="<?php echo $block_id; ?>" class="<?php if( !empty($block_align) ) { echo 'align-' . $block_align; } ?> block-<?php echo $block_name; ?>">
		<div class="bannerimage">
			<div class="imaget">
			<img src="<?php echo get_the_post_thumbnail_url(get_the_id()) ? get_the_post_thumbnail_url(get_the_id()) : wp_get_attachment_url(53); ?>" alt="">
				
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

						
							<div class="textcontainer">
								
								<div class="type"><?php 
							$kat = get_the_terms ( $oPost->ID, "project_cat");
							
							foreach($kat as $key => $oTerm) {
								
								
								?>
								<?php 
							}
							?>
							</div>

							<div class="excerpt">
							<?php echo the_content($oPost -> post_content) ?>
							</div>
							
						</div>
					</a>
					
					<?php endwhile; ?>
					
				</div>
			</div>

	<?php endif; ?>

<?php get_footer(); ?>