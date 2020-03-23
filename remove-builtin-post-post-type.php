<?php

/**
 * Plugin Name: Remove builtin Post post type
 * Description: Remove builtin Post post type
 * Version: 0.0.1
 * Plugin URI: https://github.com/teknologi/remove-builtin-post-post-type
 * Author: Hans Czajkowski Jørgensen
 * Text Domain: teknologi_reove_builtin_post_post_type
 * Domain Path: /languages
 */

namespace Teknologi;

/**
 * Remove side menu for Post post type
 */
function remove_default_post_type() {
  remove_menu_page( 'edit.php' );
}

/**
 * Remove +New post in top Admin Menu Bar for Post post type
 */
function remove_default_post_type_menu_bar( $wp_admin_bar ) {
  $wp_admin_bar->remove_node( 'new-post' );
}

/**
 * Remove Quick Draft Dashboard Widget
 */
function remove_draft_widget(){
  remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
}

add_action( 'admin_menu', 'Teknologi\remove_default_post_type' );
add_action( 'admin_bar_menu', 'Teknologi\remove_default_post_type_menu_bar', 999 );
add_action( 'wp_dashboard_setup', 'Teknologi\remove_draft_widget', 999 );