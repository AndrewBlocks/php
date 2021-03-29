<!DOCTYPE html>
<html lang="ru">
<head>
<t1tle>Alternative syntaxis if-else.</title>
<meta charset='utf-8'>
</head>
<body>
<?php if (isset($_REQUEST['go'])) :?>
Hi, <?=$_REQUEST['name']?>!
<?php else:?>
<form action="<?=$_SERVER['REQUEST_URI']?>" method="POST">
Your name: <input type="text" name="name"><br />
<input type="submit" name="go" value="Send!">
</form>
<?php endif?>
</body>
</html>