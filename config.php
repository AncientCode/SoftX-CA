<?php
/**
 * SoftX CA, A portable CA web interface using PHP's OpenSSL extension.
 * Configuration File
 * @author xiaomao
 * @copyright 2011 SoftX Technologies Inc.
 * @license see LICENSE
 * @tutorial see TUTORIAL
 * @uses PHP OpenSSL extension
 */

/******Basic Configuration******/
/* Name */
$CA = ''; // Name of you CA here, short form like SoftX
$slog = ''; // URL friendly version of the name like softxca
$CA_long = ''; // Full name of the CA, like SoftX Certificate Authority
$slogan = 'The only free CA for open source software!';

/****** Interface ******/
$meta = array();
$meta['keyword'] = array('Certificate', 'CA', 'free');
$meta['description'] = '';
