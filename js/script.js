/* JS TOGGLE AND MODALS */

$(document).ready(function()
{
	$(".collapse").collapse('hide');
	// console.log("doc ready");
	// $('#live-chat header').on('click', function() 
	// {
	// 	$('.chat').slideToggle(300, 'swing');
	// 	$('.chat-message-counter').fadeToggle(300, 'swing');

	// });

	// $('.chat-close').on('click', function(e) 
	// {
	// 	e.preventDefault();
	// 	$('#live-chat').fadeOut(300);

	// });
});

var confirmed;

	function ToggleModal()
	{
		$('.num_notifs').css({
			'display': 'none',
    	});
		if (!confirmed)
		{
			$("body").append('<div class="modal-overlay">');
			$('.modal-overlay').css({
				'display': 'inline',
	    	});
			console.log("toggle test");
			$('.modal').css({
				'display': 'inline',
	    	});
		}
	}

	function ToggleYes()
	{
		confirmed = true;
		$('.modal-overlay').css({
			'display': 'none',
    	});
		console.log("toggle test");
		$('.modal').css({
			'display': 'none',
    	});
	}

	function ToggleNo()
	{
		confirmed = false;
		$('.modal-overlay').css({
			'display': 'none',
    	});
		$('.modal').css({
			'display': 'none',
    	});
		$('#agentDemoForm input').css({
			'display': 'none',
    	});
    	$(".collapse").collapse('hide');
	}


	function CloseWindow() 
	{
	  if (confirm("Close Window?")) 
	  {
	    close();
	  }
	}