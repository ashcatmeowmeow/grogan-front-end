jQuery(document).ready(function( $ ) {
	
	function scrollToTop() {
		verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
		element = $('body');
		offset = element.offset();
		offsetTop = offset.top;
		$('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
	}
	
	var navOffset = $('.navbar').height();
    $(window).scroll(function () {
        if ($(window).scrollTop() > navOffset) {
			$('.back-to-top').addClass('back-to-top-visible');
		} else {
			$('.back-to-top').removeClass('back-to-top-visible');
		}
    });
 
	$('.back-to-top').on('click', scrollToTop);
	
	$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		  var target = $(this.hash);
		  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		  if (target.length) {
			$('html,body').animate({
			  scrollTop: target.offset().top
			}, 1000);
			return false;
		  }
		}
	  });
	});
});