<?php
/*
	SSHOW ( http://www.sshow.org )
	Copyright By SeoSeungHyun ( http://www.seoseunghyun.com || http://www.seunghyun.net )
	me@seunghyun.net
*/

// 기능 정의

// GET으로 넘어온 주소를 가져오고 정의
require( _SSHOW_DIR_.'core/getv.php' );
require( _SSHOW_DIR_.'core/include.php' );

// 쉽게 사용하기 위한 개발자 상수 정의
$sshow->lang('en');
if( isset($_GET['lang']) ){ 
$sshow->lang = $_GET['lang'];
}
define( '_SSHOW_HTML_LANG_', $sshow->lang );
/* 
	HTML4.0.1 혹은 HTML5 표준 정의를 하기 위한 함수
	UTF-8을 표준으로 한다.
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
	<meta name="Generator" content="SSHOW" />
<?php require( _SSHOW_DIR_.'common/head.php' ); ?>

<?php
foreach ($sshowInclude->javascript as $_key => $_value)
{
	echo '	<script type="text/javascript" src="'.$_value.'"></script>';
}
?>

<?php
foreach ($sshowInclude->css as $_key => $_value)
{
	echo '	<link rel="stylesheet" type="text/css" href="'.$_value.'" />';
}
?>

<?php require( $sshowInclude->head ); ?>

</head>
<body>
<?php require( $sshowInclude->body ); ?>
</body>
</html>
