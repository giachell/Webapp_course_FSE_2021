<?php

$title = "<h1> Arrays </h1>"; // HTML string 

$cars = array("Volvo" => 60000, "BMW" => 50000, "Toyota" => 30000, "Fiat" => 15000, "Skoda"=> 250000);

echo "numero di elementi di \$cars: ".count($cars)."<br>"; 

$a = 10;

//echo "<p>I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2]."</p>";
//echo "<p>I like  {$cars[0]}, {$cars[1]} and {$cars[2]}</p>";


echo "<h3>Looping the cars array using the for loop</h3>";

echo "I like : <br>";

echo "<ul>";

for ($i=0; $i < count($cars); $i++) {
		echo "<li> {$cars[$i]} </li>";
}

echo "</ul>";


echo "<ol>";

for ($i=0; $i < count($cars); $i++) {
		echo "<li> {$cars[$i]} </li>";
}

echo "</ol>";


echo"<table border='1'>";
echo"<tr> <th>Numero di riga</th> <th>Marca</th> <th>Prezzi</th> </tr>";

/*for ($i=0; $i < count($cars); $i++) {

		if($i % 2 == 0)
		{
			echo "<tr><td> $i </td> 
				  <td> {$cars[$i]} </td> 
				  <td> {$cars_prices[$i]} </td>
				  </tr>";
		}
		else
		{
			echo "<tr style='background-color:#fa1111;'><td> $i </td> 
				  <td> {$cars[$i]} </td> 
				  <td> {$cars_prices[$i]} </td>
				  </tr>";
		}
		
}*/

$i = 0;
foreach($cars as $marca => $price) {
  if($i % 2 == 0)
		{
			echo "<tr><td> $i </td> 
				  <td> {$marca} </td> 
				  <td> {$price} </td>
				  </tr>";
		}
		else
		{
			echo "<tr style='background-color:#fa1111;'><td> $i </td> 
				  <td> {$marca} </td> 
				  <td> {$price} </td>
				  </tr>";
		}

		$i++;
}

echo"</table>";
?>  
