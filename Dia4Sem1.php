<?php

$edad = 20;
if ($edad >= 18) {
    echo "Eres mayor de edad. Puedes entrar al campo de batalla. <br>";
    }
    else {
        echo  "Eres menor de edad aún no puedes entrar. <br>";
}

$arma = "espada";
switch ($arma) {
    case "espada":
        echo "Tu arma es la espada.";
        break;
    case "arco":
        echo "Tu arma es un arco.";
        break;
    default:
    echo "No tienes un arma asignada.";
}

 echo "<br> <br>";
//MINI RETO DEL DÍA
//Crea un sistema que diga si un soldado aprueba (≥70) o reprueba (<70) una misión
echo "MINI RETO DEL DÍA <br>";
$misioncump = 75;

echo "Cantidad de misiones completadas: " . $misioncump . "<br>";
if ($misioncump >=70) {
    echo "¡Muchas felicidades soldado! Has aprobado con éxito las misiones solicitadas<br>";
}
else {
    echo "Has reprobado la misión, lo sienro soldado. ¡Vuelvelo a intentar!  <br>";
}


echo "<br> <br>";

//EJERCICIOS EXTRAS
    //Guardamos 3 calificaciones.
    $matematicas = 8;
    $ingles = 6;
    $programacion = 9;

    //Calculamos el promedio sumando y dividiendo entre 3.
    $promedio = ($matematicas+$ingles+$programacion)/3;

    //Mostraremos el promedio.
    echo "Promedio: $promedio <br>";

    //Si el promedio es >= 7, aprobó; si no reprobó.
    if ($promedio>=7) {
        echo "Resultado: APROBADO";
    } else {
        echo "Resultado: REPROBADO";
    }
?>
