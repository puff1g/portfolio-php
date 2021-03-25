<?php

add_action('acf/init', 'lb_register_tkeAbout');
function lb_register_tkeAbout()
{

	// check function exists.
	if (function_exists('acf_register_block_type')) {

		$title 					= __('About', 'layback');
		$description 			= __('Aboutpage', 'layback');
		$tags 					=	array('DEMO');
		$align 					= array('wide', 'full');
		$render 				= 'tkeAbout_block_render_callback';

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

function tkeAbout_block_render_callback($block, $content = '', $is_preview = false, $post_id = 0)
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
			<div class="Maindata">
				<div class="Mainsubdata">
					<h2>Who am i</h2>
					<h1>Developer in Learning</h1>
					<h4>My name is Thomas and im a 20 yr old developer currently on my 4th and last year of my developer education at TEC currently sitting in SKP and is looking for a intership! 
						<br> A bit about me, in my spare time i love cars and gaming so i use alot of time at my pc not only because of my education but also in my spare time </h4>
				</div>
			</div>
			<img class="smallimage" src="<?php echo wp_get_attachment_url(114); ?>">
		</div>
	</div>
	</div>

<?php }
