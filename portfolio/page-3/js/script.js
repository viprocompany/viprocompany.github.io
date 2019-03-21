
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
$(".navbar a").click(function(){
$("body,html").animate({
scrollTop:$("#" + $(this).data('value')).offset().top
},1000)  
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