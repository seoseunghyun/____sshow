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
	
	<script type="text/javascript">
	var __SSHOW_SETUP_URL__ = "<?=__SSHOW_SETUP_URL__?>";
	var __SSHOW_SETUP_DIR__ = "<?=__SSHOW_SETUP_DIR__?>";
	var _SSHOW_DIR_ = "<?=_SSHOW_DIR_?>";
	</script>
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
	<div id="title_wrap" >
	<img id="title_img" src="<?=__SSHOW_SETUP_URL__?>img/title.png" width="427" height="350" alt="SSHOW" />
	</div>
	<div id="subtitle_wrap" >
	<img id="subtitle_img" src="<?=__SSHOW_SETUP_URL__?>img/subtitle.png" width="337" height="175" alt="SSHOW" />
	</div>
	<div id="content_wrap">
		<div id="content_license" class="content_content" style="width:425px; height:190px;">
		<img src="<?=__SSHOW_SETUP_URL__?>img/license.png" width="425" height="188" alt="License" />
		</div>
		<div id="content_permission" class="content_content" style="width:425px; height:138px;">
			<div id="content_permission_slot_wrap">
				<div id="content_permission_slot_mask">
					<img id="content_permission_slot_mask_img" src="<?=__SSHOW_SETUP_URL__?>img/permission_slot_mask.png" width="165" height="100" />
					
				</div>
				<div id="content_permission_slot_1" class="content_permission_slot">
						<img id="content_permission_slot_1_img" src="<?=__SSHOW_SETUP_URL__?>img/permission_slot.png" width="55" height="900" alt="SSHOW" />
				</div>
				<div id="content_permission_slot_2" class="content_permission_slot">
					<img id="content_permission_slot_2_img" src="<?=__SSHOW_SETUP_URL__?>img/permission_slot.png" width="55" height="900" alt="SSHOW" />
				</div>
				<div id="content_permission_slot_3" class="content_permission_slot">
					<img id="content_permission_slot_3_img" src="<?=__SSHOW_SETUP_URL__?>img/permission_slot.png" width="55" height="900" alt="SSHOW" />
				</div>

			</div>
			<div id="content_permission_helper">
				<img id="content_permission_helper_img" src="<?=__SSHOW_SETUP_URL__?>img/permission_helper.png" width="165" height="28" alt="SSHOW" />
			</div>
		</div>
		<div id="content_selectDB" class="content_content" style="width:425px; height:200px;">
			<div id="content_selectDB_option_mysql" class="sshowBtn_option"></div>
			<div id="content_selectDB_option_mysql" class="sshowBtn_option"></div>
			<div id="content_selectDB_option_mysql" class="sshowBtn_option"></div>
		</div>
		<div id="content_settingDB" class="content_content" style="width:425px; height:100px;">
		</div>
	</div>
	<div id="btn_wrap">
		<div id="prev_btn" class="setup_button"></div>
		<div id="next_btn" class="setup_button"></div>
	</div>
</div>

</body>
</html>
