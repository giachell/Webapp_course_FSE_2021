<?php

// Associative array
$cars = array("Volvo" => 50000, "BMW" => 60000,
			  "Toyota" => 30000, "Fiat" => 15000,
			  "Skoda"=> 250000, "Tesla" => 40000); 

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

?>  
