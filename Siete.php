<!DOCTYPE html>
<html>
<body>
<h1>Datos localidad:</h1>
<?php

    $nombre = "Antigua (Fuerteventura) <br><br>"; 
    $array = array( $nombre,"Nº", 12,"<br>C.P: ",35638,  " <br>Casa" );
     
    //contar los numeros
    $longitud = count($array);
     
    
    for($i=0; $i<$longitud; $i++)
          {
          //ejecutamos
          echo $array[$i];
         
          }
    
?>

</body>
</html>