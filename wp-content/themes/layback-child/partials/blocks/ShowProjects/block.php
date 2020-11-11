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
				<div class="project_box">
					<div class="upper">
						<div class="number">01</div>
						<div class="overlay"></div>
						<div class="bg-image">
							<img src="https://i.ytimg.com/vi/DCrP6jDYpA4/maxresdefault.jpg" alt="">
						</div>
					</div>
					<div class="lower">
						<div class="type">Console App</div>
						<div class="title">Værksted System</div>
						<div class="desc">
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo voluptates rem suscipit maiores similique unde a quo dolores nihil nulla delectus eum nam sunt officiis.
						</div>
						<div class="actions">
							<a href="#">
								<button class="buttonview">View Project</button>
							</a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

<?php }
