<?php
/*
Plugin Name: VoteIt
Plugin URI: http://voteit.com
Description: Decisions made easy.
Version: 1.0
Author: VoteIt
Author URI: http://voteit.com
License: GPL2
*/

function voteit_addbuttons() {
   // Don't bother doing this stuff if the current user lacks permissions
   if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
     return;
 
   // Add only in Rich Editor mode
   if ( get_user_option('rich_editing') == 'true') {
     add_filter("mce_external_plugins", "add_voteit_tinymce_plugin");
     add_filter('mce_buttons', 'register_voteit_button');
   }
}
 
function register_voteit_button($buttons) {
   array_push($buttons, "separator", "voteit");
   return $buttons;
}
 
// Load the TinyMCE plugin : editor_plugin.js (wp2.5)
function add_voteit_tinymce_plugin($plugin_array) {
   $plugin_array['voteit'] = plugin_dir_url(__FILE__).'mce/editor_plugin.js';
   return $plugin_array;
}
 
// init process for button control
add_action('init', 'voteit_addbuttons');
?>
