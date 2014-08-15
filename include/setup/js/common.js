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
	$('#logo_mask_img').load(function(){
		$('#logo_background').show();
	});
});