<!DOCTYPE html>
<html lang="ru">
<head>
<title>Scenario model</title>
<meta charset='utf-8'>
</head>
<body>
<?php

$WasError = 0; 
if (isset($_REQUEST['doSubmit'])) do {

if ($_REQUEST ['reloads'] != 1+1+7) { $WasError = 1; break; }
if ($_REQUEST['loader'] !="source") { $WasError = 1; break; }

echo "You are attentive<br />";

exit();
} while (0);

if ($WasError) {
echo "You answered incorrectly, try again";
}
?>

<form action="<?=$_SERVER['REQUEST_URI']?>" method="POST">
Reloads number: <input type="text" name="reloads"><br />
Programm: <input type="text" name="loader"><br />
<input type="submit" name="doSubmit" value="Answer the question">
</form>
</body>
</html>