<?php 
/*
Plugin Name: SM Instagram Plugins
Plugin URI: 
Author: Mahabubur Rahman
Author URI: http://mahabub.me/
Description: The Google+ Plugins is a wordpress widget plugin. It lets you easily embed and promote any Google Plus Page or User profile follow button or Badge on your website. Just like on Google Plus, your visitors can follow the Page or user without leaving your site.
Version: 1.0.0
*/

define( 'SM_INSTAGRAM_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'SM_INSTAGRAM_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// include_once( SM_GOOGLEPLUS_PLUGIN_PATH . 'includes/sm_google_plus_follow_button.php' );

include_once( SM_INSTAGRAM_PLUGIN_PATH . 'includes/sm_instagram_badge.php' );

function sm_instagram_plugin_scripts() {

  wp_enqueue_style( 'plugin', SM_INSTAGRAM_PLUGIN_URL . '/assets/css/plugin.css', false, null, 'all');
 
  // wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);

}
add_action( 'wp_enqueue_scripts', 'sm_instagram_plugin_scripts' );


// Register and load the widget
function sm_instagram_plugin_load_widget() {
	register_widget( 'SMInstagramPluginsBadge');
}
add_action( 'widgets_init', 'sm_instagram_plugin_load_widget' );

