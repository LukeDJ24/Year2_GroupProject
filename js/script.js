$(document).ready(function()
{
	console.log("TEST");

	$('#live-chat header').on('click', function() 
	{
		console.log("TEST1");
		$('.chat').slideToggle(300, 'swing');
		$('.chat-message-counter').fadeToggle(300, 'swing');

	});

	$('.chat-close').on('click', function(e) 
	{
		console.log("TEST2");
		e.preventDefault();
		$('#live-chat').fadeOut(300);

	});

});

