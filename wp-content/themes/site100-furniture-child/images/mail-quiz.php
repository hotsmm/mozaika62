<?php
session_start();
$win = "true";
// Если существует переменная POST, то
/*
if($_POST){
    // Отправляем данные в Google
	function getCaptcha($SecretKey){
        $Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdV1IcUAAAAABnQ0mXIp5Yh7tLEcAXzdqG6rx9Y&response={$SecretKey}");
        $Return = json_decode($Response);
        return $Return;
    }
    // Принимаем данные обратно
	$Return = getCaptcha($_POST['g-recaptcha-response']);
	// Если вероятность робота более 0.5, то считаем отправителя человеком и выполняем отправку почты
	if($Return->success == true && $Return->score > 0.5){
*/
		$name = $_POST['name'];
		$tel = $_POST['tel'];
		
		$answer1 = $_SESSION['answer1'];
		$answer2 = $_SESSION['answer2'];
		$answer3 = $_SESSION['answer3'];
		
		$mail .= "Имя клиента: ".$name."\n\n";
		$mail .= "Телефон клиента: ".$tel."\n\n";
		$mail .= "Тип кухни: ".$answer1."\n\n";
		$mail .= "Размеры: ".$answer2."\n\n";
		$mail .= "Материал: ".$answer3."\n\n";
		
		mail("vasilyev-r@mail.ru", "Заявка на рассчет кухни.", $mail);
	
		//$_SESSION['win'] = 1;
		//$_SESSION['recaptcha'] = '<p>Спасибо за Ваше обращение. Я свяжусь с Вами в ближайшее время.</p>';
		header("Location: ".$_SERVER['HTTP_REFERER']);
/*	} else {
		// Иначе считаем отправителя роботом и выводим сообщение с просьбой повторить попытку
		$_SESSION['win'] = 1;
		$_SESSION['recaptcha'] = '<p><strong>Извините!</strong><br>Ваши действия похожи на робота. Пожалуйста повторите попытку!</p>';
		header("Location: ".$_SERVER['HTTP_REFERER']);
	}
} */
?>