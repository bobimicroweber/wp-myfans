<?php
/*
Plugin Name: WP MyFans
Plugin URI:
Description: This plugin helps to contect creators to make their own paid posts with monthly membership website.
Version:  1.0.0
Author: GeckoSystems
Author URI: https://geckosystems.com
Text Domain: wp-myfans
Domain Path: /languages
*/

if (!defined('ABSPATH')) exit;

define("WP_MYFANS_VERSION", "1.0.0");
define("WP_MYFANS_PLUGIN_PATH", plugin_dir_path(__FILE__));

require_once plugin_dir_path(__FILE__) . "vendor/autoload.php";

$plugin = new \WP_MyFans\WP_MyFansPlugin();
$plugin->run();