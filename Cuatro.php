<!DOCTYPE html>
<html>
<body>

<?php
$edad = array(
				"(Antonio)" => "31",
				"(María)" => "28",
				"(Juan)" => "29",
				"(Pepe)" => "27"
);
//      Ascendente
echo "<p>Valor ascendente:";
echo "<br><br>";

asort($edad);

foreach ($edad as $x => $x_valor)
{

				echo "Clave= " . $x . " Valor = " . $x_valor;
				echo "<br><br>";
}

echo "<p>Clave ascendente:";
echo "<br><br>";
ksort($edad);

foreach ($edad as $x => $x_valor)
{

				echo "Clave= " . $x . " Valor = " . $x_valor;
				echo "<br><br>";
}
//       Descendente
echo "<p>Valor descendente:";
echo "<br><br>";
arsort($edad);

foreach ($edad as $x => $x_valor)
{

				echo "Clave= " . $x . " Valor = " . $x_valor;
				echo "<br><br>";
}

echo "<p>Clave descendente:";
echo "<br><br>";
krsort($edad);

foreach ($edad as $x => $x_valor)
{

				echo "Clave= " . $x . " Valor = " . $x_valor;
				echo "<br><br>";
}
?>
</body>
</html>
