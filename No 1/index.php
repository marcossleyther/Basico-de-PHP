<?php

 //tipos de variables
 $entero = 25;
 $cadena = 'Marcos Sleyther';
 $flotante = 32.325;
 $caracter = 'a';
 $booleano = true;
 $arreglo = array("lunes", "martes", "miercoles");
 $nulo = null;

 //Para imprimir
echo "Numero entero: " . $entero ."<br>";
echo "Cadena de texto: " . $cadena ."<br>";
echo "Cadena con decimal: " . $flotante ."<br>";
echo "Un simple caracter: " . $caracter ."<br>";
echo "Tipo booleano true: " . $booleano ."<br>";
print_r($arreglo);
echo"<br>El valor 0 del arreglo es: " . $arreglo[0];
echo "<br>Valor nulo: " . $nulo ."<br>";


?>