<?php
/*
Plugin Name: Materializer
Plugin URI: https://wpmaterializer.com
Description: The Material Design components for WordPress
Author: Materializer
Version: 0.1.0

Copyright (c) Cody Reichert - 2015
*/

/* Code starts here */

$pluginName = "Materializer";
$pluginVer = "0.1.0";


add_action('wp_enqueue_scripts', array('MaterializerBase', 'enqueueClientStyles' ));
add_action('wp_enqueue_scripts', array('MaterializerBase', 'enqueueClientScripts'));


class MaterializerBase {

    public static function enqueueClientStyles() {

        wp_register_style( 'M-Style-Bundle',
            plugins_url('scripts/dist/Materializer-bundle.css', __FILE__)
        );
        wp_enqueue_style('M-Style-bundle');

    }

    public static function enqueueClientScripts() {

        wp_register_script('M-Script-bundle',
            plugins_url('scripts/dist/Materializer-bundle.js', __FILE__)
        );
        wp_enqueue_script('M-Script-bundle');

    }

}
