<?php
/*
	SSHOW ( http://www.sshow.org )
	Copyright By SeoSeungHyun ( http://www.seoseunghyun.com || http://www.seunghyun.net )
	me@seunghyun.net
*/

// 기본 설정 변수
class sshowClass_config
{
	public $lang, $html4;
	
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
		// html 4.1 이상 지원 true, html 5 기준 지원 false ( 하위 호환성 부재 )
		$this->html4 = true;

	}
	
	function lang( $_lang )
	{
		$this->lang = $_lang;
	}
}
