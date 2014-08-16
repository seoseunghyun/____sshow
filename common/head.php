<?php
/*
 	SSHOW ( http://www.sshow.org )
 	Copyright By SeoSeungHyun ( http://www.seoseunghyun.com || http://www.seunghyun.net )
 	me@seunghyun.net
*/
 
// HTML 공용 헤더
?>
	<script type="text/javascript" src="<?=_SSHOW_JQUERY_URL_?>"></script>
	<script type="text/javascript" src="<?=_SSHOW_JQUERY_UI_URL_?>"></script>
	<script type="text/javascript" src="<?=_SSHOW_RAPHAEL_URL_?>"></script>
<?php
if($sshowDetect->dpi && $sshowDetect->dpiValue > 1)
{
?>
	<script type="text/javascript">
	$(document).ready(function(){
		if( 'devicePixelRatio' in window && window.devicePixelRatio > 1 ){
		$('.dpi2x').each(function(){
			$(this).attr( 'src' ,$(this).attr('src').replace('.png', '@<?=$sshowDetect->dpiValue?>x.png'));
			if( $(this).css('background-image') != 'none' )
			{
				$(this).css('background-image', $(this).css('background-image').replace(/"/gi,'').replace('.png)', '@<?=$sshowDetect->dpiValue?>x.png)'));
			}
		});
		

		}
	});
	</script>
<?php
}
?>
