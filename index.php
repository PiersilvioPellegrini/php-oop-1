<?php

require_once "./classes/movie.php";

// creo prima istanza con il costruttore
$myFirstMovie = new Movie("Ritorno al Futuro","future",150,"Robert Zemeckis");
// creo seconda istanza con il  costruttore
$mySecondMovie = new Movie("Red Notice","red",180,"Rawson Marshall Thurber");


 // mostro prima istanza
var_dump($myFirstMovie);

// setto un nuvo dato all'interno della prima istanza
$myFirstMovie -> setDuration(140);
// mostro il nuovo 
var_dump($myFirstMovie);
// mostro seconda istanza
var_dump($mySecondMovie);


// mostro i nomi completi
echo  " <br>  ". "Nome completo primo film" . " <br>  ". $myFirstMovie -> getFullName();

echo  " <br>  ". "Nome completo secondo film" . " <br>  ". $mySecondMovie -> getFullName();

?>