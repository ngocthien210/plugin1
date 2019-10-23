<?php
/*
Plugin Name: TP-Weather
Plugin URI: http://thachpham.com
Description: Simple Weather Plugin
Author: An Vu
Version: 1.0.0
Author URI: http://www.qhonline.info
Text Domain: tp_weather
*/
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

define('TP_WEATHER_VERSION', '1.0.0');
define('TP_WEATHER_MINIMUM_WP_VERSION', '4.1.1');
define('TP_WEATHER_PLUGIN_URL', plugin_dir_url(__FILE__));
define('TP_WEATHER_PLUGIN_DIR', plugin_dir_path(__FILE__));

require_once(TP_WEATHER_PLUGIN_DIR . 'includes/class.tp-weather-setting.php');
require_once(TP_WEATHER_PLUGIN_DIR . 'includes/class.tp-weather-api.php');
require_once(TP_WEATHER_PLUGIN_DIR . 'includes/class.tp-weather-widget.php');
require_once(TP_WEATHER_PLUGIN_DIR . 'includes/class.tp-weather.php');

//Dang ky Activation va Deactivation Hook
register_activation_hook( __FILE__, array( 'TP_Weather', 'activation_hook' ) );
register_activation_hook( __FILE__, array( 'TP_Weather', 'deactivation_hook' ) );


$tp_weather = new TP_Weather();