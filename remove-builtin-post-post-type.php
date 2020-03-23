<?php

/**
 * Plugin Name: Remove builtin Post post type
 * Description: Remove builtin Post post type
 * Version: 1.0.0
 * Plugin URI: https://github.com/teknologi/remove-builtin-post-post-type
 * Author: Hans Czajkowski Jørgensen
 * Text Domain: teknologi_reove_builtin_post_post_type
 * Domain Path: /languages
 * License:     GPL2

 * Remove builtin Post post type is free software: you can redistribute
 * it and/or modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation, either version 2 of the
 * License, or any later version.
*
 * Remove builtin Post post type is distributed in the hope that it will
 * be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with Remove builtin Post post type. If not, see
 * https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html.
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