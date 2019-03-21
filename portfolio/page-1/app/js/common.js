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
result = '<p style="color:#FFF654;">Сообщение успешно отправлено!</p>';
} else {
result ='<p>Письмо не отправлено!</p>';
}
$('.messages').html(result);
}
});
return false;
});
});
