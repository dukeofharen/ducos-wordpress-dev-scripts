<?php
/*
 * Plugin Name: Duco's WordPress dev scripts
 * Author: Ducode
 * Author URI: https://ducode.org
 * Version: 0.0.1
 */
const DWD_PLUGIN_ROOT = __DIR__;
const DWD_PLUGIN_FILE = __FILE__;
require_once __DIR__ . "/helpers.php";
if ( DwdHelpers::getConstantOrDefault( "DWD_MAIL", false ) ) {
	require_once __DIR__ . "/smtp.php";
}