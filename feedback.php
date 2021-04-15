<?php
	session_start();
	if(isset($_POST["send"]))
	{
		$from = htmlspecialchars($_POST["from"]);
		$to = htmlspecialchars($_POST["to"]);
		$subject = htmlspecialchars($_POST["subject"]);
		$message = htmlspecialchars($_POST["message"]);
		$_SESSION["from"] = $from;
		$_SESSION["to"] = $to;
		$_SESSION["subject"] = $subject;
		$_SESSION["message"] = $message;
		$error_from = "";
		$error_to = "";
		$error_subject = "";
		$error_message = "";
		$error = false;
		if($from == "" || !preg_match("/@/", $from)) {
			$error_from = "Введи корректный email";
			$error = true;
		}
		if($to == "" || !preg_match("/@/", $to)) {
			$error_to = "Введи корректный email";
			$error = true;
		}
		if(strlen($subject) == 0) {
			$error_subject = "Введите Тему Сообщения";
			$error = true;
		}
		if(strlen($message) == 0) {
			$error_message = "Введи Сообщение";
			$error = true;
		}
		if(!$error){
			$subject = "=?utf-8?B?".base64_encode($subject)."?=";
			$headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";
			mail ($to, $subject, $message, $headers);
			header ("Location success.php?send=1");
			exit;
		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Обратная связь</title>
</head>
<body>
	<h2>Форма обратной связи</h2>
	<form name="feedback" action="" method="post">
		<label> От кого: </label><br /> 
		<input type="test" name="from" value="<?=$_SESSION["from"]?>"/><br />
		<span style="color:red"><?=$error_from?></span>
		<label> Кому: </label><br />
		<input type="test" name="to" value="<?=$_SESSION["to"]?>"/><br />
		<span style="color:red"><?=$error_to?></span>
		<label> Тема: </label><br />
		<input type="text" name="subject" value="<?=$_SESSION["subject"]?>"/><br />
		<span style="color:red"><?=$error_subject?></span>
		<label> Сообщение: </label><br />
		<textarea name="message" cols="30" rows="10" <?=$_SESSION["message"]?>></textarea>
		<span style="color:red"><?=$error_message?></span>
		<input type="submit" name="send" value="Отправить" />
		
	</form>

</body>
</html>








<?php 
	



?>
