<?php
/*
	SSHOW ( http://www.sshow.org )
	Copyright By SeoSeungHyun ( http://www.seoseunghyun.com || http://www.seunghyun.net )
	me@seunghyun.net
*/

//SSHOW Container

define('__SSHOW_MAIN_CONFIG_TITLE__', (string)$sshowMain_config['title']);
function _sshowFunc_Main_import_commonCSS_( $cssArray ){
	foreach( $cssArray as $cssKey => $cssValue ){
		echo '
	<link rel="stylesheet" type="text/css" href="'._SSHOW_URL_.'common/css/'.$cssValue.'" />';
	}
}
function _sshowFunc_Main_import_commonJS_( $jsArray ){

	foreach( $jsArray as $jsKey => $jsValue ){
		$jsURL = _SSHOW_URL_.'common/js/'.$jsValue;
		
		if( $jsURL != _SSHOW_JQUERY_URL_ && $jsURL != _SSHOW_JQUERY_UI_URL_ && $jsURL != _SSHOW_RAPHAEL_URL_ ){
			echo '
	<script type="text/javascript" src="'.$jsURL.'"></script>';
 
		}
		  
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?=__SSHOW_MAIN_CONFIG_TITLE__?></title>
	<?php
	_sshowFunc_Main_import_commonCSS_( $sshowClass_stdlib->flist(_SSHOW_DIR_.'common/css/') );
	?>
	
	
	<!-- Must Have Javascript in SSHOW-->
	<script type="text/javascript" src="<?=_SSHOW_JQUERY_URL_?>"></script>
	<script type="text/javascript" src="<?=_SSHOW_JQUERY_UI_URL_?>"></script>
	<script type="text/javascript" src="<?=_SSHOW_RAPHAEL_URL_?>"></script>
	<?php
	_sshowFunc_Main_import_commonJS_( $sshowClass_stdlib->flist(_SSHOW_DIR_.'common/js/') );
	?>

</head>
<body>
</body>
</html>