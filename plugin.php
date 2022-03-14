<?php
/*
Plugin Name: MyFans
Plugin URI:
Description: This plugin helps to contect creators to make their own paid posts with monthly membership website.
Version:  1.0.0
Author: GeckoSystems
Author URI: https://geckosystems.com
Text Domain: myfans
Domain Path: /languages
*/

if (!defined('ABSPATH')) exit;

define("MYFANS_VERSION", "1.0.0");
define("MYFANS_PLUGIN_PATH", plugin_dir_path(__FILE__));

require_once plugin_dir_path(__FILE__) . "vendor/autoload.php";

$plugin = new \MyFans\MyFansPlugin();
$plugin->run();