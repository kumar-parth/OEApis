<?php
/**
 * Plugin Name: OE Apis
 * Plugin URI:
 * Description: Custom APIs for OE.
 * Author: Kumar Parth
 * Version: 1.0.0
 * Author URI:
 * Domain Path:
 * Text Domain:
 */


//include_once  '/classes/autoload.php';
include_once 'OEApis.class.php';
function api_endpoint_data() {
    $apisObj = new OEApis();
    $apisObj->dispatch();
}

api_endpoint_data();