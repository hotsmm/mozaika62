<?php
session_start();
$win = "true";
// Если существует переменная POST, то

/*
if($_POST){
	// Отправляем данные в Google
    function getCaptcha($SecretKey){
        $Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LcfEa8ZAAAAAMeUv4rL-vPnvfhdpjhXmVriios6&response={$SecretKey}");
        $Return = json_decode($Response);
        return $Return;
    }
	// Принимаем данные обратно
    $Return = getCaptcha($_POST['g-recaptcha-response']);
    // Если вероятность робота более 0.5, то считаем отправителя человеком и выполняем отправку почты
	if($Return->success == true && $Return->score > 0.5){*/

		// Данные клиента
		$name = $_POST['name'];
        $tel = $_POST['tel'];
		
		// Адрес почты для отправки
		$send_to = "mozaika62@bk.ru, vasilyev-r@mail.ru";
		
		// Тема письма
		$mail_title = "Вызов замерщика.";
		
		// Текст письма
		$message = "
			Имя: " . $name . "<br>
			Телефон: " . $tel;
		
		// Заголовки
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "From: мозаика62.рф\r\n";
		$headers .= "Content-type: text/html; charset=utf-8\r\n";
		
		// Отправляем почту
		mail( $send_to, $mail_title, $message, $headers );
        $_SESSION['win'] = 1;
		$_SESSION['recaptcha'] = '<p>Спасибо, что Вы обратились именно к нам. Мы свяжемся с Вами в ближайшее время.</p>';
		header("Location: ".$_SERVER['HTTP_REFERER']);

	/*} else {
        // Иначе считаем отправителя роботом и выводим сообщение с просьбой повторить попытку
		$_SESSION['win'] = 1;
		$_SESSION['recaptcha'] = '<p><strong>Извините!</strong><br>Ваши действия похожи на робота. Пожалуйста повторите попытку!</p>';
		header("Location: ".$_SERVER['HTTP_REFERER']);
    }
}*/
?>