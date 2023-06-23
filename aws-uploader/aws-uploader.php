<?php

/*
Plugin Name: AWS Uploader
Description: Store media files on AWS Server
Author: 
Version: 1.0
Author URI: 
*/

require_once __DIR__ . '/inc/namespace.php';

add_action( 'plugins_loaded', 'S3_Uploads\\init', 0 );
