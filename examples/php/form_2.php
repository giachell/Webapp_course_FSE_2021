<?php
// define variables and set to empty values
$name = $surname = $dataNascita = $laureato = "";
$titoli = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if(isset($_POST["name"]) && isset($_POST["surname"]) 
    && isset($_POST["dataNascita"]) && isset($_POST["laureato"]) 
    && isset($_POST["titoli"])){

    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $dataNascita = $_POST["dataNascita"];
    $laureato = $_POST["laureato"];
    $titoli = $_POST["titoli"];

    $laureato_str = "you have a degree!";
    $titoli_str = "Your academic titles are: ";

    if($laureato == "no")
    {
      $laureato_str = "you don't have a degree!";
      $titoli_str = "You don't have any academic title";
    }
    else
    {
      foreach ($titoli as $key => $value) {
        $titoli_str.= $value.", ";
      }
    }

    echo "Hi $name $surname!<br/> Your birthday is $dataNascita and $laureato_str <br/><br/>";
    echo "$titoli_str";
  }

  else
  {
  	echo "You should fill all the form information.";
  }

}
else
{
	echo "Sorry the only accepted method is POST!";
}

?>