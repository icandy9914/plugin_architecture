<?php
/**
 * @package testplugin
 */

 namespace Inc\Base;

 class Activate {

    public static function activatePlugin()
    {
        flush_rewrite_rules();
    }
 }

 ?>