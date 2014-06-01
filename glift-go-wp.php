<?php
/*
Plugin Name: Glift Go Game		
Version: 0.0.1
Plugin URI: http://www.gliftgo.com/
Description: Integrates the Glift responsive Go library with WordPress. This provides invaluable tools for any WordPress site about the board game Go.
Author: Go Game Guru
Author URI: http://gogameguru.com/
License: MIT

Glift Go Game WordPress Plugin
Copyright (c) 2014 Go Game Guru

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/

// if we're not running in WordPress, then stop here
if ( !defined( 'ABSPATH' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}

$glift_js_version = '0.11.0'; // change this on js update to prevent browsers caching old scripts

// find absolute plugin url and get current protocol (http or https) to avoid serving mixed content
$glift_url = plugins_url( '', __FILE__ );

// find plugin files and load the Glift Go Plugin
$glift_path = plugin_dir_path( __FILE__ );
require $glift_path.'includes/glift-main.php';