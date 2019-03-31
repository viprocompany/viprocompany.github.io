//$('.my-carousel').carousel({
//	interval: 7000
//});
//$('.carousel-fade').carousel({
//	interval: 5000
//});

jQuery(document).ready(function($) { 
$(".ajax-contact-form").submit(function() {
var str = $(this).serialize(); 
$.ajax({
type: "POST",
url: "action.php",
data: str,
success: function(msg) {
 $('textarea').val(""); 
if(msg == 'OK') { 
result = '<p style="color:green;">Сообщение успешно отправлено!</p>';
} else {
result ='<p>Письмо не отправлено!</p>';
}
$('.messages').html(result);
}
});
return false;
});
});

var $ = jQuery.noConflict();
$(window).scroll(function() {
	var st = $(this).scrollTop();
	// consol.log(st);
	$('.description').css({
		"transform" : "translate(0%, " + st/15 + "%"
	})
});

 // $(function(){
 //      $('body').fadeOut()
 //            });