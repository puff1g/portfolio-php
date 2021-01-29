<?php get_header(); ?>
	<?php if ( have_posts() ) : ?>
		<div class="archive_projects">
			<div class="container">
				
				<?php while ( have_posts() ) : the_post(); ?>
				
				<?php 
				$oPost = get_post(get_the_id());
				?>
				<a href="<?php the_permalink(); ?>">

						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail(); ?>
							<?php endif; ?>
							<div class="textcontainer">
								
								<div class="type"><?php 
							$kat = get_the_terms ( $oPost->ID, "project_cat");
							
							foreach($kat as $key => $oTerm) {
								
								
								?>
								<span style="backgroundcolor: <?php echo get_field("term_color", "project_cat_".$oTerm->term_id ); ?>"><?php echo $oTerm->name;   ?> </span>
								<?php 
							}
							?>
							</div>

							<h1 class="archive-post-title"><?php echo $oPost->post_title; ?></h1>
							<div class="excerpt"><?php the_excerpt(); ?></div>
							
						</div>
					</a>
					
					<?php endwhile; ?>
					
				</div>
			</div>

	<?php endif; ?>

<?php get_footer(); ?>