<?php
/*
	SSHOW ( http://www.sshow.org )
	Copyright By SeoSeungHyun ( http://www.seoseunghyun.com || http://www.seunghyun.net )
	me@seunghyun.net
*/

// This File is Init & Define configration file.

/*
	Support to php 5.0 Version.
	_SSHOW_*_ public Global Define.
	__SSHOW_*__ private Local Define (For Inner Developers).
*/
define( '_SSHOW_' , true );
define( '_SSHOW_VERSION_' , '0.01b' );
define( '_SSHOW_DIR_' , str_replace( 'core\\' , '' , str_replace( 'core/' , '' , str_replace( basename(__FILE__) , '' , __FILE__ ) ) ) );
define( '_SSHOW_URL_' , '' );

// Set Class Variables
	$sshowClass_DB = null;
	$sshowClass_stdlib = null;
	$sshowXML_config = null;


// Import Useful Other Class.
	require( _SSHOW_DIR_.'core/class/stdlib.php' );
	$sshowClass_stdlib = new sshowClass_stdlib();
	
	// Make a Class of Client Config & Check to exist Admin Config File.
	require( _SSHOW_DIR_.'core/config.php' );


// import extern action php file.
if( defined( '_SSHOW_ACTION_' ) ) return;


// ----- Start Rendering Web.

/*
	Import jQuery
	(Javascript Library)
	_SSHOW_JQUERY_URL_을 이용해서 jquery CDN 이용 시 설정을 바꿀 수 있다.
*/
define( '_SSHOW_JQUERY_' , true );
define( '_SSHOW_JQUERY_VERSION_' , '1.11.1' );
define( '_SSHOW_JQUERY_DIR_' , _SSHOW_DIR_.'common/js/jquery.js' );
define( '_SSHOW_JQUERY_URL_' , _SSHOW_URL_.'common/js/jquery.js' );

/*
	Import jQuery UI
	(jQuery Library)
	_SSHOW_JQUERY-UI_URL_을 이용해서 jquery CDN 이용 시 설정을 바꿀 수 있다.
*/
define( '_SSHOW_JQUERY_UI_' , true );
define( '_SSHOW_JQUERY_UI_VERSION_' , '1.11.1' );
define( '_SSHOW_JQUERY_UI_DIR_' , _SSHOW_DIR_.'common/js/jquery-ui.js' );
define( '_SSHOW_JQUERY_UI_URL_' , _SSHOW_URL_.'common/js/jquery-ui.js' );

/*
	Import Raphaël JS
	(Cross Vector Graphic Javascript Library)
	_SSHOW_RAPHAEL_URL_을 이용해서 Raphaël CDN 이용 시 설정을 바꿀 수 있다.
*/
define( '_SSHOW_RAPHAEL_' , true );
define( '_SSHOW_RAPHAEL_VERSION_' , '2.1.2' );
define( '_SSHOW_RAPHAEL_DIR_' , _SSHOW_DIR_.'common/js/raphael.js' );
define( '_SSHOW_RAPHAEL_URL_' , _SSHOW_URL_.'common/js/raphael.js' );


// Detecting & Parsing Client Config. (Life User's Platform)
require( _SSHOW_DIR_.'core/detector.php' );
require( _SSHOW_DIR_.'core/queryParser.php' );




switch ( $sshowDisplay ){
	case 'main' : require( _SSHOW_DIR_.'core/container.php' ); break;
	//case 'setup' : require( _SSHOW_DIR_.'core/container.php' ); break;
	case 'setup' : require( _SSHOW_DIR_.'include/setup/index.php' ); break;
	case 'admin' : require( _SSHOW_DIR_.'include/admin/index.php' ); break;
	default : 
}

?>
