<?php

$title = "<h1> Arrays </h1>"; // HTML string 

$cars = array("Volvo", "BMW", "Toyota"); 

echo "<p>I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2]."</p>";
echo "<p>I like  {$cars[0]}, {$cars[1]} and {$cars[2]}</p>";


echo "<h3>Looping the cars array using the for loop</h3>";

for ($i=0; $i <= count($cars); $i++) {
	if ($i == 0)
	{
		echo "I like : {$cars[$i]}, ";
	}
	else if ($i < (count($cars) - 1))
	{
		echo "{$cars[$i]}, ";
	} 
	else
	{
		echo "{$cars[$i]}";
	}
	
}

?>  
