<?php

$array_numeri = array(1, 1, 2, 3, 5, 8, 13, 21, 34);


function somma_n_numeri($array_numeri)
{
	$somma = 0;
	foreach ($array_numeri as $key => $value) {
		$somma += $value;
	}
	return $somma;
}

$somma_1 = somma_n_numeri($array_numeri);
$somma_2 = array_sum($array_numeri);


echo"<h3> Funzioni in PHP </h3>";

echo"La somma di tutti i numeri 
	presenti nell'array e`: $somma_1<br/><br/>";

echo"La somma di tutti i numeri 
	presenti nell'array e`: $somma_2<br/><br/>";

?>  
