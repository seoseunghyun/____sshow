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
define( '_SSHOW_DIR_' , str_replace( 'config\\' , '' , str_replace( 'config/' , '' , str_replace( basename(__FILE__) , '' , __FILE__ ) ) ) );
define( '_SSHOW_URL_' , '' );
define( '_SSHOW_VERSION_' , '0.01b' );

define( '_SSHOW_JQUERY_VERSION_' , '1.11.1' );

// jquery CDN 이용 시 설정을 바꿀 수 있다.
define( '_SSHOW_JQUERY_DIR_' , _SSHOW_DIR_.'common/src/jquery.js' );
define( '_SSHOW_JQUERY_URL_' , _SSHOW_URL_.'common/src/jquery.js' );

// 설정 초기화
$sshowConfig = new sshowClass_config();



class sshowClass_config
{
	public $lang, $html, $mobileDetect;
	
	// 생성자
	function __construct()
	{
		// 설정 파일이 있을 경우 설정 파일의 내용으로 초기화 한다.
		if( file_exists( _SSHOW_DIR_.'data/common/init.xml' ) )
		{
			// 설정 파일의 경로 : _SSHOW_DIR_.'data/common/init.xml'
			$xml = simplexml_load_file( _SSHOW_DIR_.'data/common/init.xml' );
			$this->lang = $xml->lang;
			$this->html = $xml->html;
		}
		
		$this->lang = 'ko';
		$this->html = '4.1';

	}
	
	function lang( $_lang )
	{
		$this->lang = $_lang;
	}
}

?>