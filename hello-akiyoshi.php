<?php

/*
Plugin Name: Hello Akiyoshi
Plugin URI: https://github.com/ippey/hello-akiyoshi/
Version: 2.2.2
Description: This is not just a plugin. When activated you will randomly see a comment from famous Japanese Izakaya, Akiyoshi in the upper right of your admin screen on every page.
Author: Toro_Unit
Author URI: https://github.com/ippey/
Text Domain: hello-akiyoshi
Domain Path: /languages
*/


require "src/class-hello-akiyoshi.php";
require "src/class-hello-akiyoshi-speaker.php";
require "src/class-hello-akiyoshi-random-speaker.php";
require "src/class-akiyoshi.php";


/**
 * run plugin.
 */
function hello_akiyoshi_init() {
	$speaker = apply_filters( 'hello_akiyoshi_speaker', new Akiyoshi() );
	new Hello_Akiyoshi( $speaker );
	load_plugin_textdomain( 'hello-akiyoshi', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' );
}

add_action( 'plugins_loaded', 'hello_akiyoshi_init' );
