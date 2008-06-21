<?php
// $Id: mytrustdirname.php,v 1.2 2008/06/21 17:15:23 ohwada Exp $

//=========================================================
// webphoto module
// 2008-04-02 K.OHWADA
//=========================================================

if( ! defined( 'XOOPS_TRUST_PATH' ) ) die( 'not permit' ) ;

$GLOBALS['MY_DIRNAME'] = $MY_DIRNAME;

// for altsys
$mydirname = $MY_DIRNAME;

$MY_TRUST_DIRNAME = 'webphoto' ;

// xoops_virsion.php call many times
if ( !defined("WEBPHOTO_TIME_START") ) {
	list($usec, $sec) = explode(" ",microtime()); 
	$time = floatval($sec) + floatval($usec); 
	define("WEBPHOTO_TIME_START", $time );
}
if ( !defined("WEBPHOTO_TRUST_DIRNAME") ) {
	define("WEBPHOTO_TRUST_DIRNAME", $MY_TRUST_DIRNAME );
}
if ( !defined("WEBPHOTO_TRUST_PATH") ) {
	define("WEBPHOTO_TRUST_PATH", XOOPS_TRUST_PATH.'/modules/'.WEBPHOTO_TRUST_DIRNAME );
}



?>