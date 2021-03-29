<!DOCTYPE html>
<html lang="ru">
<head>
<title></title>
<meta charset='utf-8'>
</head>
<body>
<?php // string array divider

$st= "4597219361|Thomas Anderson|l962-03-11|TeKcT, server !";
$person = explode("|", $st, 4);

list ($id, $name, $burn, $comment) = $person;
echo ("$id, $name, $burn, $comment <br />	");


//упаковка 
unset($st);
$A = ["a" => "aa", "b" => "bb", "c" => ["x" =>"xx"]];
$st = serialize($A);
echo $st;

// a: 2: { s: 1: "a"; s: 2: "aa"; s: 1: "b"; s: 2: "bb"; s: 1: "c"; a: 1: { s: 1: "x"; s: 2: "xx"; ) }


?>
</body>
</html>