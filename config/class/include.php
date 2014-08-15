<?php
/*
	SSHOW ( http://www.sshow.org )
	Copyright By SeoSeungHyun ( http://www.seoseunghyun.com || http://www.seunghyun.net )
	me@seunghyun.net
*/

// sshow include 클래스
class sshowClass_include
{
	public 	$head = '',
			$body = '',
			$javascript = array(),
			$css = array()
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
	
	function head( $_head )
	{
		$this->head = $_head;
		return $this->head;
	}
	
	function body( $_body )
	{
		$this->body = $_body;
		return $this->body;
	}
	
	function javascript( $_url,  $_group = false )
	{
		$_groupLength = strlen( $_group );
		$_dir = _SSHOW_DIR_.$_url;
		if( is_dir( $_dir ) ){
			$_dirs = dir( $_dir );
			while( false !== ( $_entry = $_dirs->read() ) )
			{
				if( substr($_entry, 0, 7) == 'common.' || ( $_group != false && substr($_entry, 0, $_groupLength + 1) == $_group.'.' ) || substr($_entry, 0, 9) == 'common.js' )
				{
					array_push( $this->javascript, $_url.$_entry );
				}
			}
			$_dirs->close();
		}
	}
	
	function css( $_url,  $_group = false )
	{
		$_groupLength = strlen( $_group );
		$_dir = _SSHOW_DIR_.$_url;
		if( is_dir( $_dir ) ){
			$_dirs = dir( $_dir );
			while( false !== ( $_entry = $_dirs->read() ) )
			{
				if( substr($_entry, 0, 7) == 'common.' || ( $_group != false && substr($_entry, 0, $_groupLength + 1) == $_group.'.' ) || substr($_entry, 0, 10) == 'common.css' )
				{
					array_push( $this->css, $_url.$_entry );
				}
			}
			$_dirs->close();
		}
	}

	
}
