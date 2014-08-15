<?php
/*
 	SSHOW ( http://www.sshow.org )
 	Copyright By SeoSeungHyun ( http://www.seoseunghyun.com || http://www.seunghyun.net )
 	me@seunghyun.net
*/
 
// GET으로 넘어온 주소를 가져오고 정의

if ( isset($_GET['inc']) )
{
	define( '__SSHOW_INC__' , $_GET['inc']);
}
else
{
	define( '__SSHOW_INC__' , NULL);
}
//

?>