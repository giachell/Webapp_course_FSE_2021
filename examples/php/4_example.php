<?php

$title = "<h1> Conditional statements (if / else) </h1>"; // HTML string 

$a = 5; // first number
$b = 5; // second number

echo $title;
echo "a: $a; b: $b <br/><br/>";

if ($a > $b)
{
	echo "a e` maggiore di b";
}
else if ($a == $b)
{
	echo "a e` uguale a b";
}
else
{
	echo "a e` minore di b";
}
?> 