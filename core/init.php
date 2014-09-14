<?php
/*
	SSHOW ( http://www.sshow.org )
	Copyright By SeoSeungHyun ( http://www.seoseunghyun.com || http://www.seunghyun.net )
	me@seunghyun.net
*/

// This File is Init & Define configration file.

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

// Set Class Variables
$sshowClass_DB = null;
$sshowXML_config = null;

// Check Client Config. (Life User's Platform)
require( _SSHOW_DIR_.'core/detector.php' );
require( _SSHOW_DIR_.'core/config.php' );
require( _SSHOW_DIR_.'core/queryParser.php' );

// Import Useful Other Class.
require( _SSHOW_DIR_.'core/class/stdlib.php' );
$sshowClass_stdlib = new sshowClass_stdlib();


switch ( $sshowDisplay ){
	case 'main' : require( _SSHOW_DIR_.'core/container.php' ); break;
	case 'setup' : require( _SSHOW_DIR_.'include/setup/index.php' ); break;
	case 'admin' : require( _SSHOW_DIR_.'include/admin/index.php' ); break;
	default :
}
?>
