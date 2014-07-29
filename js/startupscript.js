$(document).ready(function() {

	$(".commentlist li").addClass("panel panel-default");
	$(".comment-reply-link").addClass("btn btn-default");


	/*
	Forms
	*/
	$('select, input[type=text], input[type=email], input[type=password], textarea').addClass('form-control');
	$('input[type=submit]').addClass('btn btn-primary');

  
	/* Main page Arrow animation */
	$('a[href^="#"]').on('click', function(event)
	{
		var target = $( $(this).attr('href') );

		if( target.length )
		{
			event.preventDefault();
			$('html, body').animate({
				scrollTop: target.offset().top
			}, 1000);
		}
	});

	/* Text animation */
	var showText = function (target, message, index, interval) {    
		if (index < message.length) { 
			$(target).append(message[index++]); 
			setTimeout(function () { showText(target, message, index, interval); }, interval); 
		} 
	}
	
	showText(".typewriter", "Liity miehistöön!", 0, 200);  
	
	$(".typewriter").click(function(){
		window.location = "/liput/";
	});

});
