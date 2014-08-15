<?php
/*
	SSHOW ( http://www.sshow.org )
	Copyright By SeoSeungHyun ( http://www.seoseunghyun.com || http://www.seunghyun.net )
	me@seunghyun.net
*/

// 사용자 환경 검출 변수
class sshowClass_detect
{
	public 	$png, 
			$dpi,
			$dpiValue,
			$mobile
			;
	
	// 생성자
	function __construct()
	{
		// 설정 파일이 있을 경우 설정 파일의 내용으로 초기화 한다.
		if( file_exists( _SSHOW_DIR_.'data/config/init.xml' ) )
		{
			// 설정 파일의 경로 : _SSHOW_DIR_.'data/common/init.xml'

		}
	}
	
	function dpi( $_dpi, $_dpiValue = 2 )
	{
		if( $_dpi )
		{
			
		}
		
		$this->dpiValue = $_dpiValue;
	}
}
