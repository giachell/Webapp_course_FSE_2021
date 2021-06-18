<?php

function somma($x, $y)
{
	$z = $x + $y;
	return $z;
}

function calcolaIVA($importo, $aliquota)
{
	$importo_IVA = ($importo * $aliquota) / 100;
	return $importo_IVA; 
}


function calcolaPrezzoFinale($importo, $aliquota)
{
	$prezzo_finale = somma($importo, calcolaIVA($importo, $aliquota));
	return $prezzo_finale;
}

// Associative array
$cars = array("Volvo" => 50000, "BMW" => 60000, 
			  "Toyota" => 30000, "Fiat" => 15000,
			   "Skoda"=> 250000, "Tesla" => 40000);

$aliquota = 22;

echo "<h3>Looping the cars array using the For-each loop</h3>"; 

echo"<em>Table</em> <br/><br/>";

echo"<table border='1'>";
echo"<tr> <th>Numero di riga</th> <th>Marca</th> <th>Prezzo senza IVA</th> <th>Prezzo con IVA</th></tr>";

$i = 0; // iteration counter

// For-each loop over the $cars associative array
// Print a table of car brands and prices
foreach($cars as $car_brand => $price) {
  if($i % 2 == 0)
		{
			echo "<tr><td> $i </td> 
				  <td> {$car_brand} </td> 
				  <td> {$price} </td>
				  <td> ". calcolaPrezzoFinale($price, $aliquota) ." </td>
				  </tr>";
		}
		else
		{
			echo "<tr style='background-color:#fa1111;'><td> $i </td> 
				  <td> {$car_brand} </td> 
				  <td> {$price} </td>
				  <td> ". calcolaPrezzoFinale($price, $aliquota) ." </td>
				  </tr>";
		}

		$i++;
}

echo"</table>";
?>  
