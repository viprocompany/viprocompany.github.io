var $ = jQuery.noConflict();
$(window).scroll(function() {
	var st = $(this).scrollTop();
	// consol.log(st);
	$('.header-composition').css({
		"transform" : "translate(0%, " + st/7.7 + "%"
	})
});

$(document).ready(function(){
	$('.more').hide().show(1200)
});

// $(document).ready(function(){

// $('.more2').css({'background-color': '#17a2b8'}, 9500);
// $('.more2').css({'background-color': '#dc3545'}, 9500);
// $('.more2').css({'background-color': '#ffc107'}, 9500)
// });