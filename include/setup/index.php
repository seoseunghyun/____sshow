<?php
/*
	SSHOW ( http://www.sshow.org )
	Copyright By SeoSeungHyun ( http://www.seoseunghyun.com || http://www.seunghyun.net )
	me@seunghyun.net
*/

//Setup Page

define( '__SSHOW_SETUP_DIR__' , _SSHOW_DIR_.'include/setup/' );
define( '__SSHOW_SETUP_URL__' , _SSHOW_URL_.'include/setup/' );
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="Generator" content="SSHOW" />
	<title>SSHOW :: Setup</title>
	
	<link rel="stylesheet" type="text/css" href="<?=__SSHOW_SETUP_URL__?>css/index.css" />
	
	<!-- Must Have Javascript in SSHOW-->
	<script type="text/javascript" src="<?=_SSHOW_JQUERY_URL_?>"></script>
	<script type="text/javascript" src="<?=_SSHOW_JQUERY_UI_URL_?>"></script>
	<script type="text/javascript" src="<?=_SSHOW_RAPHAEL_URL_?>"></script>
	
	<script type="text/javascript" src="<?=__SSHOW_SETUP_URL__?>js/index.js"></script>
	
	
</head>

<body>

<div id="grid">
	<div id="logo_wrap">
		<div id="logo">
			<div id="logo_bgcolor">
				<img id="logo_background_img" src="<?=__SSHOW_SETUP_URL__?>img/logo_bgcolor.png" width="1000" height="61" alt="SSHOW" />
			</div>
			<div id="logo_mask">
				<img id="logo_mask_img" src="<?=__SSHOW_SETUP_URL__?>img/logo_mask.png" width="250" height="61" alt="SSHOW" />
			</div>
		</div>
	</div>
	<div id="title_wrap">
	</div>
	<div id="btn_wrap">
	
	</div>
</div>

</body>
</html>
