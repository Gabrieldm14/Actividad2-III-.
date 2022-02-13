<!DOCTYPE html>
<html>
<body>

<body>
    <?php 

    $temperaturas = [];

        for($x=0; $x<10;$x++){

            $temperaturas[$x] = rand(-5,50);
          
            echo "Fuerteventura tiene una temperatura de " . $x . " a " . $temperaturas[$x];
            echo "<br>";
          
        }


    ?>

</body>
</html>