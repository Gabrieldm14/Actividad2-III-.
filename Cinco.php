<!DOCTYPE html>
<html>
<body>

<?php

$pais = array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");

//Clave ascendente.

echo "<br>";
ksort($pais);
foreach($pais as $clave=>$clave_valor)
   {
    
//Vlores en mayúsculas

    $paises = strtoupper($clave);
    $capital = strtoupper($clave_valor);
   echo "La Capital de " . $paises . " es " . $capital.".";
   echo "<br><br>";
   }

?>

</body>
</html>