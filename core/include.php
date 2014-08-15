<?php
/*
	SSHOW ( http://www.sshow.org )
	Copyright By SeoSeungHyun ( http://www.seoseunghyun.com || http://www.seunghyun.net )
	me@seunghyun.net
*/

// head 혹은 body에 include 할 페이지 필터링

switch (__SSHOW_INC__)
{
	case 'setup':
		require( _SSHOW_DIR_.'include/setup/define.php' );
		$sshowInclude->head( _SSHOW_DIR_.'include/setup/head.php' );
		$sshowInclude->javascript( 'include/setup/js/' );
		$sshowInclude->css( 'include/setup/css/' );
		$sshowInclude->body( _SSHOW_DIR_.'include/setup/body.php' );
	break;
	default:
	break;
}

?>