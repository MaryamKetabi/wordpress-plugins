<?php
/*
Plugin Name: wp apis
Plugin URI: https://github.com
Description: A simple plugin to create a login form using shortcodes.
Author: Maryam Ketabi
Author URI: https://github.com
Text Domain: wp-apis
Domain Path: /languages/
Version: 1.0.0
*/
if(!defined('ABSPATH')) {
    exit;
}
define('WP_API_DIR', plugin_dir_path(__FILE__));
define('WP_API_URL', plugin_dir_url(__FILE__));
define('WP_API_INC', WP_API_DIR.'/inc/');
define('WP_API_TPL', WP_API_DIR.'/tpl/');

register_activation_hook(__FILE__, 'wp_apis_plugin_activation');
register_deactivation_hook(__FILE__, 'wp_apis_plugin_deactivation');

function wp_apis_plugin_deactivation() {

}
function wp_apis_plugin_activation() {

}

if (is_admin()) {
    include WP_API_INC.'admin/menus.php';
}