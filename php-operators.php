<!DOCTYPE html>
<html>
<head>
	<title>php-operators</title>
</head>
<body>
<?php
$x = 34;
$y = 85;

//addition
$t = $x+$y;
echo "addition =". $t;
echo "<br>";
//subraction
$t = $y-$x;
echo "subraction =". $t ;
echo "<br>";
//multiplication
$t = $y*$x;
echo "multiplication =". $t ;
echo "<br>";
//divition
$t = $y/$x;
echo "divition =". $t ;
echo "<br>";
//modulus
$t = $y%$x;
echo "mod =". $t ;
echo "<br>";
//increment
$t = $y++;
echo "intremental value =". $t ;
echo "<br>";
//decrement
$t = $y--;
echo "decrement value =". $t ;
echo "<br>";
//logical operaters
$a = (true or false);
$b = (true and false);

 var_dump($a);
 echo "<br>";
 var_dump($b);

 //arithmetic operations
 $a =2  ;  $x = 5.0;
 $b = 5;	$y = 3.0;
 $c = 7;	$z = 7.0;

 $d = $a + $c % $a;
 var_dump($d);

 $d = $b * $c/$a;
 var_dump($d);

  $w = $y*$z/$z+$b;
  var_dump($w);

  $d = $z/$x/$y*$a;
  var_dump($d);

  $w = $c/($a+$c)/$b;
  var_dump($w);

  $a = $a+1+$b/3;
  var_dump($a);

  //php program for MATH formula
  //Area of trapezoid

   $base = 4; 	$h1 = 3;	$h2 = 6;

   $area = ($base*($h1+$h2)/2);
   var_dump($area);

//formula-1 using pow(base,exp) function
$x = 16;
$f = (pow($x, 3) - 2*pow($x, 2) -6.3)/(pow($x, 2)+0.05*$x+3.14);
var_dump($f);

//formula-2 using sqrt(arg) function
$x = 4;
$f = (pow($x, 3)-2*pow($x, 2)+ sqrt($x)-sqrt(43)+6.3)/(pow($x, 2)+0.05*$x+3.14);

var_dump($f);


//computw volume
$r =7;
$h = 10;

$v = pi()*pow($r, 2)*$h ;
var_dump($v);

//revers number
$num = 12345;
$rev = 0;
while ($num != 0) {
	$rev = $rev * 10 + $num % 10;
	$num = (int)($num / 10);
}

echo $rev;



?>


</body>
</html>