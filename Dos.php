<!DOCTYPE html>
<html>
<body>

<?php 

    $temperaturas = [];

        for($i=0; $i<10;$i++){

            $temperaturas[$i] = rand(-5,50);
          
            echo "la temperatura de " . $i . " es " . $temperaturas[$i];
            echo "<br>";
          
        }

       // var_dump($temperaturas);
        echo "<br>";
        echo "de menor a mayor";
        echo "<br>";
        sort($temperaturas);
        $clength =count($temperaturas);

            for($i=0;$i<$clength;$i++){

                echo $temperaturas[$i];
                echo "<br>";
            }


         // var_dump($temperaturas);
         echo "<br>";
         echo "de mayor a menor";
         echo "<br>";
         rsort($temperaturas);
    
             for($i=0;$i<$clength;$i++){
 
                 echo $temperaturas[$i];
                 echo "<br>";
             }
    ?>
</body>
</html>