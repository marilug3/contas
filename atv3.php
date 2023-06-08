<?php
 #ATIVIDADE 3 SOBRE IMC
 echo "<h3> ATIVIDADE 3 SOBRE IMC </h3>";

 $peso = 48; 
 $altura = 1.55; 
 $imc = $peso/($altura*$altura);
 
 echo "Peso: ".$peso." kg"."<br>".
      "Altura: ".$altura." metros"."<br>".
      "IMC: ".$imc."<br>";
 ?>