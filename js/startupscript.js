$(document).ready(function() {

  $(".commentlist li").addClass("panel panel-default");
	$(".comment-reply-link").addClass("btn btn-default");

  	/*
	"Hovernav" navbar dropdown on hover
	Delete this segment if you don't want it, and delete the corresponding CSS in bst.css
	Uses jQuery Media Query - see http://www.sitepoint.com/javascript-media-queries/
	*/
	var mq = window.matchMedia('(min-width: 950px)');
  if (mq.matches) {
    $('ul.navbar-nav li').addClass('hovernav');
  } else {
  	$('ul.navbar-nav li').removeClass('hovernav');
  };
  	/*
	The addClass/removeClass also needs to be triggered on page resize <=> 950px
	*/
  if (matchMedia) {
    var mq = window.matchMedia('(min-width: 950px)');
    mq.addListener(WidthChange);
    WidthChange(mq);
  }
	function WidthChange(mq) {
    if (mq.matches) {
      $('ul.navbar-nav li').addClass('hovernav');
    } else {
      $('ul.navbar-nav li').removeClass('hovernav');
    }
  };
	/*
	Forms
	*/
  $('select, input[type=text], input[type=email], input[type=password], textarea').addClass('form-control');
  $('input[type=submit]').addClass('btn btn-primary');

  	/*
	Woocommerce re-styling
	*/
  $('div.woocommerce').wrapInner('<article></article>');

  
	/* Main page Arrow animation */
	
	$('a[href^="#"]').on('click', function(event) {

    var target = $( $(this).attr('href') );

    if( target.length ) {
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

});
