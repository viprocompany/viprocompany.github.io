
    // фон на всю высоту
$(document).ready(function(){
 $('.header').height($(window).height());
});
    // фон на всю ширину не работает?
// $(document).ready(function(){
//  $('.header').width($(window).width());
// }) 

// $(function(){
//     var header = $('.header').get(0);
//     function resizeHeader() {
//         header.style.height = window.innerHeight + 'px';
//     }
//     $(window).on('resize', resizeHeader);
//     resizeHeader();
// });

// скрипт  джквери для навигации
// $(".navbar a").click(function(){
// $("body,html").animate({
// scrollTop:$("#" + $(this).data('value')).offset().top
// },1000)  
// });

 // паралаксы 3 штуки
var $ = jQuery.noConflict();
$(window).scroll(function() {
	var st = $(this).scrollTop();
	// consol.log(st);
	$('.description').css({
		"transform" : "translate(0%, " + st/4 + "%"
	});  // паралакс букв и кнопки  над фотографией номер1 с оверлеем
		$('.paralax2-body ').css({
		"transform" : "translate(0%, " + st/19 + "%"
	});  // паралакс  фотографии номер 2 между блоками
	$('.paralax2-header').css({
		"transform" : "translate(0%, " + st/20 + "%"
	});  // паралакс заголовка над фотографией номер2
	// 	$('.paralax3-body ').css({
	// 	"transform" : "translate(0%, " + st/20 + "%"
	// }); // паралакс фотографии номер 3 между блоками
	$('.paralax3-header').css({
		"transform" : "translate(0%, -" + st/50 + "%"
	});// паралакс заголовка над фотографией номер3
});

 //сбор данных  с формы
 jQuery(document).ready(function($) { 
$(".ajax-contact-form").submit(function() {
var str = $(this).serialize(); 
$.ajax({
type: "POST",
url: "action.php",
data: str,
success: function(msg) {$('textarea').val("");if(msg == 'OK') 
{ 
result = '<h4 class="h4" style=" color:#FA604D;">СООБЩЕНИЕ ОТПРАВЛЕНО!</h4>';
} else
 {
result ='<p style="color:black;">СООБЩЕНИЕ НЕ ОТПРАВЛЕНО!</p>';
}
$('.messages').html(result);
}
});
return false;
});
});