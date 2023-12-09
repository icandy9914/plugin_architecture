<?php
/**
 * @package testplugin
 */

namespace Inc;

final class Init
 {
    /**
     * Store all the classes inside an array
     * @return array Full list of classes
     */

    public static function get_services()
    {
        return [
            Pages\Admin::class,
            Base\Enqueue::class,
            Base\SettingsLink::class
        ];
    }

    /**
     * Loop through the classes, initialize them, and call the register() method if it exists
     * @return
     */

    public static function register_services()
    {
        foreach(self::get_services() as $class){
            $service = self::instantiate($class);
            if( method_exists( $service, 'register' ) ) {
                $service->register();
            }
        }
    }

    /**
     * Initialize the class
     * @param class $class class from the services array
     * @return class instance new instance of the class
     */
    private static function instantiate ( $class )
    {
        // $service = new $class();
        // return $service;
        return new $class();
    }
    
 }
 

//  use Inc\Activate;
// use Inc\Deactivate;
// use Inc\Admin\AdminPages;

// // if (! function_exists('add_action')){
// //     echo 'Hey, you can\t access this file';
// //     exit;
// // }

// if( ! class_exists ( 'TestPlugin' ) ) {
// class TestPlugin{

//     // public 
//     // can be accessed anywhere

//     // private
//     // can be accessed only within the class iteself but not the extension of class

//     // protected
//     // can be accessed only within the class iteself or extension of class

//     public $plugin_name;

//     public function __construct()
//     {
//         $this->initializedPostType();
//         $this->plugin_name = plugin_basename( __FILE__ );
//     }

//     public function register_admin_scripts(){
//         //add_action('admin_enqueue_scripts',array($this,'enqueue'));
//         add_action('admin_enqueue_scripts',array($this,'enqueue'));
//         add_action ( 'admin_menu' , array( $this , 'add_admin_pages' ) );
//         add_filter( "plugin_action_links_$this->plugin_name" , array( $this, 'settings_link') );  // created new link in current plugin after activation itself
//     }

//     public function settings_link($links){
//         $settings_link = '<a href="admin.php?page=test_plugin">Settings</a>';
//         array_unshift($links,$settings_link);
//         return $links;
        
//     }


//     public function add_admin_pages()
//     {
//         add_menu_page( 'Test plugin' , 'test plugin' , 'manage_options', 'test_plugin' , array( $this, 'admin_menu_index' ) , 'dashicons-admin-plugins' , 110 );
        
//     }

//     public function admin_menu_index()
//     {
//         require_once plugin_dir_path(__FILE__).'templates/admin.php'; // included activation file here
//         // code goes here
//     }

//     /**
//      * Fires after WordPress has finished loading but before any headers are sent.
//      *
//      */
//     public function action_init() : void {
//     }

//     // function uninstall(){
//     //     // delete CPT
//     //     // delte plugin date from db
//     // }

//     protected function initializedPostType()
//     {
//         add_action('init',array($this,'customy_post_type') );
//     }

//     function customy_post_type(){
//         register_post_type( 'movies',
//             // CPT Options
//                 array(
//                     'labels' => array(
//                         'name' => __( 'Movies' ),
//                         'singular_name' => __( 'Movie' )
//                     ),
//                     'public' => true,
//                     'has_archive' => true,
//                     'rewrite' => array('slug' => 'movies'),
//                     'show_in_rest' => true,
        
//                 )
//             );
//     }

//     function enqueue(){
//         wp_enqueue_style('mypluginstyl',plugins_url('/assets/mystyle.css',__FILE__));
//         wp_enqueue_script('mypluginscript',plugins_url('/assets/myscript.js',__FILE__));
//     }

//     function activate()
//     {
//         Activate::activatePlugin();

//     }

//     function deactivate()
//     {
//         Deactivate::deactivatePlugin();
//     }

// }


// $testPlugin = new TestPlugin();
// $testPlugin->register_admin_scripts();

// // activation
// register_activation_hook( __FILE__ , array( $testPlugin,'activate') ); 

// // deactivation
// register_deactivation_hook( __FILE__ , array($testPlugin , 'deactivate') ); 

// // uninstall
// //register_uninstall_hook(__FILE__,array($testPlugin,'uninstall'));

// }