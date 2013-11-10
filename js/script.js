/* Author: Leigh A. Laguisma 
	
*/

$(document).ready(function(){
	//Common functions - new window
	$('.new-window')
		.attr('target','_blank')
		.attr('title','Opens in new window');

	// - apply dynamic tabindex
	$('#menu > a').addClass('tab-index');
	$('.tab-index').each(function(index){
		$(this).attr('tabindex',index);
		});

	//fix fade-in when menu rollout fails
	$('#content').hover(function(){
		$(this).css('opacity','1');
		});

	//Footer strip elements
	$('#copyline br, #copyline h1').remove();

	});