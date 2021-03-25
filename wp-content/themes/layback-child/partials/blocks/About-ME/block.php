<?php

	add_action('acf/init', 'lb_register_AboutMEsecond');
	function lb_register_AboutMEsecond()
	{

	    // check function exists.
	    if( function_exists('acf_register_block_type') )
	    {

	    	$title 					= __('AboutMesecond', 'layback');
	    	$description 			= __('justhere', 'layback');
	    	$tags 					=	array('DEMO');
	    	$align 					= array('wide', 'full');
	    	$render 				= 'lb_register_Abouemehsec';

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

	function lb_register_Abouemehsec( $block, $content = '', $is_preview = false, $post_id = 0 )
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
			<div class="container">
			<div class="leftcontainer">
			<h1>$me = User( </h1>
			<h2>Name: Thomas Eriksen;</br>
				Lives-in: Denmark 🇩🇰; </br>
				Loves: Cars 🚗; 
			</h2>
			<h1>)</h1>
			</div>
			</div>
	</div>
    
    <?php }