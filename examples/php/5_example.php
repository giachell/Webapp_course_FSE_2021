<?php

$title = "<h1> Loops (while / for) </h1>"; // HTML string 

$start = 1; // start number
$stop = 10; // stop number
$current = $start;

echo "<p>Print the first 10 numbers using the while loop</p>";
while ($current <= $stop)
{
	echo "Current value: $current<br/>";
	$current = $current + 1;
}

echo "<p>Print the first 10 numbers using the for loop</p>";

for ($current=$start; $current <= $stop; $current++) { 
	echo "Current value: $current<br/>";
}

?>  
