<?php
/**
 * WAF Init file
 *
 * Warning: For security purposes this file must always be auto-prepended before any HTTP(s) request
 * For example:
 * php_value auto_prepend_file 'path/to/waf/init.php'
 *
 * PHP version 7.1
 *
 * @package Prepend
 * @author  Ned Andonov <neoplovdiv@gmail.com>
 */

// Start session
session_start();

// Initiates prepend logic and runs firewall
$waf = WAF\Prepend::init();
$waf->run();