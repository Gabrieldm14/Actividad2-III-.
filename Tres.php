<!DOCTYPE html>
<html>
<body>

<?php 

$temperaturas = [];

    for($i=0; $i<10;$i++){

        $temperaturas[$i] = rand(-5,50);
      
        echo "Fuerteventura tiene una temperatura de " . $i . " a " . $temperaturas[$i];
        echo "<br>";
      
    }

  
    echo "<br>";
    echo "De menor a mayor:";
    echo "<br>";
    sort($temperaturas);
    $clength =count($temperaturas);

        for($i=0;$i<$clength;$i++){

            echo $temperaturas[$i];
            echo "<br>";
        }


   
     echo "<br>";
     echo "De mayor a menor:";
     echo "<br>";
     rsort($temperaturas);

         for($i=0;$i<$clength;$i++){

             echo $temperaturas[$i];
             echo "<br>";
         }
?>
</body>
</html>
