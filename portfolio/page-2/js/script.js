//$('.my-carousel').carousel({	interval: 9000});

 // $(function(){
 //      $('body').fadeOut(5000)
 //            });
 
jQuery(document).ready(function($) { 
$(".ajax-contact-form").submit(function() {
var str = $(this).serialize(); 
$.ajax({
type: "POST",
url: "action.php",
data: str,
success: function(msg) {$('input').val(" ");$('email').val(" ");if(msg == 'OK') 
{ 
result = '<h2 class="h2" style=" color:#03A9F4;">ЗАКАЗ ПРИНЯТ!</h2>';
} else
 {
result ='<p style="color:red;">СООБЩЕНИЕ НЕ ОТПРАВЛЕНО!</p>';
}
$('.messages').html(result);
}
});
return false;
});
});

