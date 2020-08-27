<!DOCTYPE html>
<html>
<head>
	<title>php-array</title>
</head>
<body>

<?php

//print array
$myarray = array("ugtr","ugu","gtur");
var_dump( $myarray);

count($myarray);

echo "<br>";
//current array elements assign to new variabale
$array = array("toyota","honda","bajaj");
foreach ($array as $car) {
	echo $car;
	echo "<br>";
}
echo "<br>";

//associative array
$vehicle = array(
	"bus"=>600,
	"van"=>300,
	"car"=>400,
	"bike"=>100);

foreach ( $vehicle as $income ) {
	echo $income;
	echo "<br>";
}
echo "<br>";
echo $vehicle["bus"];


//multidimensional array
$my = array(
0=>array('car'=> 10,
'bus'=>2,
'van'=>8),
2=>array('hotel'=>3,
'house'=>4,
'tent'=>30),
3=>array('lands'=>20,
'company'=>23,
'site'=>34));

var_dump($my) ;

echo $my[2]['tent'];








?>







</body>
</html>