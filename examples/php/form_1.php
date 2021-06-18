<?php
// define variables and set to empty values
$name = "";
$surname = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $surname = $_POST["surname"];

  if($name == "" || $surname == "")
  {
  	echo "You should provide your name and your surname";
  }
  else
  {  	
  	echo "Hi $name $surname!";
  }

}
else
{
	echo "Sorry the only accepted method is POST!";
}

?>