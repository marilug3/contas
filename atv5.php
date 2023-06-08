<?php
 #ATIVIDADE 5 SOBRE NÚMEROS PARES
 echo "<h3> ATIVIDADE 5 <br> 
 SOBRE A SOMA DOS NÚMEROS PARES </h3>";

$soma = 0;
for ($n = 10; $n <= 500; $n++) {
    if ($n % 2 === 0) {
        $soma += $n;
    }
}
echo "A soma dos números pares de 10 a 500 é: ".$soma;
 ?>