<!DOCTYPE html>
<html>
<head>
	<title>php-text</title>

</head>
<body>
<?php

//unnecessary to define type of variable 
$x = "Hi their";
$y = "we are using php";
$z ="its awesome";

//var_dump() function return data type and  variable value
$int = 45;
var_dump($int);

//dot "." use to concatinate
echo $x." ".$y." ".$z;
echo "<br>";
echo "Hello world";
echo "<br>";

//just showing given number
$decimal_var = 41;
echo $decimal_var;
echo "<br>";
 
//show maximum value of int data type
$var = PHP_INT_MAX;
echo var_dump($var);

//float variable print with return datatype and value
$u= 34.8090;
echo var_dump($u);
echo "<br>";
echo $u;
echo "<br>";
 
//string pre-difine key words
$r = "HELLO WORLD";
$t = "hello world";
 
 //number of characteristic in string
echo strlen($r);
echo "<br>";

//uppercase transfer to lowercase
echo strtolower($r);
echo "<br>";

//uppercase transfer to lowercase
echo strtoupper($t);
echo "<br>";

//letters change position ramdomly
echo str_shuffle($r);
echo "<br>";

//boolean and null
$q = true;
$w = false;
$score = null;

var_dump($q);
echo "<br>";
var_dump($score);
echo "<br>";

//array
$car = array("toyota","honda","benze","audi");
var_dump($car);

//constant
//define() function to create constants in PHP. Not need to use $ 
Define("CAT", "45");
echo CAT;
echo "<br>";
echo 45;
echo "<br>";

//pre-define constants
echo PHP_VERSION;
echo "<br>";
echo PHP_OS;
echo "<br>";
echo _LINE_;
echo "<br>";
echo _FILE_;
echo "<br>";
echo PHP_DATADIR;
echo "<br>";

 ?>

</body>
</html>
