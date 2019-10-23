<?php
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}


class TP_Weather {
	public function __construct() {
		$tp_weather_widget = new TP_Weather_Widget();
		$tp_weather_setting = new TP_Weather_Setting();
	}

	public function activation_hook() {
		//Thuc hien cong viec nao do khi Activate Plugin
		//Kiểm tra phien ban WordPress, neu khong dap ung se bi chan lai
		if (version_compare($GLOBALS['wp_version'], TP_WEATHER_MINIMUM_WP_VERSION, '<')) {
			$message = sprintf(__('<p>Plugin <strong>not compatible</strong> with WordPress %s. Requires WordPress %s to use this Plugin.</p>', 'tp_weather'), $GLOBALS['wp_version'], TP_WEATHER_MINIMUM_WP_VERSION);
			die($message);
		}
	}

	public function deactivation_hook() {
		//Thuc hien cong viec nao do khi Deactivate Plugin
	}
}