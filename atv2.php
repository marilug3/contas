<?php
 #ATIVIDADE 2 SOBRE CONSTANTE PI
 echo "<h3> ATIVIDADE 2 <br>
 SOBRE CONSTANTE PI </h3>";

 $pi = 3.141592;
 $raio = 9;

$area = 4*$pi*pow($raio, 2);
$volume = (4/3)* $pi*pow($raio, 3);

echo "Raio da esfera: ".$raio."<br>".
     "Área da esfera: ".$area." cm²"."<br>".
     "Volume da esfera: ".$volume." cm²"."<br>";
 ?>