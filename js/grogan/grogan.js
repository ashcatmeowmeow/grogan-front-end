jQuery(document).ready(function ($) {
	var offset = $('.scroll-sticky-bar__lg-min').offset();
    $(window).scroll(function () {
        $('.scroll-sticky-bar__lg-min').toggleClass("fix-bar__lg-min", ($(window).scrollTop() > offset.top));
		$('.scroll-sticky-bar__lg-min .grogan-filters .container').toggleClass("container__full-bleed-md-min", ($(window).scrollTop() > offset.top));
		$('.scroll-sticky-bar__lg-min .grogan-adv-search .container').toggleClass("container__full-bleed-md-min", ($(window).scrollTop() > offset.top));
    });
	
	$("#track-lot").on("click", function() {
	  var el = $(this);
	  if (el.text() == el.data("text-swap")) {
		el.text(el.data("text-original"));
	  } else {
		el.data("text-original", el.text());
		el.text(el.data("text-swap"));
	  }
	});
	
	$('.multi-tile .tile').matchHeight();
	
	$('.dropdown-menu').click(function (e) {
		e.stopPropagation();
	});
});
