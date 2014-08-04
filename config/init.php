<?php
/*
	SSHOW ( http://www.sshow.org )
	Copyright By SeoSeungHyun ( http://www.seoseunghyun.com || http://www.seunghyun.net )
	me@seunghyun.net
*/

// 기본 설정
define( '_SSHOW_' , true);
define( '_SSHOW_DIR' , str_replace( 'config\\' , '' , str_replace( 'config/' , '' , str_replace( basename(__FILE__) , '' , __FILE__ ) ) ) );
define( '_SSHOW_VERSION_' , '0.01b');

// 설정 초기화
$sshowConfig = new sshowClass_config();



class sshowClass_config
{
	public $lang, $html, $mobileDetect;
	
	// 생성자
	function __construct()
	{
		if( file_exists('') )
		{
			
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