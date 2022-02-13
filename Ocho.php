<!DOCTYPE html>
<html>
<body>
<h1>Municipios:</h1>
<?php

$equipo_futbol = array
 					(
 					array("La Oliva"),
 					array("Pueto del Rosario"),
 					array("Betancuria"),
                    array("Tuineje"),
                    array("Pajara"),
 					);
 
 foreach($equipo_futbol as $equipo)
 	{
 	echo "Municipio fuerteventura: ";
 	foreach($equipo as $jugador)
 		{
 		echo $jugador ." ";
 		}
 	echo "<br>";
 	}

?>

</body>
</html>