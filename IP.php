<!DOCTYPE html>
<html lang="ru">
<head>
<title>Вывод IP адреса и версии браузера</title>
<meta charset='utf-8'>
</head>
<body>
Your IP is: <?= $_SERVER['REMOTE_ADDR'] ?><br />
Your browser is: <?= $_SERVER['HTTP_USER_AGENT'] ?>
</body>
</html>