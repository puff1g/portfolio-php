<?php get_header(); ?>

	<?php if ( have_posts() ) : ?>

		<div class="container">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail(); ?>
				<?php endif; ?>

				<h1 class="single-post-title"><?php the_title(); ?></h1>

				<div class="content"><?php the_content(); ?></div>

			<?php endwhile; ?>

		</div>

	<?php endif; ?>

<?php get_footer(); ?>