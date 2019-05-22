 // паралаксы 2 штуки
var $ = jQuery.noConflict();
$(window).scroll(function() {
	var st = $(this).scrollTop();
	// consol.log(st);
	$('.header-composition').css({
		"transform" : "translate(0%, " + st/7.7 + "%"
	});

	// 		$('.paralax2-body ').css({
	// 	"transform" : "translate(0%, " + st/20 + "%"
	// });  // паралакс  фотографии номер 2 между блоками
	// $('.paralax2-header').css({
	// 	"transform" : "translate(0%, " + st/20 + "%"
	// }) // паралакс заголовка над фотографией номер2
});

$(document).ready(function(){
	$('.more').hide().fadeIn(5000);
});


// var rellax = new Rellax('.rellax');
// $(document).ready(function(){

// $('.more2').css({'background-color': '#17a2b8'}, 9500);
// $('.more2').css({'background-color': '#dc3545'}, 9500);
// $('.more2').css({'background-color': '#ffc107'}, 9500)
// });