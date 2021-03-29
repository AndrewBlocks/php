<?php // list generator-iterator
 $dossier = [
	["name" => "Thomas Anderson", "born" => "1962-03-11"],
	["name"=> "Keanu Reeves", "born"=> "1962-09-02"],
];
for($i = 0; $i <count($dossier); $i++)
	echo " {$dossier[$i]['name']} was born {$dossier[$i]['born']} <br />";

 // iterator associative array
$birth = [
	"Thomas Anderson" => "1962-03-11",
	"Keanu Reeves" => "1962-09-02",
];
for (reset ($birth); ($k = key($birth)); next ($birth))
	echo "$k born {$birth[$k]}<br />";

foreach ([101, 314, 606] as $magic)
	echo "It was written: $magic.<br />";

$numbers = [100, 313, 605];
foreach ($numbers as $v) $v++;
echo "Array elements: ";
foreach ($numbers as $elt) echo "$elt ";

unset($numbers, $v, $elt);

$numbers= [100, 313, 605];
foreach ($numbers as &$v) $v++;
echo "Changing elements: ";
foreach ($numbers as $elt) echo "$elt ";




