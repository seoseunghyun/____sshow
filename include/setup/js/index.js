$(document).ready(function(){
	
	var settingArr = new Array;
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
	
	var sshowBtn_optionArray = new Array;
	$('.sshowBtn_optionGroup').each(function(){
		$(this).find('.sshowBtn_option').each(function(){
			var optionBtnCanvas = Raphael($(this)[0]);
			
			var optionBtnCircle = optionBtnCanvas.circle(10, 10, 7);
			optionBtnCircle.id = $(this).attr('id');
			optionBtnCircle.attr({'stroke':'none','fill':'#a4a4a4'});
			
			var optionBtnCircleSelect = optionBtnCanvas.circle(10, 10, 0);
			optionBtnCircleSelect.id = $(this).attr('id') + '_select';
			optionBtnCircleSelect.attr({'stroke':'none','fill':'#e2e2e2'});	
			
			sshowBtn_optionArray[$(this).attr('id')] = optionBtnCanvas;
		})
	});
	
	$('.sshowBtn_option').on('click', function(){
		var optionBtnNow = sshowBtn_optionArray[$(this).attr('id')].getById($(this).attr('id'));
		var optionBtnSelectNow = sshowBtn_optionArray[$(this).attr('id')].getById($(this).attr('id')+'_select');
		if ( $(this).hasClass( 'sshowBtn_optionSelected' ) ){
			return false;
		}
		$('.sshowBtn_optionGroup').each(function(){
			$(this).find('.sshowBtn_option').each(function(){
				var optionBtnThis = sshowBtn_optionArray[$(this).attr('id')].getById($(this).attr('id'));
				var optionBtnSelectThis = sshowBtn_optionArray[$(this).attr('id')].getById($(this).attr('id')+'_select');
				$(this).removeClass( 'sshowBtn_optionSelected' );
				optionBtnThis.animate({ 'fill' : '#a4a4a4', 'r' : 7 }, 300, ">");
				optionBtnSelectThis.animate({ 'r' : 0 }, 300, ">");
			});
		})
		optionBtnNow.animate({ 'fill' : '#4a4a4a', 'r' : 9 }, 700, "bounce" );
		optionBtnSelectNow.animate({ 'r' : 5 }, 700, "bounce");
		$(this).addClass( 'sshowBtn_optionSelected' );
	})
	
	
	$('.content_selectDB_eleWrap').on('click', function(){
		$(this).find('.sshowBtn_option').click();
	});
	
	function go(Step){
	$('#prev_btn').off('click mouseleave mouseenter');
	$('#next_btn').off('click mouseleave mouseenter');
		switch(Step)
		{
			case 1 : 
				$('#title_img').animate({'margin-top':0},1000,"easeInOutBack");
				//$('#subtitle_img').delay(200).animate({'margin-top':0},1000,"easeInOutBack");

				$('#subtitle_wrap').slideUp(800,"easeOutBounce");
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
				$('#subtitle_img').delay(200).animate({'margin-top':-25},1000,"easeInOutBack");

				$('#subtitle_wrap').slideDown(800,"easeOutBounce");

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
				$('#subtitle_img').delay(200).animate({'margin-top':-50},1000,"easeInOutBack");

				$('#subtitle_wrap').slideDown(800,"easeOutBounce");

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
				$('#subtitle_img').delay(200).animate({'margin-top':-75},1000,"easeInOutBack");

				$('#subtitle_wrap').slideDown(800,"easeOutBounce");

				if($('#content_permission').css('display') != 'none'){
					$('#content_permission').hide(600,"easeInOutExpo",function(){
						$('#content_selectDB').show(600,"easeInOutExpo",function(){
							$('#content_wrap').slideDown(800,"easeInOutExpo");
						});
					});
				} else if ($('#content_settingDB').css('display') != 'none'){
					$('#content_settingDB').hide(600,"easeInOutExpo",function(){
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
			
				
				$('#content_selectDB_list').find('.content_selectDB_eleWrap').each(function(){
					$(this).show();
				});
				
				var selectDB_animationTime = 1;

				$('.content_selectDB_radio').each(function(){
					$(this).css({'opacity':0});
					$(this).delay(800).animate({'opacity':1}, 800, "easeInOutExpo");
				});
				$('.content_selectDB_name').find('img').each(function(){
					$(this).css({'margin-left':100, 'opacity' : 0});
					$(this).delay(700 + 70 * selectDB_animationTime).animate({'margin-left':0, 'opacity' : 1},800 + 100*selectDB_animationTime++,"easeInOutExpo");
				});
								
				
				$('#prev_btn')
				.stop()
				.animate({'left' : 245},800,"easeInOutExpo")
				.on('click',function(){

					go(3);
				})
				$('#next_btn')
				.stop()
				.animate({'left' : 295},800,"easeInOutExpo")
				.on('click',function(){
					var wrapper = $('#content_selectDB_list').find('.sshowBtn_optionSelected').parent().parent();
					settingArr.db = {};
					settingArr.db['type'] = wrapper.find('img').attr('alt');

					if(typeof settingArr.db['type'] == 'undefined'){
						nextBtn_circle.animate({ 'fill' : "#e44651"},100);
								nextBtn_line1.animate({ "path" : "M 22 22 L 38 38", "stroke" : "#e2e2e2" }, 200, "bounce" );
								nextBtn_line2.animate({ "path" : "M 38 22 L 22 38", "stroke" : "#e2e2e2" }, 200, "bounce" );
			
								$('#next_btn').stop().animate({'left' : 305},600,"easeOutBounce",function(){
									$('#next_btn').animate({'left' : 295},200,"easeOutBack");
									nextBtn_circle.animate({ 'fill' : "#777777"},200);
									nextBtn_line1.animate({ "path" : "M 24 21 L 41 30", "stroke" : "#e2e2e2" }, 100, "bounce" );
									nextBtn_line2.animate({ "path" : "M 41 30 L 24 39", "stroke" : "#e2e2e2" }, 100, "bounce" );
						});
					}else{

						$('#content_settingDB_load').load(_SSHOW_URL_+'common/db/'+settingArr.db['type']+'/setup.php',function(){

							go(5);
							
						});
						
					}
				});
			break;
			
			case 5 :
				$('#title_img').animate({'margin-top':-200},1000,"easeInOutBack");
				$('#subtitle_img').delay(200).animate({'margin-top':-100},1000,"easeInOutBack");

				$('#subtitle_wrap').slideDown(800,"easeOutBounce");

				if($('#content_selectDB').css('display') != 'none'){

					$('#content_selectDB').hide(600,"easeInOutExpo",function(){
						$('#content_settingDB').show(600,"easeInOutExpo",function(){
							$('#content_wrap').slideDown(800,"easeInOutExpo");
						});
					});
				} else if ($('#content_settingUser').css('display') != 'none'){

					$('#content_settingUser').hide(600,"easeInOutExpo",function(){
						$('#content_settingDB').show(600,"easeInOutExpo",function(){
							$('#content_wrap').slideDown(800,"easeInOutExpo");
						});
					});
				} else {

					$('#content_settingDB').show();
					$('#content_wrap').slideDown(800,"easeInOutExpo");
				}
				
				nextBtn_circle.animate({ "r" : 22, "fill" : "#777777" }, 200, ">" );
				nextBtn_line1.animate({ "path" : "M 24 21 L 41 30", "stroke" : "#e2e2e2" }, 200, ">" );
				nextBtn_line2.animate({ "path" : "M 41 30 L 24 39", "stroke" : "#e2e2e2" }, 200, ">" );
				prevBtn_circle.animate({ "r" : 22, "fill" : "#d3d3d3" }, 200, ">" );
				prevBtn_line1.animate({ "path" : "M 20 30 L 37 21", "stroke" : "#7f7f7f" }, 200, ">" );
				prevBtn_line2.animate({ "path" : "M 20 30 L 37 39", "stroke" : "#7f7f7f" }, 200, ">" );		
				
				var setArray = $('#content_settingDB_load').html().split(',');
				var setArrayCount = setArray.length;
				console.log(setArray);
				var appendSettingForm = function( key ){
					var inputType = "text";
					if(key == "password"){
						inputType = "password";
					}
				return 	'<div class="content_input_wrap">'
				+			'<div class="content_input_img">'
				+				'<img src="'+__SSHOW_SETUP_URL__+'img/input_'+key+'.png" width="25" height="25" />'
				+			'</div>'
				+			'<div class="content_input_input">'
				+				'<input id="content_settingDB_input_'+ key +'" type="'+ inputType +'"  placeholder="'+key.substring(0, 1).toUpperCase() + key.substring(1, key.length).toLowerCase()+'" />'
				+			'</div>'
				+		'</div>';
				
				
				}
				$('#content_settingDB_content').html('<div class="content_settingDB_img"><img src="'+_SSHOW_URL_+'common/db/'+settingArr.db['type']+'/logo.png" width="102" height="50" alt="'+settingArr.db['type']+'" /></div>');
				for(var i = 0; i < setArrayCount; i++ ){
					$('#content_settingDB_content').append( appendSettingForm( setArray[i] ) );
				}
				$('#content_settingDB input').focus();
				
				
						
				
				$('#prev_btn')
				.stop()
				.animate({'left' : 245},800,"easeInOutExpo")
				.on('click',function(){

					go(4);
				})
				$('#next_btn')
				.stop()
				.animate({'left' : 295},800,"easeInOutExpo")
				.on('click',function(){
					var settingValue = "";
					for(var i = 0; i < setArrayCount; i++){
						if(i != 0){
							settingValue+= ",";
						}
						settingValue += setArray[i]+":"+$('#content_settingDB_input_'+setArray[i]).val();
					}
					
					$.ajax({
						type: "POST",
						url: _SSHOW_URL_+'common/db/'+settingArr.db['type']+'/action/setup.php',
						data: { set : settingValue },
						success: function(e){
							if(e == '1'){
								for(var i = 0; i < setArrayCount; i++){
									settingArr.db[setArray[i]] = $('#content_settingDB_input_'+setArray[i]).val();
								}
								go(6);
							}else{
								alert(e);
							}
						}
					});

				
				});
			break;
			
			case 6 :
				$('#title_img').animate({'margin-top':-250},1000,"easeInOutBack");
				$('#subtitle_img').delay(200).animate({'margin-top':-125},1000,"easeInOutBack");

				$('#subtitle_wrap').slideDown(800,"easeOutBounce");

				if($('#content_settingDB').css('display') != 'none'){
					$('#content_settingDB').hide(600,"easeInOutExpo",function(){
						$('#content_settingUser').show(600,"easeInOutExpo",function(){
							$('#content_wrap').slideDown(800,"easeInOutExpo");
						});
					});
				} else if ($('#content_complete').css('display') != 'none'){
					$('#content_complete').hide(600,"easeInOutExpo",function(){
						$('#content_settingUser').show(600,"easeInOutExpo",function(){
							$('#content_wrap').slideDown(800,"easeInOutExpo");
						});
					});
				} else {
					$('#content_settingUser').show();
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

					go(5);
				})
				$('#next_btn')
				.stop()
				.animate({'left' : 295},800,"easeInOutExpo")
				.on('click',function(){
					go(7);
				
				});
			break;

			case 7 :
				$('#title_img').animate({'margin-top':-300},1000,"easeInOutBack");
				$('#subtitle_img').delay(200).animate({'margin-top':-150},1000,"easeInOutBack");

				$('#subtitle_wrap').slideDown(800,"easeOutBounce");

				if($('#content_settingUser').css('display') != 'none'){
					$('#content_settingUser').hide(600,"easeInOutExpo",function(){
						$('#content_complete').show(600,"easeInOutExpo",function(){
							$('#content_wrap').slideDown(800,"easeInOutExpo");
						});
					});
				} else {
					$('#content_complete').show();
					$('#content_wrap').slideDown(800,"easeInOutExpo");
				}
				
				nextBtn_circle.animate({ "r" : 22, "fill" : "#6dcc6e" }, 800, ">" );
				nextBtn_line1.animate({ "path" : "M 24 21 L 41 30", "stroke" : "#e4f6e4" }, 800, ">" );
				nextBtn_line2.animate({ "path" : "M 41 30 L 24 39", "stroke" : "#e4f6e4" }, 800, ">" );
				prevBtn_circle.animate({ "r" : 22, "fill" : "#d3d3d3" }, 800, ">" );
				prevBtn_line1.animate({ "path" : "M 20 30 L 37 21", "stroke" : "#7f7f7f" }, 800, ">" );
				prevBtn_line2.animate({ "path" : "M 20 30 L 37 39", "stroke" : "#7f7f7f" }, 800, ">" );		
				
				settingArr.user = {
					id : $('#content_settingUser_input_id').val(),
					password : $('#content_settingUser_input_password').val()
				};
						
				
				$('#prev_btn')
				.stop()
				.animate({'left' : 245},800,"easeInOutExpo")
				.on('click',function(){

					go(6);
				})
				$('#next_btn')
				.stop()
				.animate({'left' : 295},800,"easeInOutExpo")
				.on('click',function(){
					
					
					
					/* Complete Action */
					nextBtn_line1.animate({ "path" : "M 40 35 L 30 22", "stroke" : "#e4f6e4" }, 400, "easeInOutExpo" );
					nextBtn_line2.animate({ "path" : "M 20 35 L 30 22", "stroke" : "#e4f6e4" }, 400, "easeInOutExpo" );		
					
					$('#prev_btn')
					.stop()
					.animate({'left':270},500,"easeInOutExpo");
					$('#content_complete').hide(500);					
					$('#next_btn')
					.stop()
					.animate({'left':270},500,"easeInOutExpo",function(){
						$('#title_img').animate({'margin-top':-350},400,"easeInOutBack");
						console.log(settingArr);
						$('#subtitle_img').delay(200).animate({'margin-top':-200},500,"easeInOutBack",function(){
							$('#logo_wrap').hide(800,"easeInOutBack");
							$('#title_wrap').hide(800,"easeInOutBack");
							$('#subtitletitle_wrap').hide(800,"easeInOutBack");
							$('#complete_wrap').show(800,"easeInOutBack")
							nextBtn_line1.animate({ "path" : "M 23 31 L 30 39", "stroke" : "#e4f6e4" }, 500, ">" );
							nextBtn_line2.animate({ "path" : "M 37 19 L 30 39", "stroke" : "#e4f6e4" }, 500, ">" );
							nextBtn_circle.animate({ "r" : 25, "fill" : "#6dcc6e" }, 500, ">" );
						});
					});	
					
				
				});
			break;
			
		}
	}
	
	/* Init */
	$('#content_settingUser input').placeholder();
	
	$('#content_input_wrap input')
	.on('focus',function(){
		$(this).parent().parent().css({'background':'#f4f4f4'})
	})
	.on('blur',function(){
		$(this).parent().parent().css({'background':'none'})
	})
	go(1);
});