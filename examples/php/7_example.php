<?php

// Associative array
$cars = array("Volvo" => 50000, "BMW" => 60000, "Toyota" => 30000, "Fiat" => 15000, "Skoda"=> 250000, "Tesla" => 40000); 

echo "<h3>Looping the cars array using the for loop</h3>";

echo "numero di elementi di \$cars: ".count($cars)."<br><br>";

echo "<hr/>"; 

echo"<em>Unordered list</em>";

echo "<ul>";
// For-loop using array_keys() to get the keys of the associative array
// Print an unordered list of car brands and prices
for ($i=0; $i < count(array_keys($cars)); $i++) { 
		$car_brand = array_keys($cars)[$i];
		$price = $cars[$car_brand];
		echo "<li> {$car_brand}: $price \$ </li>";
}

echo "</ul>";

echo "<br/><hr/>"; 

echo"<em>Ordered list</em>";

echo "<ol>";
// For-loop using array_keys() to get the keys of the associative array
// Print an ordered list of car brands and prices
for ($i=0; $i < count(array_keys($cars)); $i++) {
		$car_brand = array_keys($cars)[$i];
		$price = $cars[$car_brand];
		echo "<li> {$car_brand}: $price \$ </li>";
}

echo "</ol>";

echo "<br/><hr/>"; 

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
