<?php
/*
 	SSHOW ( http://www.sshow.org )
 	Copyright By SeoSeungHyun ( http://www.seoseunghyun.com || http://www.seunghyun.net )
 	me@seunghyun.net
*/
 
// GET으로 넘어온 주소를 가져오고 정의

if ( isset($_GET['func']) )
{
	define( '__SSHOW_FUNC__' , $_GET['func']);
}
else
{
	define( '__SSHOW_FUNC__' , NULL);
}
//

?>