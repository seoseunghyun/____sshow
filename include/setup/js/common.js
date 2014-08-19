$(document).ready(function(){
	logoAnimate(true);
	function logoAnimate(FlagLogo){
		if(FlagLogo){
			$('#logo_background').animate({ 'left' : '-750px'}, 7000, function(){
				logoAnimate(false);
			});
		}else{
			$('#logo_background').animate({ 'left' : '0px'}, 7000, function(){
				logoAnimate(true);
			});
		}
	}
	//$('#logo_mask_img').load(function(){
		$('#logo_background').show();
	//});
	
	var step1_circle1 = new Array();
	var step1_circle2 = new Array();
	
	$('.step1_lang_li').each(function(){
			 	var paper = Raphael($(this)[0]);
			 	var circle = paper.circle(13, 13, 0);
			 	var circle2 = paper.circle(13, 13, 0);
			 	circle.attr({"stroke" : "none", "fill" : "#ffffff"});
			 	circle2.attr({"stroke" : "#828282", "fill" : "none"});
			 	
			 	$(this).parent()
			 	.mouseenter(function(){
				 	circle.animate({ "r" : 8, "fill" : "#5b5b5b" }, 300, ">");
			 	})
			 	.mouseleave(function(){
				 	circle.animate({ "r" : 5, "fill" : "#828282" }, 300, ">");
			 	})
			 	
			 	step1_circle1.push(circle);
			 	step1_circle2.push(circle2);
			 	
	});
	$('.step1_lang_title').each(function(){
		$(this).css({"opacity" : 0});
	});

	
	
	
	
	
	var paper = Raphael($('#button_wrap')[0]);
	
	
	var circle_lang = paper.circle(277, 40, 0);
	circle_lang.attr({ "fill" :  "none" , "stroke" : "#a0a0a0", "stroke-width" : 2 });
	circle_lang.animate({ "r" : 21 }, 1000, "elastic" );

	var circle_icon_lang = paper.circle(277, 40, 0);
	circle_icon_lang.attr({ "fill" :  "#a0a0a0" , "stroke" : "#a0a0a0" });
	circle_icon_lang.animate({ "r" : 15 }, 1000, "bounce" );
		

	var circle_icon_c1 = paper.path("M 277 40 L 277 40");
	circle_icon_c1.attr({ "stroke" : "#ffffff" , "stroke-width" : 2, "stroke-linecap" : "round"  });
	circle_icon_c1.animate({ "path" : "M 272 23 C 266 37 266 43 272 57"}, 1000, "bounce");
	
	var circle_icon_c2 = paper.path("M 277 40 L 277 40");
	circle_icon_c2.attr({ "stroke" : "#ffffff" , "stroke-width" : 2, "stroke-linecap" : "round"  });
	circle_icon_c2.animate({ "path" : "M 282 23 C 288 37 288 43 282 57"}, 1000, "bounce");
	
	var circle_icon_vl = paper.path("M 277 40 L 277 40");
	circle_icon_vl.attr({ "stroke" : "#ffffff" , "stroke-width" : 2, "stroke-linecap" : "round"  });
	circle_icon_vl.animate({ "path" : "M 277 23 L 277 57"}, 1000, "bounce");
	
	var circle_icon_hl1 = paper.path("M 277 40 L 277 40");
	circle_icon_hl1.attr({ "stroke" : "#ffffff" , "stroke-width" : 2, "stroke-linecap" : "round"  });
	circle_icon_hl1.animate({ "path" : "M 263 35 C 277 36 277 36 291 35"}, 1000, "bounce");

	var circle_icon_hl2 = paper.path("M 277 40 L 277 40");
	circle_icon_hl2.attr({ "stroke" : "#ffffff" , "stroke-width" : 2, "stroke-linecap" : "round"  });
	circle_icon_hl2.animate({ "path" : "M 263 45 C 277 44 277 44 291 45"}, 1000, "bounce");
	
	var circle = paper.circle(223, 40, 0);
	circle.attr({ "fill" :  "#777777" , "stroke" : "none" });
	circle.animate({ "r" : 22 }, 800, "elastic" );
	
	var lineTop = paper.path( "M 223 50 L 223 40" );
	var lineBottom = paper.path( "M 223 50 L 223 40" );
	
	lineTop.attr({ "stroke" : "#e2e2e2" , "stroke-width" : 2, "stroke-linecap" : "round" })
	lineBottom.attr({ "stroke" : "#e2e2e2" , "stroke-width" : 2, "stroke-linecap" : "round"  })
	
	lineTop.animate({ "path" : "M 215 34 L 223 47" }, 1000, "bounce" );
	lineBottom.animate({ "path" : "M 231 34 L 223 47" }, 1000, "bounce" );
	


	var setupStep = 0;
	var langStep = false;
	$('#lang_btn')
	.mouseenter(function(){
		if(langStep)
		{
			return;
		}
		circle_icon_lang.animate({ "r" : 21},400,"backOut");
		circle_icon_c1.animate({ "path" : "M 270 18 C 264 37 264 43 270 62"}, 400, "backOut"); // y+- 5, x +-2
		circle_icon_c2.animate({ "path" : "M 284 18 C 290 37 290 43 284 62"}, 400, "backOut");
		circle_icon_vl.animate({ "path" : "M 277 18 L 277 62"}, 400, "backOut");
		circle_icon_hl1.animate({ "path" : "M 256 33 C 277 34 277 34 298 33"}, 400, "backOut");
		circle_icon_hl2.animate({ "path" : "M 256 47 C 277 46 277 46 298 47"}, 400, "backOut");
	})
	.mouseleave(function(){
		if(langStep)
		{
			langStep = true;
			return;
		}
		circle_icon_lang.animate({ "r" : 15},400,"backOut");
		circle_icon_c1.animate({ "path" : "M 272 23 C 266 37 266 43 272 57"}, 400, "backOut");
		circle_icon_c2.animate({ "path" : "M 282 23 C 288 37 288 43 282 57"}, 400, "backOut");
		circle_icon_vl.animate({ "path" : "M 277 23 L 277 57"}, 400, "bounce");
		circle_icon_hl1.animate({ "path" : "M 263 35 C 277 36 277 36 291 35"}, 400, "backOut");
		circle_icon_hl2.animate({ "path" : "M 263 45 C 277 44 277 44 291 45"}, 400, "backOut");
	})
	.click(function(){
		langStep = true;
		$('#step1_btn').hide();
		circle_icon_lang.animate({ "r" : 15},600,"backOut");
		circle.animate({ "r" : 0}, 400, "backOut",function(){
			
		});
		lineTop.animate({"stroke":"none"})
		lineBottom.animate({"stroke":"none"})
		circle_lang.animate({ "cx" : 250}, 800, "<>");
		circle_icon_c1.animate({ "path" : "M 245 23 C 239 37 239 43 245 57"}, 800, "<>");
		circle_icon_c2.animate({ "path" : "M 255 23 C 261 37 261 43 255 57"}, 800, "<>");
		circle_icon_vl.animate({ "path" : "M 250 23 L 250 57"}, 800, "<>");
		circle_icon_hl1.animate({ "path" : "M 236 35 C 250 36 250 36 264 35"}, 800, "<>");
		circle_icon_hl2.animate({ "path" : "M 236 45 C 250 44 250 44 264 45"}, 800, "<>");

		circle_icon_lang.animate({ "cx" : 250},800,"<>");
			$('#step_img').animate({"top" : "-20px", "opacity" : 0}, 500, "easeInExpo", function(){
				$(this).attr("src",$(this).attr("src").replace("0_step", "lang_step") );
				$(this).load(function(){
					$(this).animate({"top" : "0px", "opacity" : 1}, 500, "easeOutQuad");
				})
				
			});
			$('#title_img').animate({"top" : "-30px", "opacity" : 0}, 600, "easeInExpo",function(){
			$(this).attr("src",$(this).attr("src").replace("0_title", "lang_title") );
				$(this).load(function(){
					$(this).animate({"top" : "0px", "opacity" : 1}, 600, "easeOutCirc");
					//$('.step1_circle').attr('stroke');
					var count = 0;
					$('.step1_lang_title').each(function(){
						
						//$(this).fadeIn({"queue": false, "duration": 900})
						$(this).delay(count*100).animate({"left" : "25px", "opacity" : 1},900 + count*10 ,"easeOutExpo");
						
						var circle_animation = Raphael.animation({ "fill" :  "#828282", "r" : 5 }, 1100, "bounce");
						step1_circle1[count].animate(circle_animation.delay(count*150));
						
						count++;
					})
				});
			});
			$('#content_grid').animate( { "height": "170px" }, 800, "easeOutBounce",function(){
				circle_icon_vl.animate({"stroke-width" : 0},200);
				circle_icon_hl1.animate({"stroke-width" : 0},200);
				circle_icon_hl2.animate({"stroke-width" : 0},200);
				circle_icon_c1.animate({ "path" : "M 254 32 C 250 30 240 32 242 44"}, 1000, "backOut");
				circle_icon_c2.animate({ "path" : "M 258 36 C 260 48 250 50 246 48"}, 1000, "backOut");
			});
			lineTop.animate({ "path" : "M 218 40 L 223 47" }, 600, "bounce" );
			lineBottom.animate({ "path" : "M 230 30 L 223 47" }, 600, "bounce" );

	})
	
	$('#step_btn')
	.click(function(){

	switch (setupStep++)
	{
		case 0:
			
		break;
	}
						
	})
	.mouseenter(function(){
	switch (setupStep)
	{
		case 0:
			circle.animate({ "r" : 25 }, 400, "backOut" );
			circle.animate({ "fill" :  "#e2e2e2" }, 200 );
			lineTop.animate({ "path" : "M 218 40 L 223 47" }, 600, "bounce" );
			lineBottom.animate({ "path" : "M 230 30 L 223 47" }, 600, "bounce" );
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
			lineTop.animate({ "path" : "M 215 34 L 223 47" }, 600, "bounce" );
			lineBottom.animate({ "path" : "M 231 34 L 223 47" }, 600, "bounce" );
			lineTop.attr({ "stroke" : "#e2e2e2" });
			lineBottom.attr({ "stroke" : "#e2e2e2" });
		break;
	}

	})
});