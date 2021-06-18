<?php

// Associative array
$cars = array("Volvo" => 50000, "BMW" => 60000, 
			  "Toyota" => 30000, "Fiat" => 15000,
			   "Skoda"=> 250000, "Tesla" => 40000);

echo "<h3>Looping the cars array using the For-each loop</h3>"; 

echo"<em>Table</em> <br/><br/>";

echo"<table border='1'>";
echo"<tr> <th>Numero di riga</th> <th>Marca</th> <th>Prezzi</th> </tr>";

$i = 0; // iteration counter

// For-each loop over the $cars associative array
// Print a table of car brands and prices
foreach($cars as $car_brand => $price) {
  if($i % 2 == 0)
		{
			echo "<tr><td> $i </td> 
				  <td> {$car_brand} </td> 
				  <td> {$price} </td>
				  </tr>";
		}
		else
		{
			echo "<tr style='background-color:#fa1111;'><td> $i </td> 
				  <td> {$car_brand} </td> 
				  <td> {$price} </td>
				  </tr>";
		}

		$i++;
}

echo"</table>";
?>  
