<?php
/**
* Trigger this file on pligin instaull

* @package testplugin

 */

 if (! defined('WP_UNINSTALL_PLUGIN')){
    die;
 }

 // Clear database store data

//  $movies = get_posts(array('post_type'=>'movies','numberposts'=> -1));
//  foreach($movies as $movie){
//     wp_delete_post($movie->ID,true);
//  }

 global $wpdb;
 $wpdb->query( "DELETE FROM wp_posts WHERE post_type='movies'");
 $wpdb->query("DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT ID FROM wp_posts)");
 $wpdb->query("DELETE FROM wp_term_relationship WHERE object_id NOT IN (SELECT ID FROM wp_posts)");


