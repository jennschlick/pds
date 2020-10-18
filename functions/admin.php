<?php
/*-----------------------------------------------------------------------------------*/
/* Admin functions
/*-----------------------------------------------------------------------------------*/

// Remove dashboard welcome panel and widgets
remove_action('welcome_panel', 'wp_welcome_panel');

function pds_disable_default_dashboard_widgets() {
  global $wp_meta_boxes;
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['yoast_db_widget']);
}
add_action('wp_dashboard_setup', 'pds_disable_default_dashboard_widgets', 999);

// Remove comment support
function pds_remove_comment_support() {
  remove_post_type_support( 'post', 'comments' );
  remove_post_type_support( 'page', 'comments' );
}
add_action( 'init', 'pds_remove_comment_support', 100 );

// Replace admin bar greeting
function pds_replace_howdy_greeting( $wp_admin_bar ) {
  $my_account=$wp_admin_bar->get_node('my-account');
  $newtitle = str_replace( 'Howdy, ', '', $my_account->title );
  $wp_admin_bar->add_node( array(
    'id' => 'my-account',
    'title' => $newtitle,
  ) );
}
add_filter( 'admin_bar_menu', 'pds_replace_howdy_greeting', 12 );

// Remove admin bar links
function pds_admin_bar_render() {
  global $wp_admin_bar;
  $wp_admin_bar->remove_menu( 'about' );
  $wp_admin_bar->remove_menu( 'comments' );
  $wp_admin_bar->remove_menu( 'customize' );
  $wp_admin_bar->remove_menu( 'documentation' );
  $wp_admin_bar->remove_menu( 'feedback' );
  $wp_admin_bar->remove_menu( 'menus' );
  $wp_admin_bar->remove_menu( 'new-content' );
  $wp_admin_bar->remove_menu( 'search' );
  $wp_admin_bar->remove_menu( 'support-forums' );
  $wp_admin_bar->remove_menu( 'themes' );
  $wp_admin_bar->remove_menu( 'wp-logo' );
  $wp_admin_bar->remove_menu( 'wporg' );
}
add_action( 'wp_before_admin_bar_render', 'pds_admin_bar_render' );

// Remove admin menu links
function pds_remove_admin_menus() {
  remove_menu_page( 'edit-comments.php' );
  // remove_menu_page( 'edit.php' );
}
add_action( 'admin_menu', 'pds_remove_admin_menus' );

// Remove help tabs
function pds_remove_help_tabs() {
  $screen = get_current_screen();
  $screen->remove_help_tabs();
}
add_action('admin_head', 'pds_remove_help_tabs');

// Remove Gutenberg editor
add_filter('use_block_editor_for_post', '__return_false', 10);
