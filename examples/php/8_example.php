<?php

function somma($x, $y)
{
	$z = $x + $y;
	return $z;
}

$a = 5;
$b = 3;

$somma = $a + $b;
$somma_2 = somma($a, $b);

echo"<h3> Funzioni in PHP </h3>";

echo"La somma di $a + $b e` pari a <b> $somma </b> <br/>";

echo"Il risultato di somma($a, $b) e` pari a <b> $somma_2 </b><br/>";

?>  
