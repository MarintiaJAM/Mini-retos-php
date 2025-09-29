<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Calculadora Básica en PHP</title>
    </head>
    <body>
        <h2>Calculadora Básica</h2>

        <!-- FORMULARIO: Captura de datos del usuario -->
         <form method="post">

            <label for="a">Número 1:</label>
            <input type="number" step="any" name="a" id="a" required>
            <br><br>

            <label for="b">Número 2:</label>
            <input type="number" step="any" name="b" id="b" required>
            <br><br>

            <label for="operacion">Operación:</label>
            <select name="operacion" id="operacion" required>
                <option value="suma">Suma(+)</option>
                <option value="resta">Resta(-)</option>
                <option value="multiplicacion">Multiplicación(x)</option>
                <option value="division">División()</option>
            </select>
            <br><br>

            <input type="submit" value="Calcular">
         </form>

         <hr> <!-- regla horizontal; separación visual entre formulario y resultado  -->


         <?php /*A partir de aquí corre PHP lógica del lado servidor*/?>

         <?php
         /**
          * calcular(): ejecuta la operación pedida sobre $a y $b.
            *PHP es de tipado dinámico: aquí trataremos $a y $b como números (float)
            *
            *Ejemplo en PHP (tipado dinámico)
            *$variable = 10; //Ahora es un entero (int)
            *$variable 0 "Hola"; //Ahora es una cadena (string)
            *$variable = 3.1416; //Ahora es un número decimal (float)
            *$variable = true; //Ahora es un valor booleano (bool)
          */
            function calcular($a,$b,$operacion){
                $resultado = 0; //Valor por defecto

                switch($operacion){
                    case "suma":
                        return $a + $b;
                    case "resta":
                        return $a - $b;
                    case "multiplicacion":
                        return $a * $b;
                    case "division":
                        return ($b != 0) ? $a/$b : "Error: División por cero";
                        default: 
                        return "Operación no válida";
                }
            }

            if ($_SERVER["REQUEST_METHOD"] ==="POST") {
                $a=isset($_POST["a"])?(float)$_POST["a"]:0.0; //Float, conversión explicita a número décimal
                $b=isset($_POST["b"])?(float)$_POST["b"]:0.0;
                $operacion=isset($_POST["operacion"])?$_POST["operacion"]:""; //string con la operación elegida
                $resultado=calcular($a,$b,$operacion);
                echo "<h3>Resultado:".htmlspecialchars((string)$resultado,ENT_QUOTES,"UTF-8")."</h3>";
            }
        ?>

    </body>
</html>
