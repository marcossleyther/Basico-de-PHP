<?php

$cadena = "Con fuerza, vamos para adelante";
echo $cadena;
echo "<br>";

//Conocer el tamaño del string
echo "Tiene " . strlen($cadena) . " caracteres";
echo "<br>";

//Conocer el numero de palabras
echo "Tiene " . str_word_count($cadena) . " palabras";
echo "<br>";

//Imprime de reversa la cadena
echo "De reversa: " . strrev($cadena) ;
echo "<br>";    

//Buscar una palabra dentro de la cadena
echo "Bucar palabra 'vamos' esta en posicion: " . strpos($cadena, "vamos"). ", inicia desde uno" ;
echo "<br>";

//Sustituir texto en la cadena
echo "Reemplazar palabra 'seguiremos' por 'vamos': " . str_replace("vamos", "seguiremos", $cadena);
echo "<br>";

//Covertir todo a minusculas
echo "Todo en minusculas: " . strtolower($cadena);
echo "<br>";

//Covertir todo a MAYUSCULAS
echo "Todo en MAYUSCULAS: " . strtoupper($cadena);
echo "<br>";

//Comparar cadenas
echo "Compara con 0 para verdadero y -1 falso: " . strcmp("Con fuerza, vamos para adelante",$cadena);
echo "<br>";

//Imprime variables con posiciones
echo"Posicion 5 a 6: " . substr($cadena, 3,5);
echo "<br>";

//Elimina los espacios en blanco
echo trim("   Muchos          espacios      en       blanco:      ");
echo "<br>";

 
?>