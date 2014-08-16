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
 	</div>
 	<div id="button_grid">
 		<div id="next_btn">
 			<div id="nextClick_btn">
	 		</div>
	 		<script>
	 		var paper = Raphael($('#next_btn')[0]);
			var circle = paper.circle(40, 40, 0);
			circle.attr({ "fill" :  "#777777" , "stroke" : "none" });
			circle.animate({ "r" : "23" }, 800, "elastic" );
			
			var lineTop = paper.path( "M 40 50 L 40 40" );
			var lineBottom = paper.path( "M 40 50 L 40 40" );
			
			lineTop.attr({ "stroke" : "#e2e2e2" , "stroke-width" : 2, "stroke-linecap" : "round" })
			lineBottom.attr({ "stroke" : "#e2e2e2" , "stroke-width" : 2, "stroke-linecap" : "round"  })
			
			lineTop.animate({ "path" : "M 32 34 L 40 47" }, 1000, "bounce" );
			lineBottom.animate({ "path" : "M 48 34 L 40 47" }, 1000, "bounce" );
			
			var setupStep = 0;
			$('#nextClick_btn')
			.click(function(){
			switch (setupStep)
			{
				case 0:
					setupStep++;
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
					lineTop.animate({ "path" : "M 35 40 L 40 47" }, 600, "bounce" );
					lineBottom.animate({ "path" : "M 47 30 L 40 47" }, 600, "bounce" );

				break;
			}
								
			})
			.mouseenter(function(){
			switch (setupStep)
			{
				case 0:
					circle.animate({ "r" : "25" }, 400, "backOut" );
					circle.animate({ "fill" :  "#e2e2e2" }, 200 );
					lineTop.animate({ "path" : "M 35 40 L 40 47" }, 600, "bounce" );
					lineBottom.animate({ "path" : "M 47 30 L 40 47" }, 600, "bounce" );
					lineTop.attr({ "stroke" : "#666666" });
					lineBottom.attr({ "stroke" : "#666666" });
				break;
			}
			})
			.mouseleave(function(){
			switch (setupStep)
			{
				case 0:
					circle.animate({ "r" : "22" }, 400, "backOut" );
					circle.animate({ "fill" :  "#777777" }, 200 );
					lineTop.animate({ "path" : "M 32 34 L 40 47" }, 600, "bounce" );
					lineBottom.animate({ "path" : "M 48 34 L 40 47" }, 600, "bounce" );
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
