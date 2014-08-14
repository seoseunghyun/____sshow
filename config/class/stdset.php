<?php
/*
	SSHOW ( http://www.sshow.org )
	Copyright By SeoSeungHyun ( http://www.seoseunghyun.com || http://www.seunghyun.net )
	me@seunghyun.net
*/

// 기본 설정 변수
class sshowClass_stdset
{
	public 	$lang,	// 설정 언어 변수
			$echo;
	
	// 생성자
	function __construct()
	{
		// 설정 파일이 있을 경우 설정 파일의 내용으로 초기화 한다.
		if( file_exists( _SSHOW_DIR_.'data/config/init.xml' ) )
		{
			// 설정 파일의 경로 : _SSHOW_DIR_.'data/config/init.xml'
			$xml = simplexml_load_file( _SSHOW_DIR_.'data/config/init.xml' );
			$this->lang = $xml->lang;
		}
		$this->lang( 'en' );
	}
	
	function lang( $_lang )
	{
		$this->lang = $_lang;

		// 언어 파일의 경로 : _SSHOW_DIR_.'data/lang/'
		switch ( $_lang )
		{
			case 'en' : $langXml = simplexml_load_file( _SSHOW_DIR_.'data/lang/en.xml' ); break;
			case 'ko' : $langXml = simplexml_load_file( _SSHOW_DIR_.'data/lang/ko.xml' ); break;
		}
		
		$this->echo = $langXml;
		
		return $this->lang;
	}

}
