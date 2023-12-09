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

// Define Constants
define( 'PLUGIN_PATH' , plugin_dir_path( __FILE__ ));
define( 'PLUGIN_URL' , plugin_dir_url( __FILE__ ));
define( 'PLUGIN_NAME' , plugin_basename( __FILE__ ));

use Inc\Base\Activate;
use Inc\Base\Deactivate;

/**
 * The Code runs during plugin activation
 */
function activate()
{
    Activate::activatePlugin();
}

/**
 * The code runs during plugin deactivation
 */
function deactivate()
{
    Deactivate::deactivatePlugin();
}


register_activation_hook( __FILE__ , 'activate'); 
register_deactivation_hook( __FILE__ , 'deactivate'); 

if ( class_exists( 'Inc\\Init' ) ){
    Inc\Init::register_services();
}

?>