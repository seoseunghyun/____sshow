<?php
/*
	SSHOW ( http://www.sshow.org )
	Copyright By SeoSeungHyun ( http://www.seoseunghyun.com || http://www.seunghyun.net )
	me@seunghyun.net
*/

// IE6( Internet Explorer )와의 호환성을 위한 클래스
class sshowClass_ie6
{
	public $png;
	
	// 생성자
	function __construct()
	{
		// 설정 파일이 있을 경우 설정 파일의 내용으로 초기화 한다.
		if( file_exists( _SSHOW_DIR_.'data/common/init.xml' ) )
		{
			
		}
	}
	
	function png( $_png )
	{
		$this->lang = $_lang;
	}
}
