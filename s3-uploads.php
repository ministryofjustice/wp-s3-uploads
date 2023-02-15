<?php

/*
Plugin Name: S3 Uploads
Description: Store uploads in S3
Author: Human Made Limited
Version: 3.0.10
Author URI: https://hmn.md
*/

require_once __DIR__ . '/inc/namespace.php';

require_once __DIR__ . '/inc/class-wp-cli-command.php';
require_once __DIR__ . '/inc/class-image-editor-imagick.php';
require_once __DIR__ . '/inc/class-local-stream-wrapper.php';
require_once __DIR__ . '/inc/class-plugin.php';
require_once __DIR__ . '/inc/class-stream-wrapper.php';
require_once __DIR__ . '/inc/class-wp-cli-command.php';

add_action( 'plugins_loaded', 'S3_Uploads\\init', 0 );
