<?php

$sumapar=0;
$sumaimpar=0;
 for($i=0; $i<=50; $i++){
     if($i % 2 ==0){
         $sumapar += $i;

     }
     else{
         $sumaimpar += $i;

     }
 }
 echo $sumapar . "\n";
 echo $sumaimpar . "\n";


 $i=1;
 $numero=31;
 $repetido=3;
 while($i<$numero){
     $i += $repetido ;

 }
echo $i;