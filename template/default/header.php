<?php 
/**
 * SoftX CA, A portable CA web interface using PHP's OpenSSL extension.
 * Header Template
 * @author xiaomao
 * @copyright 2011 SoftX Technologies Inc.
 * @license see LICENSE
 * @tutorial see TUTORIAL
 * @uses PHP OpenSSL extension
 */

if (!defined('IN_SOFTX_CA')) die('I have to be used with SoftX CA!!!');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php echo $CA_long?></title>
<meta name="keywords" content="<?php foreach ($meta['keyword'] as $value) echo $value.', ';?>" />
<meta name="description" content="<?php echo $meta['description']?>" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="logo">
		<h1><?php echo $CA_long?></h1>
		<p><em><?php echo $slogan?></em></p>
	</div>
	<hr />
	<div id="header">
		<div id="menu" style="width: 100%">
			<ul>
				<li><a href="#" class="first">Home</a></li>
				<li class="current_page_item"><a href="#">Request</a></li>
				<li><a href="#">Admin</a></li>
				<li><a href="#">CSRs</a></li>
				<li><a href="#">Signed Certificates</a></li>
				<li><a href="#">About</a></li>
			</ul>
		</div>
	</div>
