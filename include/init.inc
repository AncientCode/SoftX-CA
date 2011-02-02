<?php 
/**
 * SoftX CA, A portable CA web interface using PHP's OpenSSL extension.
 * System Initialize File
 * @author xiaomao
 * @copyright 2011 SoftX Technologies Inc.
 * @license see LICENSE
 * @tutorial see TUTORIAL
 * @uses PHP OpenSSL extension
 */
// Where is this installation?
$install_root = dirname(__FILE__);
$install_root = dirname($install_root);

// Get the configuretion
require_once $install_root.'config.php';

// Dependencies
if (function_exists('openssl_csr_new')) die('OpenSSL extension required!!!');
