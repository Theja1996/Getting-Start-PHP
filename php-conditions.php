<!DOCTYPE html>
<html>
<head>
	<title>php-conditionals</title>
</head>
<body>

<?php 
$a = 8;
$b = 4;

//if statement
//operaters use conditions
if($a>$b){
	echo "a greater then b";
}

echo "<br>";
//logical operaters
$c = 30;
$d = 40;

if(($a>$b)&&($d>$c)){

	echo "d and a larger than c and b";
}
echo "<br>";

//if-else statement
//numbers are odd or even
$r = 10;
if ($r%2==1){
	echo "r is odd number";
}
else{
	echo "even number";
}
echo "<br>";

//cascaded if statement
$c = 40;
$d = 40;
if($c<$d){
	echo "c less than d";
}

elseif ($c==$d) {
	echo "c equal to d";
}
else{
	echo "c greater than d";
}
echo "<br>";

$marks = 55;
if($marks>=90){
	echo "Grade A";
}
elseif ($marks<90 && $marks>=80) {
	echo "Grade B";
}
elseif ($marks<80 && $marks>=70) {
	echo "Grade C";
}
elseif ($marks<70 && $marks>=40) {
	echo "Grade D";
}
else{
	echo "Grade F";
}
echo "<br>";

//switch statement
$today = "mon";
switch ($today) {
	case 'mon':
		echo "go shop";
		break;
	case 'tue':
		echo "go college";
		break;
	case 'sun':
		echo "rest";
			break;
	
	default:
		echo "sleep";
		break;
}
echo "<br>";


//example
$BP = 89;//BP = Boiling Point

switch ($BP) {
	case '100':
		echo "Water";
		break;
	case '357':
		echo "Mercury";
		break;
	case '1187':
		echo "Copper";
		break;
	case '2193':
		echo "Silver";
		break;
		case '2660':
		echo "Gold";
		break;
	
	default:
		echo "substance unknown";
		break;
}




?>






</body>
</html>