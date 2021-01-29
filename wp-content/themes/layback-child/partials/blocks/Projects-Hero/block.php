<?php

	add_action('acf/init', 'lb_register_ProjectsBigHero');
	function lb_register_ProjectsBigHero()
	{

	    // check function exists.
	    if( function_exists('acf_register_block_type') )
	    {

	    	$title 					= __('AboutMeHero', 'layback');
	    	$description 			= __('Herothing', 'layback');
	    	$tags 					=	array('DEMO');
	    	$align 					= array('wide', 'full');
	    	$render 				= 'lb_register_ProjectsBigboi';

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

	function lb_register_ProjectsBigboi( $block, $content = '', $is_preview = false, $post_id = 0 )
	{

		/* Add all variables in the top
		-------------------------------------------------- */

		$block_name			= substr($block['name'], 4);
		$block_id 			= $block['id'];
		$block_title 		= strtolower(str_replace(" ","_",$block['title']));
		$block_filename 	= pathinfo(__FILE__, PATHINFO_FILENAME);
		
		if( !empty($block['align']) ) {
			$block_align 	= $block['align'];
		}

	?>
	
	<div id="<?php echo $block_id; ?>" class="<?php if( !empty($block_align) ) { echo 'align-' . $block_align; } ?> block-<?php echo $block_name; ?>">
		<div class="bannerimage">
			<div class="imaget">
				<img src="<?php echo wp_get_attachment_url(53); ?>">
				
				<div class="Blureffect"></div>

				<div class="Maintxt">
					<div class="smalltxt">
						<h1>About Me!</h1>
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
    
    <?php }