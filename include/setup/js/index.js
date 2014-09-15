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
	
	
	function go(Step){
		switch(Step)
		{
			case 1 :
			
			break;
		}
	}
	
});