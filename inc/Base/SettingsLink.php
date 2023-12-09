<?php
/**
 * @package testplugin
 */

 namespace Inc\Base;
 use \Inc\Base\BaseController;

 class SettingsLink extends BaseController{

    // protected $plugin_name;

    // public function __construct()
    // {
    //     $this->plugin_name = PLUGIN_NAME;
    // }

    public function register()
    {
        //add_filter( "plugin_action_links_$this->plugin_name" , array( $this, 'settings_link') ); 
        add_filter( "plugin_action_links_" . $this->plugin_name , array( $this, 'settings_link') ); 
    }
    
    public function settings_link($links){
        $settings_link = '<a href="admin.php?page=test_plugin">Settings</a>';
        array_unshift($links,$settings_link);
        return $links;  
    }

 }