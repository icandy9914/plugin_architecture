<?php
/**
 * @package testplugin
 */

 namespace Inc\Base;
 
 class Deactivate {

    public static function deactivatePlugin()
    {
        flush_rewrite_rules();
    }
    
 }


 ?>