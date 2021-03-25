<?php

add_action('acf/init', 'lb_register_ShowProjects');
function lb_register_ShowProjects()
{

	// check function exists.
	if (function_exists('acf_register_block_type')) {

		$title 					= __('ShowProjects', 'layback');
		$description 			= __('ShowProjects page', 'layback');
		$tags 					=	array('DEMO');
		$align 					= array('wide', 'full');
		$render 				= 'ShowProjects_block_render_callback';

		// register a testimonial block.
		acf_register_block_type(array(
			'name'              => basename(__DIR__),
			'title'             => $title,
			'description'       => $description,
			'keywords'			=> $tags,
			'icon'              => '',
			'category'          => 'layback',
			//					'post_types' 		=> array('post', 'page'),
			'supports' 			=> array(
				'mode'			=> 'auto',
				'align'			=> $align,
			),
			'render_callback'   => $render,
			'enqueue_style' 	=> get_stylesheet_directory_uri() . '/partials/blocks/' . basename(__DIR__) . '/style.css',
			'enqueue_script' 	=> get_stylesheet_directory_uri() . '/partials/blocks/' . basename(__DIR__) . '/script.js',
		));
	}
}

function ShowProjects_block_render_callback($block, $content = '', $is_preview = false, $post_id = 0)
{

	/* Add all variables in the top
		-------------------------------------------------- */

	$block_name			= substr($block['name'], 4);
	$block_id 			= $block['id'];
	$block_title 		= strtolower(str_replace(" ", "_", $block['title']));
	$block_filename 	= pathinfo(__FILE__, PATHINFO_FILENAME);

	if (!empty($block['align'])) {
		$block_align 	= $block['align'];
	}

?>

	<div id="<?php echo $block_id; ?>" class="<?php if (!empty($block_align)) {
													echo 'align-' . $block_align;
												} ?> block-<?php echo $block_name; ?>">
		<div class="container">
			<div class="projecttext">

				<h2>Selected</h2>
				<h1>Projects</h1>
			</div>
			<div class="projects_showcase_parent">
				<?php
				$i = 1;
				$posts = get_posts(array(
					'numberposts'      => 3,
					'orderby'          => 'rand',
					'post_type'        => 'project',
				));
				foreach ($posts as $key => $oPost) {
				?>
					<div class="project_box">
						<div class="upper">
							<div class="number"><?php echo sprintf("%02d", $i); ?></div>
							<div class="overlay"></div>
							<div class="bg-image">
								<img src="<?php echo get_the_post_thumbnail_url($oPost->ID); ?>" alt="">
							</div>
						</div>
						<div class="lower">
							<div class="type"><?php 
							$kat = get_the_terms ( $oPost, "project_cat");
							foreach($kat as $key => $oTerm) {
								
								
								?>
								<span style="backgroundcolor: <?php echo get_field("term_color", "project_cat_".$oTerm->term_id ); ?>"><?php echo $oTerm->name;   ?> </span>
								<?php 
							}
							?>
							</div>
							<div class="title"><?php echo $oPost->post_title; ?></div>
							<div class="desc">
								<?php
								$str = apply_filters( 'the_content', $oPost->post_content);
								$str = strip_tags($str);
								echo  strlen($str) > 200 ? substr($str,0,200)."..." : $str;
									?>		
							</div>
							<div class="actions">
								<a href="<?php echo get_permalink($oPost->ID) ?>">
									<button class="buttonview">View Project</button>
								</a>
							</div>
						</div>
					</div>
				<?php
					$i++;
				}
				?>
			</div>

			<!-- <div class="allprojects">
				<a href="#"><button class="ViewButton">View All Projects</button></a>
			</div> -->

		</div>
	</div>

<?php }
