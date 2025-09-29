<?php
for ($i = 1; $i <= 5; $i++) {
    echo "Soldado en fila número $i<br>";
}

echo "<br>";

$x = 1;
while ($x <= 3) {
    echo "Entrenando soldado $x<br>";
    $x++;
}

echo"<br>";

$armas = ["Espada", "Arco", "Lanza"];
foreach ($armas as $arma) {
    echo "Arma disponible: $arma<br>";
}

echo"<br>";

//MINI RETO DEL DÍA
//Bucle del 1 al 10
echo "MINI RETO DEL DÍA <br>";
for ($i = 1; $i <= 10; $i++) {
    echo "Número: $i<br>";
}

echo "<br> <br>";

//EJERCICIOS EXTRAS
//Imprimimos la tabla de multiplicar del 5, usando un bucle for.
//$i empieza con 1 y se incrementa hasta el 10
for ($i = 1; $i <= 10; $i++){
    //Mostramos la operación y su resultado
    echo "5 x $i = " . (5*$i) . "<br>";
}
?>
