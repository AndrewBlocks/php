<?php 
	$message = "Это самое простое сообщение в мире!";
	$to = "sterpuandrej@gmail.com";
	$from = "sterpuandrej@gmail.com"
	$subject = "Тема сообщения";
	$subject = "=?utf-8?B?".base64_encode($subject)."?=";
	$headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";
	mail ($to, $subject, $message, $headers);



?>
