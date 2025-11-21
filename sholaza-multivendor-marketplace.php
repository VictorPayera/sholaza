<?php
/*
Plugin Name: Sholaza Multivendor Marketplace
Plugin URI: https://example.com/sholaza-multivendor-marketplace
Description: A powerful multivendor marketplace solution for WordPress.
Version: 1.0.0
Author: Victor Payera
Author URI: https://example.com
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

// Core initialization code
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

function sholaza_init() {
    // Initialize plugin functionality here
}
add_action( 'init', 'sholaza_init' );
