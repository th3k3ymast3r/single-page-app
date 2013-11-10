$(document).ready(function(){
	$('.link').click(function(e){
		e.preventDefault();
		$('#content').hide();
		$('#content').unload();
		$('#content').load($(this).attr('href'));
		$('#content').fadeToggle(800);
	});
	$('#menu li').mouseover(function(){
		$('#content').css('opacity','.3');
	});
	$('#menu li').mouseout(function(){
		$('#content').css('opacity','1');
	});
});