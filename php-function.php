<!DOCTYPE html>
<html>
<head>
	<title>php-function</title>
</head>
<body>
	<?php

//phpinfo();

//creating md5 signature
$mystring = "mystring";
$signature = md5($mystring);
echo $signature;
echo "<br>";


//sentence change to lowercase using function
$str = "HeLLo WorLD";
function lower_case($str){
$str_l = strtolower($str);
echo $str_l;
}

//sentence change to uppercase using function
function upper_case($str){
	$str_l = strtoupper($str);
echo $str_l;

}

lower_case($str);
echo "<br>";
upper_case($str);
echo "<br>";


//parameters
function add($x,$y){
	$z = $x + $y;
	echo $z;
}

add(3,5);

//area of circle
function area_circle($r){
	$a = 2* pi()* $r;
	echo $a;
}

area_circle(10);
echo "<br>";


//compute the volume cylinder
function volume($r,$h){
$v = pi()*pow($r, 2)*$h;
echo $v;
}

volume(7,10);
echo "<br>";


//function for MATH formulas
function formula($x){
	$f = (pow($x, 3) - 2*pow($x, 2)+sqrt($x)-sqrt(43)+6.3)/(pow($x,2)+0.05*$x+3.14);
	echo $f;
}

formula(4);

	?>

</body>
</html>