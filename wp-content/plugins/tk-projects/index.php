<?php 
defined('ABSPATH') or die('No script kiddies please!'); 
    /*
     *  Plugin Name: tk-projects
     *  Plugin URI: https://tkeriksen.com/
     *  Description: its me again
     *  Version: 1.0.0
     *  Author: THOMASS
     *  Author URI: https://tkeriksen.com/
     *  Text Domain: layback
     *  License: GPL2
    */


/********************************************************************************************************************/
/***************************************************** LANGUAGE *****************************************************/
/********************************************************************************************************************/

    add_action('init', 'init_language_text_domain_tkprojects');
    function init_language_text_domain_tkprojects() 
    {
        load_plugin_textdomain('layback', false, basename( dirname( __FILE__ ) ) . '/languages' ); 
    }
    


/********************************************************************************************************************/
/*************************************************** HOOKS ***************************************************/
/********************************************************************************************************************/

    // Checks if wooocommerce (or anohter plugin is installed, if not deactivates this plugin)
    // add_action('admin_init', 'dpt_check_active_plugins');
    // function dpt_check_active_plugins()
    // {
    //     if(!is_plugin_active('woocommerce/woocommerce.php'))
    //     {
    //         deactivate_plugins('/woocommerce-checkout-privatecompany/woocommerce-checkout-privatecompany.php' );
    //     }   
    // }


/********************************************************************************************************************/
/*************************************************** REQUIRE FILES ***************************************************/
/********************************************************************************************************************/

    require_once dirname(__FILE__).'/class--main.php';
    $oMainpluginprojects = new Mainpluginprojects();
