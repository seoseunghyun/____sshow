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
 	<?php
 		$_dir = __SSHOW_SETUP_DIR__.'lang/';
		if( is_dir( $_dir ) ){
			$_dirs = dir( $_dir );
			while( false !== ( $_entry = $_dirs->read() ) )
			{
				if( strpos($_entry, '.xml'))
				{
				$_lang = str_replace('.xml', '', $_entry);
	?>
	<img id="step1_lang_<?=$_lang?>" src="<?=__SSHOW_SETUP_URL__?>img/<?=$_lang?>/lang.png" width="75" height="25" class="dpi2x" alt="<?=$_lang?>" /><br />

	<?php
				}
				
			}
			$_dirs->close();
		}
 	?>
 	<script>
 		
 	</script>
 	</div>
 	<div id="button_grid">
 		<div id="button_wrap">
 			<div id="step_btn">
	 		</div>
	 		<script>
	 		var paper = Raphael($('#button_wrap')[0]);
			var circle = paper.circle(250, 40, 0);
			circle.attr({ "fill" :  "#777777" , "stroke" : "none" });
			circle.animate({ "r" : 22 }, 800, "elastic" );
			
			var lineTop = paper.path( "M 250 50 L 250 40" );
			var lineBottom = paper.path( "M 250 50 L 250 40" );
			
			lineTop.attr({ "stroke" : "#e2e2e2" , "stroke-width" : 2, "stroke-linecap" : "round" })
			lineBottom.attr({ "stroke" : "#e2e2e2" , "stroke-width" : 2, "stroke-linecap" : "round"  })
			
			lineTop.animate({ "path" : "M 242 34 L 250 47" }, 1000, "bounce" );
			lineBottom.animate({ "path" : "M 258 34 L 250 47" }, 1000, "bounce" );
			
			var setupStep = 0;
			$('#step_btn')
			.click(function(){

			switch (setupStep++)
			{
				case 0:
					circle.animate({ "r" : 22 }, 400, "backOut" );
					$('#step_img').animate({"top" : "-20px", "opacity" : 0}, 500, "easeInExpo", function(){
						$(this).attr("src",$(this).attr("src").replace("0_step", "1_step") );
						$(this).load(function(){
							$(this).animate({"top" : "0px", "opacity" : 1}, 500, "easeOutQuad");
						})
						
					});
					$('#title_img').animate({"top" : "-30px", "opacity" : 0}, 600, "easeInExpo",function(){
					$(this).attr("src",$(this).attr("src").replace("0_title", "1_title") );
						$(this).load(function(){
							$(this).animate({"top" : "0px", "opacity" : 1}, 600, "easeOutCirc");
							
						});
					});
					$('#content_grid').animate( { "height": "150px" }, 800, "easeOutBounce" );
					lineTop.animate({ "path" : "M 245 40 L 250 47" }, 600, "bounce" );
					lineBottom.animate({ "path" : "M 257 30 L 250 47" }, 600, "bounce" );

				break;
			}
								
			})
			.mouseenter(function(){
			switch (setupStep)
			{
				case 0:
					circle.animate({ "r" : 25 }, 400, "backOut" );
					circle.animate({ "fill" :  "#e2e2e2" }, 200 );
					lineTop.animate({ "path" : "M 245 40 L 250 47" }, 600, "bounce" );
					lineBottom.animate({ "path" : "M 257 30 L 250 47" }, 600, "bounce" );
					lineTop.attr({ "stroke" : "#666666" });
					lineBottom.attr({ "stroke" : "#666666" });
				break;
			}
			})
			.mouseleave(function(){
			switch (setupStep)
			{
				case 0:
					circle.animate({ "r" : 22 }, 400, "backOut" );
					circle.animate({ "fill" :  "#777777" }, 200 );
					lineTop.animate({ "path" : "M 242 34 L 250 47" }, 600, "bounce" );
					lineBottom.animate({ "path" : "M 258 34 L 250 47" }, 600, "bounce" );
					lineTop.attr({ "stroke" : "#e2e2e2" });
					lineBottom.attr({ "stroke" : "#e2e2e2" });
				break;
			}

			})
	 		</script>
	 		
 		</div>
 	</div>
 	<div id="copyright_grid">
 	</div>
</div>
