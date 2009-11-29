<?php
// $Id: header_file.php,v 1.4 2009/11/29 07:34:23 ohwada Exp $

//=========================================================
// webphoto module
// 2008-12-12 K.OHWADA
//=========================================================

//---------------------------------------------------------
// change log
// 2009-11-11 K.OHWADA
// main/header_item_handler.php
// 2009-01-25 K.OHWADA
// webphoto_include_once_preload_trust()
// 2009-01-10 K.OHWADA
// msg.php
//---------------------------------------------------------

if( ! defined( 'WEBPHOTO_TRUST_PATH' ) ) die( 'not permit' ) ;

//---------------------------------------------------------
// webphoto files
//---------------------------------------------------------
webphoto_include_once( 'main/header_item_handler.php' );

webphoto_include_once( 'class/xoops/base.php' );

webphoto_include_once( 'class/d3/language.php' );
webphoto_include_once( 'class/d3/preload.php' );

webphoto_include_once( 'class/lib/msg.php' );
webphoto_include_once( 'class/lib/post.php' );
webphoto_include_once( 'class/lib/base.php' );
webphoto_include_once( 'class/lib/multibyte.php' );

webphoto_include_once( 'class/handler/cat_handler.php' );
webphoto_include_once( 'class/handler/file_handler.php' );

webphoto_include_once( 'class/webphoto/kind.php' );
webphoto_include_once( 'class/webphoto/config.php' );
webphoto_include_once( 'class/webphoto/item_public.php' );
webphoto_include_once( 'class/webphoto/file_read.php' );

webphoto_include_language( 'main.php' );

webphoto_include_once_preload_trust();
webphoto_include_once_preload();

?>