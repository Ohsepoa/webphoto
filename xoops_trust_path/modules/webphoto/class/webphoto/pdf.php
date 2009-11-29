<?php
// $Id: pdf.php,v 1.6 2009/11/29 07:34:21 ohwada Exp $

//=========================================================
// webphoto module
// 2009-01-10 K.OHWADA
//=========================================================

//---------------------------------------------------------
// change log
// 2009-11-11 K.OHWADA
// webphoto_lib_error -> webphoto_cmd_base
// 2009-04-21 K.OHWADA
// chmod_file()
// 2009-01-25 K.OHWADA
// icon_name in create_image()
//---------------------------------------------------------

if ( ! defined( 'XOOPS_TRUST_PATH' ) ) die( 'not permit' ) ;

//=========================================================
// class webphoto_pdf
// wrapper for webphoto_lib_xpdf
//=========================================================
class webphoto_pdf extends webphoto_cmd_base
{
	var $_config_class;
	var $_multibyte_class;
	var $_xpdf_class;
	var $_imagemagick_class;

	var $_ini_safe_mode ;
	var $_cfg_use_xpdf;

	var $_cached = array();

	var $_TMP_DIR;

	var $_PDF_EXT    = 'pdf';
	var $_JPEG_EXT   = 'jpg';
	var $_TEXT_EXT   = 'txt';

//---------------------------------------------------------
// constructor
//---------------------------------------------------------
function webphoto_pdf( $dirname, $trust_dirname )
{
	$this->webphoto_cmd_base( $dirname, $trust_dirname );

	$this->_config_class      =& webphoto_config::getInstance( $dirname );
	$this->_xpdf_class        =& webphoto_lib_xpdf::getInstance();
	$this->_imagemagick_class =& webphoto_lib_imagemagick::getInstance();
	$this->_multibyte_class   =& webphoto_multibyte::getInstance();

	$this->_cfg_use_xpdf = $this->_config_class->get_by_name( 'use_xpdf' );
	$this->_cfg_xpdfpath = $this->_config_class->get_dir_by_name(  'xpdfpath' );
	$this->_TMP_DIR      = $this->_config_class->get_work_dir( 'tmp' );

	$this->_xpdf_class->set_cmd_path( $this->_cfg_xpdfpath );

	$this->set_debug_by_ini_name( $this->_xpdf_class );
}

function &getInstance( $dirname, $trust_dirname )
{
	static $instance;
	if (!isset($instance)) {
		$instance = new webphoto_pdf( $dirname, $trust_dirname );
	}
	return $instance;
}

//---------------------------------------------------------
// create image
//---------------------------------------------------------
function create_image( $item_id, $src_file, $icon_name=null )
{
	if ( empty($src_file) ) {
		return null ;
	}
	if ( ! is_file($src_file) ) {
		return null ;
	}
	if ( ! $this->_cfg_use_xpdf ) {
		return null ;
	}

	if ( isset( $this->_cached[ $item_id ] ) ) {
		$created_file = $this->_cached[ $item_id ];
	} else {
		$created_file = $this->create_jpeg( $item_id, $src_file );
	}

	if ( ! is_file($created_file) ) {
		$arr = array(
			'flag'   => false ,
			'errors' => $this->get_errors(),
		);
		return $arr ;
	}

	$this->_cached[ $item_id ] = $created_file ;

	if( empty($icon_name) ) {
		$icon_name = $this->_PDF_EXT ;
	}

	$arr = array(
		'flag'      => true ,
		'item_id'   => $item_id ,
		'src_file'  => $created_file ,
		'src_ext'   => $this->_JPEG_EXT ,
		'icon_name' => $icon_name ,
	);
	return $arr;
}

function create_jpeg( $item_id, $pdf_file )
{
	if ( !$this->_cfg_use_xpdf ) {
		return false;
	}

	$prefix   = 'tmp_'. sprintf("%04d", $item_id );
	$root     = $this->_TMP_DIR .'/'. $prefix;
	$jpg_file = $this->_TMP_DIR .'/'. $prefix .'.'. $this->_JPEG_EXT;
	$ppm_file = $this->_xpdf_class->pdf_to_ppm( $pdf_file, $root );

	if ( !is_file($ppm_file) ) {
		$this->set_error( $this->_xpdf_class->get_msg_array() );
		return false;
	}

	$this->_imagemagick_class->convert( $ppm_file, $jpg_file );
	unlink( $ppm_file );
	if ( $this->_flag_chmod ) {
		$this->chmod_file( $jpg_file );
	}

	return $jpg_file;
}

//---------------------------------------------------------
// text content
//---------------------------------------------------------
function get_text_content( $pdf_file )
{
	$this->_content = null;

	if ( empty($pdf_file) ) {
		return 0 ;	// no action
	}
	if ( ! is_file($pdf_file) ) {
		return 0 ;	// no action
	}
	if ( !$this->_cfg_use_xpdf ) {
		return 0 ;	// no action
	}

	$txt_file = $this->_TMP_DIR .'/'. uniqid('tmp_') .'.'. $this->_TEXT_EXT ;
	$ret = $this->pdf_to_text( $pdf_file, $txt_file );
	if ( !$ret ) {
		$arr = array(
			'flag'   => false ,
			'errors' => $this->get_errors(),
		);
		return $arr;
	}

	$text = file_get_contents( $txt_file );
	$text = $this->_multibyte_class->convert_from_utf8( $text );
	$text = $this->_multibyte_class->build_plane_text(  $text );
	$this->_content = $text;

	unlink($txt_file);

	$arr = array(
		'flag'    => true ,
		'content' => $text ,
	);
	return $arr;
}

function pdf_to_text( $pdf_file, $txt_file )
{
	if ( !$this->_cfg_use_xpdf ) {
		return false;
	}

	$ret = $this->_xpdf_class->pdf_to_text( $pdf_file, $txt_file );
	if ( $ret && is_file($txt_file) ) {
		if ( $this->_flag_chmod ) {
			chmod( $txt_file, 0777 );
		}
		return true;
	}

	$this->set_error( $this->_xpdf_class->get_msg_array() );
	return false;
}

// --- class end ---
}

?>