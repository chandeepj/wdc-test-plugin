<?php
/**
 * Init file
 */

# Load files.
array_map( function( $File ) {
    require_once( WDC_PLUGIN_DIR . "src/{$File}.php" );
}, [
    'register-demo' # registers wdc-demos CPT
] );

add_action( 'wp_enqueue_scripts', 'wdc_enqueue_scripts' );
/**
 * Enqueue frontend scripts
 */
function wdc_enqueue_scripts() {

    $asset_uri = WDC_PLUGIN_URI . 'assets/';

    wp_enqueue_script( 
        'wdc-test', 
        $asset_uri . 'script.js', 
        [ 'jquery' ], 
        null, 
        true 
    );
}