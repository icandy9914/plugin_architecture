<?php
/**
 * @package testplugin
 */

/*
/*
 * Plugin Name: test plugin
 * Plugin URI: https://icandevelop.com/plugins/phonepe-by-icandevelop
 * Description: Test plugin by creating first plugin.
 * Author: I Can Develop
 * Author URI: https://icandevelop.com
 * Version: 1.0.0
 * License: GPLv2 or later
 * Text Domain: test-plugin
 */

 // checking with below code must be declared to secure plugin

//  if( ! defined('ABSPATH')){
//     die;
//  }

// If the file is called directly! abort !!
defined('ABSPATH') or die ("Hey Chutiye.. Kya kar rha hai yaha..");

// Require once the Composer autoload
if( file_exists( dirname( __FILE__) . '/vendor/autoload.php' ) ){

    require_once dirname( __FILE__) . '/vendor/autoload.php'; 
}



// use Inc\Base\Activate;
// use Inc\Base\Deactivate;

/**
 * The Code runs during plugin activation
 */
function activate()
{
    Inc\Base\Activate::activatePlugin();
}
register_activation_hook( __FILE__ , 'activate'); 

/**
 * The code runs during plugin deactivation
 */
function deactivate()
{
    Inc\Base\Deactivate::deactivatePlugin();
}
register_deactivation_hook( __FILE__ , 'deactivate'); 

if ( class_exists( 'Inc\\Init' ) ){
    Inc\Init::register_services();
}

?>