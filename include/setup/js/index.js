$(document).ready(function(){
	logoAnimate();
	function logoAnimate(){
	
		$('#logo_background').animate({ 'left' : '-2000px'},15000, function(){
			logoAnimate();
		});
	}
});