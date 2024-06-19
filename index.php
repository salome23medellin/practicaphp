<?php
echo "My first PHP script!";
echo "br";
echo "mis datos:";
$nombre ="maria ";
$edad=19;

$estatura = 1.54;
echo "soy maria ".strtoupper($nombre )."soy maria ".$edad."anos y mido " .$estatura."metros";
echo "<br>";
var_dump(is_int($nombre));
echo "<br>";
$x =19;
$y =356.78;
$z=$x+$y;
echo "la suma es $x + $y=$z <br> ";
$x =5;
$y =10;
$z=$x-$y;
echo "la resta es $x - $y=$z <br> ";
$x =5;
$y =10;
$z=$x*$y;
echo "la multiplicacio es $x * $y=$z <br> ";
$x =19;
$y =356.78;
$z=$x/$y;
echo "la divicion es $x/ $y=$z <br> ";
$x = 5;
$pi = pi();

$z=$x * $pi;

echo "El resultado de la operación es usando el pi:  <br>" . $z ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    hola 
</body>
</html>