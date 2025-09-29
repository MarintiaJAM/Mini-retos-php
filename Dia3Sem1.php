<?php

$a = 10;
$b = 3;

echo "Suma: " . ($a+$b) . "<br>";
echo "Resta: " . ($a-$b) . "<br>";
echo "Multiplicación: " . ($a*$b) . "<br>";
echo "División: " . ($a/$b) . "<br>";
echo "Modulo: " . ($a%$b) . "<br>";

//La condición ? valor_si_verdadero : valor_si_falso, es una forma abreviada del if-else
echo ($a>$b) ? "A es mayor <br>" : "B es mayor o igual <br>";
echo ($a == 10) ? "A es igual a 10 <br>" : "A no es 10 <br>";

$cond1 = true;
$cond2 = false;
echo ($cond1 && $cond2) ? "Ambas son verdaderas <br>" : "No son ambas verdaderas<br>";
echo ($cond1 || $cond2) ? "Al menos una es verdadera<br>" : "Ninguna es verdadera <br> <br>";

//MINI RETO DEL DÍA
//Calcular el área de un rectángulo usando las variables $base y $altura
echo "MINI RETO DEL DÍA <br>";
echo "<br> <br>";
$base = 50;
$altura = 30;

echo "La base del rectángulo es de: " . $base . "cm <br>";
echo "La altura del rectángulo es de: " . $altura . "cm <br>";
echo "La área del rectángulo es de:" . ($base*$altura) . "cm cuadrados <br>";
?>
