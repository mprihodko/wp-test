jQuery(document).ready(function($){
	$('.menu-item span').click(function(){
		var link=$(this).text();		
		if(link=='Home'){
			link="slider";
		}	
		$('html, body').animate({
			scrollTop: $("#"+link).offset().top-100
		}, 2000);
			
	});
});