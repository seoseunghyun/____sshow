<?php
/*
	SSHOW ( http://www.sshow.org )
	Copyright By SeoSeungHyun ( http://www.seoseunghyun.com || http://www.seunghyun.net )
	me@seunghyun.net
*/

// 기능 정의

// GET으로 넘어온 주소를 가져오고 정의
require_once( _SSHOW_DIR_.'core/getv.php' );
define( '__SSHOW_FUNC__' , 'setup');


/* 
	HTML4.0.1 혹은 HTML5 표준 정의를 하기 위한 함수
 */
if($sshow->html == 5)
{
	echo '<!DOCTYPE html>
<html>
';

}
else
{
	echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
';
}
?>



<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<?php require_once( _SSHOW_DIR_.'common/head.php' ); ?>	
</head>
<body>

</body>
</html>