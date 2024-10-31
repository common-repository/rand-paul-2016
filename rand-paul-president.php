<?php
/*
Plugin Name: Rand Paul 2016
Plugin URI: http://www.mikebrawley.com/
Description: When activated, this plugin will place an image with link on the top right corner of your Wordpress powered website.
Author: Mike Brawley
Version: 1.0
License: GPLv2
Author URI: http://www.mikebrawley.com
*/

function render_rand_paul_president() {
   $president_url = plugins_url( 'rand-paul-president.png', __FILE__ );
   echo "<a target='_blank' class='rand-paul-president' href='http://www.randpaul2016.com/'><img src='{$president_url}' alt='Rand Paul - Restore America' style='position: fixed; top: 0; right: 0; z-index: 100000; cursor: pointer;' /></a>";
}
add_action( 'wp_footer', 'render_rand_paul_president' );