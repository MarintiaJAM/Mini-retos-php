<?php
function saludo() {
    echo "¡Bienvenido al BootCamp, soldado!<br>";
}

function disparar($arma) {
    echo "Disparando con $arma <br>";
}

function sumar($a,$b) {
    return $a+$b;
}
saludo();
disparar("espada láser");
echo "La suma es: " . sumar(5,7);

echo "<br> <br>";

//MINI RETO DEL DÍA
//Crea una función llamada presentación que reciba el nombre y rango, y muestre 'Soy [nombre], rango [rango], listo para la batalla.'
echo "MINI RETO DEL DÍA <br>";
function presentacion($nombre, $rango) {
    echo "Soy $nombre, de rango: $rango, ¡estoy lista para la batalla!.";
}

presentacion("Marintia Itzel Lopez Meza", "Cabo aprendiz");
?>
