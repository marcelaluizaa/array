<?php 
 
 $pessoa1 = array () ;
 $pessoa2 = array () ;
 $pessoa3 = array () ;
 $pessoa4 = array () ;
 
 $pessoa1[0][0][0][1][1][0] = "Maria";
 $pessoa1[0][0][0][1][1][1] = "16 ";
 $pessoa1[0][0][0][1][1][2] = "Ivaiporã";

 

 $pessoa2[0][0][0][1][1][0] = "José";
 $pessoa2[0][0][0][1][1][1] = "11 ";
 $pessoa2[0][0][0][1][1][2] = "Curitiba";

 
 $pessoa3[0][0][0][1][1][0] = "Matheus";
 $pessoa3[0][0][0][1][1][1] = "15 anos";
 $pessoa3[0][0][0][1][1][2] = "Curitiba"; 

 
 
 $pessoa4[0][0][0][1][1][0] = "Letícia";
 $pessoa4[0][0][0][1][1][1] = "15 anos";
 $pessoa4[0][0][0][1][1][2] = "Ivaiporã"; 

 echo  $pessoa1[0][0][0][1][1][0] . " tem " .  $pessoa1[0][0][0][1][1][1] . "anos";
echo "<br>";

 echo  $pessoa2[0][0][0][1][1][0] . " tem " .  $pessoa2[0][0][0][1][1][1] . "anos";
?>