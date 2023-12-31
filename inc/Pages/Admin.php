<?php

/**
 * @package testplugin
 */

namespace Inc\Pages;

class Admin 
{

    public function register()
    {
        add_action ( 'admin_menu' , array( $this , 'add_admin_pages' ) );
    }

    public function add_admin_pages()
    {
        add_menu_page( 'Test plugin' , 'test plugin' , 'manage_options', 'test_plugin' , array( $this, 'admin_menu_index' ) , 'dashicons-admin-plugins' , 110 );
        
    }

    public function admin_menu_index()
    {
        require_once PLUGIN_PATH.'templates/admin.php'; // included activation file here
        // code goes here
    }
    
}

