<?php
/*
Plugin Name: MyPlugin
Description: Example plugin for the video tutorial series, "Wordpress: Plugin Development", available at Lynda.com.
Plugin URI: https://profiles.wordpress.org/specialk
Author: Jeff Starr
Version: 1.0
Text Domain: myplugin
Domain Path: /languages
License: GPL v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.txt
*/

// exit if file is called directly
if (!defined('ABSPATH')) {

  exit;
}


// if admin area
if (is_admin()) {

  // include dependencies
  require_once plugin_dir_path(__FILE__) . 'admin/admin-menu.php';
  require_once plugin_dir_path(__FILE__) . 'admin/settings-page.php';
  require_once plugin_dir_path(__FILE__) . 'admin/settings-register.php';
  require_once plugin_dir_path(__FILE__) . 'admin/settings-callbacks.php';
}
