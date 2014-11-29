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
	<script type="text/javascript" src="<?=__SSHOW_SETUP_URL__?>js/jquery.placeholder.js"></script>
	
	<script type="text/javascript">
	var __SSHOW_SETUP_URL__ = "<?=__SSHOW_SETUP_URL__?>";
	var __SSHOW_SETUP_DIR__ = "<?=__SSHOW_SETUP_DIR__?>";
	var _SSHOW_URL_ = "<?=_SSHOW_URL_?>";
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
		<div id="content_license" class="content_content">
		<img src="<?=__SSHOW_SETUP_URL__?>img/license.png" width="425" height="188" alt="License" />
		</div>
		<div id="content_permission" class="content_content">
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
		<?php
		$dbListArray = $sshowClass_stdlib->dlist( _SSHOW_DIR_.'common/db/' );
		?>
		<div id="content_selectDB" class="content_content">
			<div id="content_selectDB_list" class="sshowBtn_optionGroup">
		<?php

			foreach( $dbListArray as $dbListV => $dbListKey){
				echo '
				<div class="content_selectDB_eleWrap">
					<div class="content_selectDB_radio"><div id="selectDB_'.$dbListKey.'" class="sshowBtn_option"></div></div>
					<div class="content_selectDB_name">
						<img src="'._SSHOW_URL_.'common/db/'.$dbListKey.'/logo.png'.'" width="102" height="50" alt="'.$dbListKey.'" />
					</div>
				</div>
			';
			}
		?>
			</div>
		</div>
		<div id="content_settingDB" class="content_content">
			<div id="content_settingDB_load"></div>
			<div id="content_settingDB_content">
			</div>
		</div>
		<div id="content_settingUser" class="content_content">

			<div class="content_input_wrap">
				<div class="content_input_img">
					<img src="<?=__SSHOW_SETUP_URL__?>img/icon_human.png" width="25" height="25" />
				</div>
				<div class="content_input_input">
					<input type="text"  placeholder="ID" />
				</div>
			</div>
			<div class="content_input_wrap">
				<div class="content_input_img">
					<img src="<?=__SSHOW_SETUP_URL__?>img/icon_password.png" width="25" height="25" />
				</div>
				<div class="content_input_input">
					<input type="password"  placeholder="Password" />
				</div>
			</div>

		</div>
		<div id="content_complete" class="content_content">
		</div>
	</div>
	<div id="btn_wrap">
		<div id="prev_btn" class="setup_button"></div>
		<div id="next_btn" class="setup_button"></div>
	</div>
	<div id="complete_wrap">
		<img src="<?=__SSHOW_SETUP_URL__?>img/final_background.png" height="238" />
	</div>
</div>

</body>
</html>
