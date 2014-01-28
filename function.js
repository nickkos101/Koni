$(document).ready(function() {

	$('.channels-module li p').click(function() {
		var handler = $(this).parent().find('img').attr('vid');
		$('.channel-video iframe').attr('src', handler);
	});

	
	$('.channels-module li img').click(function() {
		var handler = $(this).attr('vid');
		$('.channel-video iframe').attr('src', handler);
	});

});