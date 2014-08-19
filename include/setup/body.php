<?php
/*
 	SSHOW ( http://www.sshow.org )
 	Copyright By SeoSeungHyun ( http://www.seoseunghyun.com || http://www.seunghyun.net )
 	me@seunghyun.net
*/
 
// 설치 메인 화면
?>
<div id="grid">
 	<div id="logo_grid">
 		<div id="logo_wrap">
 			<div id="logo_background_wrap">
 				<img id="logo_background" src="<?=__SSHOW_SETUP_URL__?>img/logo_wrap.png" width="1000" height="61" class="dpi2x" alt="SSHOW" dpi="2" />
 			</div>
 			<div id="logo_mask">
	 			<img id="logo_mask_img" src="<?=__SSHOW_SETUP_URL__?>img/logo_mask.png" width="250" height="61" class="dpi2x" alt="SSHOW" />
 			</div>
  		</div>
 		
 	</div>
 	<div id="title_grid"> 	
 		<div id="step_wrap">
	 		<img id="step_img" src="<?=__SSHOW_SETUP_URL__?>img/<?=_SSHOW_HTML_LANG_?>/0_step.png" width="150" height="27" class="dpi2x" alt="Welcome!" />
 		</div>
 		<div id="title_wrap">
	 		<img id="title_img" src="<?=__SSHOW_SETUP_URL__?>img/<?=_SSHOW_HTML_LANG_?>/0_title.png" width="482" height="34" class="dpi2x" alt="Start the SSHOW setup!" />
 		</div>
 	</div>
 	<div id="content_grid">
	 	<div id="step1_grid">
	 	<?php
	 		$_dir = __SSHOW_SETUP_DIR__.'lang/';
			if( is_dir( $_dir ) ){
				$_dirs = dir( $_dir );
				while( false !== ( $_entry = $_dirs->read() ) )
				{
					if( strpos($_entry, '.xml') )
					{
					$_lang = str_replace('.xml', '', $_entry);
		?>
		<div id="step1_lang_<?=$_lang?>_wrap" class="step1_lang_wrap">
			<div class="step1_lang_li">
			</div>
			<div class="step1_lang_title">
				<img id="step1_lang_<?=$_lang?>_img" src="<?=__SSHOW_SETUP_URL__?>img/<?=$_lang?>/lang.png" width="75" height="25" class="dpi2x" alt="<?=$_lang?>" />
			</div>
		</div>
		<?php
					}
					
				}
				$_dirs->close();
			}
	 	?>
	 	</div>
 	
 	</div>
 	<div id="button_grid">
 		<div id="button_wrap">
 			<div id="step_btn">
	 		</div>
	 		<div id="lang_btn">
	 		</div>
 		</div>
 	</div>
 	<div id="copyright_grid">
 	</div>
</div>
