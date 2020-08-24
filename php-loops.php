<!DOCTYPE html>
<html>
<head>
	<title>php-loop</title>
</head>
<body>

	<?php
//while loop
	$e = 2;

	while ($e <= 10) {
		$e = $e+2;
		echo $e;
		echo "<br>";
	}
echo "Done";
echo "<br>";
echo "<br>";
//do-while
$num = 1;
do{
	echo "$num";
	echo "<br>";
	$num++;
}	while ($num <= 10); 


echo "<br>";
echo "<br>";

//for loop
$a = 12;
for ($num = 1; $num <= 12; $num++)
{
$b = $num * $a;
echo "$num * $a = $b";
echo "<br>";
}

echo "<br>";
echo "<br>";


for ($r=0; $r <10 ; $r++) { 

echo $r;	
echo "<br>";
}




	?>

</body>
</html>