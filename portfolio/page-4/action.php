<?php

$post = (!empty($_POST)) ? true : false;
 
if($post)
{
  // собираем данные из формы
        
	
        $message  = "Имя пользователя: " . $_POST['user_name'] . ", ";	  
        $message .= "телефон заказчика: " . $_POST['user_phone'] . ", ";
        $message .= "E-mail пользователя: " . $_POST['user_email'] . ", ";
      	$message .= "Текст письма: " . $_POST['text_comment'];			
        $mail_to = "my@mail.ru"; 
		// тема письма
		$subject = " Сообщение с сайта";
		
		 //заголовок письма
		$headers= "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=utf-8\r\n";  //кодировка письма
		$headers .= "From: Тестовое письмо <no-reply@test.com>\r\n"; // от кого письмо  
        $mail = mail($mail_to, $subject, $message, $headers); 
 
if($mail)
{
echo 'OK';
} 
}


else
{
echo 'NO';
}
 

?>
