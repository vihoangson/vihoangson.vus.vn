<?php
/**
 * @package vihoangson
 * @version 1.0
 */
/*
Plugin Name: Vi Hoàng Sơn
Plugin URI: http://vihoangson.vus.vn
Description: My plugin
Author: Vi Hoàng Sơn
Version: 1.0
Author URI: http://vihoangson.vus.vn
*/

define('VHS_PLUGIN_URL', plugins_url( null, __FILE__ ));

function vhs_mce_css( $mce_css ) {
    if ( ! empty( $mce_css ) ) $mce_css .= ',';
    $mce_css .=  VHS_PLUGIN_URL. "/assets/css/editor.css";
    return $mce_css;
}
add_filter('mce_css', 'vhs_mce_css');
wp_enqueue_style( 'genericons', VHS_PLUGIN_URL.'/assets/css/editor.css');