<?php
 // GERANDO UM NOVO ARRAY 
 $objArray = [];
 $objArray.push(5);
 $objArray.push(10);
 $objArray.push(15);

 // PERCORRENDO O ARRAY CRIADO
 print "O tamanho do array criado � " . count($objArray) . "<br>";
 print "Os elementos do array s�o: <br>";
 foreach($objArray as $elm => $value) {
   print "Elemento $elm: $value<br>";
 }

 // LIBERANDO O OBJETO ARRAY PARA A COLETA DE LIXO
 unset($objArray);
?>
