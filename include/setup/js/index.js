$(document).ready(function(){
	
	logoAnimate(true);
	
	function logoAnimate(FlagLogo){
		if(FlagLogo){
			$('#logo_background_img').animate({ 'left' : '-750px'}, 7000, function(){
				logoAnimate(false);
			});
		}else{
			$('#logo_background_img').animate({ 'left' : '0px'}, 7000, function(){
				logoAnimate(true);
			});
		}
	}
	
	
	var nextBtn_canvas = Raphael($('#next_btn')[0]);
	var nextBtn_circle = nextBtn_canvas.circle(30, 30, 0);
	var nextBtn_line1 = nextBtn_canvas.path( "M 30 40 L 30 30" );
	var nextBtn_line2 = nextBtn_canvas.path( "M 30 40 L 30 30" );

	nextBtn_circle.attr({ "fill" :  "#777777" , "stroke" : "none", "r" : 0 });
	nextBtn_line1.attr({ "stroke" : "#e2e2e2" , "stroke-width" : 2, "stroke-linecap" : "round" });
	nextBtn_line2.attr({ "stroke" : "#e2e2e2" , "stroke-width" : 2, "stroke-linecap" : "round" });
	
	var prevBtn_canvas = Raphael($('#prev_btn')[0]);
	var prevBtn_circle = prevBtn_canvas.circle(30, 30, 0);
	var prevBtn_line1 = prevBtn_canvas.path( "M 30 30 L 30 30" );
	var prevBtn_line2 = prevBtn_canvas.path( "M 30 30 L 30 30" );
	
	prevBtn_circle.attr({ "fill" :  "#777777" , "stroke" : "none", "r" : 0 });
	prevBtn_line1.attr({ "stroke" : "#e2e2e2" , "stroke-width" : 2, "stroke-linecap" : "round" });
	prevBtn_line2.attr({ "stroke" : "#e2e2e2" , "stroke-width" : 2, "stroke-linecap" : "round" });
	
	function go(Step){
	$('#prev_btn').off('click mouseleave mouseenter');
	$('#next_btn').off('click mouseleave mouseenter');
		switch(Step)
		{
			case 1 : 
				$('#title_img').animate({'margin-top':0},1000,"easeInOutBack");
				$('#content_wrap').slideUp(800,"easeOutBounce");
				nextBtn_circle.animate({ "r" : 22, "fill" :  "#777777" }, 800, "elastic" );

				nextBtn_line1.animate({ "path" : "M 21 24 L 30 39", "stroke" : "#e2e2e2" }, 1000, "bounce" );
				nextBtn_line2.animate({ "path" : "M 39 24 L 30 39", "stroke" : "#e2e2e2" }, 1000, "bounce" );
				
				$('#prev_btn')
				.stop()
				.animate({'left':270},800,"easeInOutExpo");
				
				$('#next_btn')
				.stop()
				.animate({'left':270},800,"easeInOutExpo")
				.on('mouseenter', function(){
					nextBtn_circle.animate({ "r" : 25, "fill" : "#c1c1c1" }, 200, ">" );
					nextBtn_line1.animate({ "path" : "M 23 31 L 30 39", "stroke" : "#575757" }, 200, ">" );
					nextBtn_line2.animate({ "path" : "M 37 19 L 30 39", "stroke" : "#575757" }, 200, ">" );
				})
				.on('mouseleave', function(){
					nextBtn_circle.animate({ "r" : 22, "fill" :  "#777777" }, 200, ">" );
					nextBtn_line1.animate({ "path" : "M 21 24 L 30 39", "stroke" : "#e2e2e2" }, 200, ">" );
					nextBtn_line2.animate({ "path" : "M 39 24 L 30 39", "stroke" : "#e2e2e2" }, 200, ">" );
				})
				.on('click', function(){
					go(2);
				});
			break;
			
			case 2:
				$('#title_img').animate({'margin-top':-50},1000,"easeInOutBack");
				
				if($('#content_permission').css('display') == 'none'){
					$('#content_license').show();
							$('#content_wrap').slideDown(800,"easeInOutExpo");
				}else{
					$('#content_permission').hide(600,"easeInOutExpo",function(){
						$('#content_license').show(600,"easeInOutExpo",function(){
							$('#content_wrap').slideDown(800,"easeInOutExpo");
						});
					});
				}
				
				$('#content_wrap').slideDown(800,"easeOutBounce");
				nextBtn_circle.animate({ "r" : 22,  "fill" :  "#777777"  }, 800, "elastic" );
				nextBtn_line1.animate({ "path" : "M 23 31 L 30 39", "stroke" : "#e2e2e2" }, 300, "<" );
				nextBtn_line2.animate({ "path" : "M 37 19 L 30 39", "stroke" : "#e2e2e2" }, 300, "<" );

				$('#prev_btn')
				.stop()
				.animate({'left':270},800,"easeInOutExpo");
				
				$('#next_btn')
				.stop()
				.animate({'left':270},800,"easeInOutExpo")
				.on('mouseenter', function(){
					nextBtn_circle.animate({ "r" : 25, "fill" : "#c1c1c1" }, 200, ">" );
					nextBtn_line1.animate({ "path" : "M 24 21 L 41 30", "stroke" : "#575757" }, 200, ">" );
					nextBtn_line2.animate({ "path" : "M 41 30 L 24 39", "stroke" : "#575757" }, 200, ">" );
				})
				.on('mouseleave', function(){
					nextBtn_circle.animate({ "r" : 22, "fill" : "#777777" }, 200, ">" );
					nextBtn_line1.animate({ "path" : "M 23 31 L 30 39", "stroke" : "#e2e2e2" }, 200, ">" );
					nextBtn_line2.animate({ "path" : "M 37 19 L 30 39", "stroke" : "#e2e2e2" }, 200, ">" );
				})
				.click(function(){
					go(3);
				});
			break;
			case 3 : 
				$('#title_img').animate({'margin-top':-100},1000,"easeInOutBack");
				if($('#content_license').css('display') != 'none'){
					$('#content_license').hide(600,"easeInOutExpo",function(){
						$('#content_permission').show(600,"easeInOutExpo",function(){
							$('#content_wrap').slideDown(800,"easeInOutExpo");
						});
					});
				} else if ($('#content_selectDB').css('display') != 'none'){
					$('#content_selectDB').hide(600,"easeInOutExpo",function(){
						$('#content_permission').show(600,"easeInOutExpo",function(){
							$('#content_wrap').slideDown(800,"easeInOutExpo");
						});
					});
					
				} else {
					$('#content_permission').show(600,"easeInOutExpo",function(){
							$('#content_wrap').slideDown(800,"easeInOutExpo");
						});

				}
				nextBtn_circle.animate({ "r" : 22, "fill" : "#777777" }, 200, ">" );
				nextBtn_line1.animate({ "path" : "M 24 21 L 41 30", "stroke" : "#e2e2e2" }, 200, ">" );
				nextBtn_line2.animate({ "path" : "M 41 30 L 24 39", "stroke" : "#e2e2e2" }, 200, ">" );
				prevBtn_circle.animate({ "r" : 22, "fill" : "#d3d3d3" }, 200, ">" );
				prevBtn_line1.animate({ "path" : "M 20 30 L 37 21", "stroke" : "#7f7f7f" }, 200, ">" );
				prevBtn_line2.animate({ "path" : "M 20 30 L 37 39", "stroke" : "#7f7f7f" }, 200, ">" );
				
				var nextFlag = false;

				var slotNumber = function(SlotNo, Num){
					var goTop = 0;
					switch (Num){
						case -1 : goTop = 0; break;
						case 0 : goTop = -100; break;
						case 1 : goTop = -200; break;
						case 2 : goTop = -300; break;
						case 3 : goTop = -400; break;
						case 4 : goTop = -500; break;
						case 5 : goTop = -600; break;
						case 6 : goTop = -700; break;
						case 7 : goTop = -800; break;
						
					}
					$('#content_permission_slot_' + SlotNo).stop().animate({ 'top' : goTop }, 200 + 250 * ( Math.floor ( Math.random() * 5 ) + 1 ), "easeInOutBack" );
					
				}
				
				
				
				var slotLoader = function(){
					$.ajax({
						type: "POST",
						url: __SSHOW_SETUP_URL__+"action/permission_check.php",
						data: { _SSHOW_DIR_ : _SSHOW_DIR_ },
						success: function(e){
							slotNumber(1,parseInt(e.substr(0, 1)));
							slotNumber(2,parseInt(e.substr(1, 1)));
							slotNumber(3,parseInt(e.substr(2, 1)));
							if(parseInt(e.substr(0, 1)) == 7 && parseInt(e.substr(2, 1)) == 7){
								nextFlag = true;
							}else{
								nextFlag = false;
							}
						}
					});
				}
				slotNumber(1,-1);
				slotNumber(2,-1);
				slotNumber(3,-1);
				
				setTimeout(function(){
					slotLoader();	
				}, 500);
				
				var slotTimer = setInterval(function(){
					slotLoader();
				}, 2500);
				
				
				
				$('#prev_btn')
				.stop()
				.animate({'left' : 245},800,"easeInOutExpo")
				.on('click',function(){
					clearInterval(slotTimer);
					go(2)
				})
				$('#next_btn')
				.stop()
				.animate({'left' : 295},800,"easeInOutExpo")
				.on('click',function(){
					$.ajax({
						type: "POST",
						url: __SSHOW_SETUP_URL__+"action/permission_check.php",
						data: { _SSHOW_DIR_ : _SSHOW_DIR_ },
						success: function(e){
							slotNumber(1,parseInt(e.substr(0, 1)));
							slotNumber(2,parseInt(e.substr(1, 1)));
							slotNumber(3,parseInt(e.substr(2, 1)));
							if(parseInt(e.substr(0, 1)) == 7 && parseInt(e.substr(2, 1)) == 7){
								nextFlag = true;
							}else{
								nextFlag = false;
							}
							if(nextFlag == true){
								clearInterval(slotTimer);
								go(4);
								
							}else{
								nextBtn_circle.animate({ 'fill' : "#e44651"},100);
								nextBtn_line1.animate({ "path" : "M 22 22 L 38 38", "stroke" : "#e2e2e2" }, 200, "bounce" );
								nextBtn_line2.animate({ "path" : "M 38 22 L 22 38", "stroke" : "#e2e2e2" }, 200, "bounce" );
			
								$('#next_btn').stop().animate({'left' : 305},600,"easeOutBounce",function(){
									$('#next_btn').animate({'left' : 295},200,"easeOutBack");
									nextBtn_circle.animate({ 'fill' : "#777777"},200);
									nextBtn_line1.animate({ "path" : "M 24 21 L 41 30", "stroke" : "#e2e2e2" }, 100, "bounce" );
									nextBtn_line2.animate({ "path" : "M 41 30 L 24 39", "stroke" : "#e2e2e2" }, 100, "bounce" );
								});
							}
						}
					});
				});
			break;
			
			case 4 :
				$('#title_img').animate({'margin-top':-150},1000,"easeInOutBack");
				if($('#content_permission').css('display') != 'none'){
					$('#content_permission').hide(600,"easeInOutExpo",function(){
						$('#content_selectDB').show(600,"easeInOutExpo",function(){
							$('#content_wrap').slideDown(800,"easeInOutExpo");
						});
					});
				} else if ($('#content_content_settingDB').css('display') != 'none'){
					$('#content_content_settingDB').hide(600,"easeInOutExpo",function(){
						$('#content_selectDB').show(600,"easeInOutExpo",function(){
							$('#content_wrap').slideDown(800,"easeInOutExpo");
						});
					});
				} else {
					$('#content_selectDB').show();
					$('#content_wrap').slideDown(800,"easeInOutExpo");
				}
				nextBtn_circle.animate({ "r" : 22, "fill" : "#777777" }, 200, ">" );
				nextBtn_line1.animate({ "path" : "M 24 21 L 41 30", "stroke" : "#e2e2e2" }, 200, ">" );
				nextBtn_line2.animate({ "path" : "M 41 30 L 24 39", "stroke" : "#e2e2e2" }, 200, ">" );
				prevBtn_circle.animate({ "r" : 22, "fill" : "#d3d3d3" }, 200, ">" );
				prevBtn_line1.animate({ "path" : "M 20 30 L 37 21", "stroke" : "#7f7f7f" }, 200, ">" );
				prevBtn_line2.animate({ "path" : "M 20 30 L 37 39", "stroke" : "#7f7f7f" }, 200, ">" );
								
				
				$('#prev_btn')
				.stop()
				.animate({'left' : 245},800,"easeInOutExpo")
				.on('click',function(){

					go(3)
				})
				$('#next_btn')
				.stop()
				.animate({'left' : 295},800,"easeInOutExpo")
				.on('click',function(){
				
				});
			break;
		}
	}
	go(1);
});