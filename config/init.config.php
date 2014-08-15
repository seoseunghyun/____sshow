<?php
/*
	SSHOW ( http://www.sshow.org )
	Copyright By SeoSeungHyun ( http://www.seoseunghyun.com || http://www.seunghyun.net )
	me@seunghyun.net
*/


/*
	기본 설정
	php버전 5.0 이상을 지원합니다.
	_SSHOW_*_ public 전역 상수
	__SSHOW_*__ private 전역 상수
*/
define( '_SSHOW_' , true );
define( '_SSHOW_VERSION_' , '0.01b' );
define( '_SSHOW_DIR_' , str_replace( 'config\\' , '' , str_replace( 'config/' , '' , str_replace( basename(__FILE__) , '' , __FILE__ ) ) ) );
define( '_SSHOW_URL_' , '' );



/*
	Import jQuery
	(Javascript Library)
	// _SSHOW_JQUERY_URL_을 이용해서 jquery CDN 이용 시 설정을 바꿀 수 있다.
*/
define( '_SSHOW_JQUERY_' , true );
define( '_SSHOW_JQUERY_VERSION_' , '1.11.1' );
define( '_SSHOW_JQUERY_DIR_' , _SSHOW_DIR_.'common/src/jquery.js' );
define( '_SSHOW_JQUERY_URL_' , _SSHOW_URL_.'common/src/jquery.js' );


/*
	Import jQuery UI
	(jQuery Library)
	// _SSHOW_JQUERY-UI_URL_을 이용해서 jquery CDN 이용 시 설정을 바꿀 수 있다.
*/
define( '_SSHOW_JQUERY_UI_' , true );
define( '_SSHOW_JQUERY_UI_VERSION_' , '1.11.1' );
define( '_SSHOW_JQUERY_UI_DIR_' , _SSHOW_DIR_.'common/src/jquery-ui.js' );
define( '_SSHOW_JQUERY_UI_URL_' , _SSHOW_URL_.'common/src/jquery-ui.js' );



/*
	Import Raphaël
	(Cross Vector Graphic Javascript Library)
	// _SSHOW_RAPHAEL_URL_을 이용해서 Raphaël CDN 이용 시 설정을 바꿀 수 있다.
*/
define( '_SSHOW_RAPHAEL_' , true );
define( '_SSHOW_RAPHAEL_VERSION_' , '2.1.2' );
define( '_SSHOW_RAPHAEL_DIR_' , _SSHOW_DIR_.'common/src/raphael.js' );
define( '_SSHOW_RAPHAEL_URL_' , _SSHOW_URL_.'common/src/raphael.js' );

// 클래스 호출
require_once( _SSHOW_DIR_.'/config/class/stdset.class.php' );
require_once( _SSHOW_DIR_.'/config/class/detect.class.php' );

// 클래스 등록 ( 생성 )
// 설정 초기화
$sshow = new sshowClass_stdset();
$sshowDetect = new sshowClass_detect();

// 강제 설정
$sshow->html(5);
?>