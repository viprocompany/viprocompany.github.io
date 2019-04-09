
    // фон на всю высоту
$(document).ready(function(){
 $('.header').height($(window).height());
});
 

 // паралаксы  текста 2 штуки
var $ = jQuery.noConflict();
$(window).scroll(function() {
	var st = $(this).scrollTop();
	// consol.log(st);

	// паралакс букв и кнопки  над фотографией номер1 с оверлеем
			$('.description').css({
		"transform" : "translate(0%, " + st/4 + "%"
	});  		
// паралакс заголовка над фотографией номер 2
	$('.paralax2-header').css({
		"transform" : "translate(0%, " + st/20 + "%"
	});  
});

// подключение плагина паралакса BGscroll для фотографии 2(косметика)
	$(window).scroll(function(){
  $('.bg--1').bgscroll({
    direction: 'bottom', // направление bottom или top
    bgpositionx: 50, // x позиция фонового изображения, от 0 до 100, 
    // размерность в %, 50 - означает по центру
    debug: false, // Режим отладки
    min:0, // минимальное положение (в %) на которое может смещаться фон
    max:100 // максимальное положение (в %) на которое может смещаться фон
  });
    $('.bg--2').bgscroll({
    direction: 'top',
    

  });
  // $('.bg--3').bgscroll({
  //   direction: 'top'
  // });
  // $('.bg--4').bgscroll({
  //   direction: 'bottom',
  
  // });
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