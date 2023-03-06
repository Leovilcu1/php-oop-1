<?php

require_once __DIR__."/classes/Movie.php";
require_once __DIR__."/classes/Genere.php";

$spiderman = new Movie("Spiderman",[new genere("triler"),new genere("comedy")],2000,"Tom Holland",110);
$spiderman->printMovie();
var_dump($spiderman);

$batman = new Movie("batman",[new genere("wow"),new genere("action")],1990,"alibaba",null,"httpsfdf");
$batman->printMovie();

var_dump($batman);

echo "<h1>COUNT</h1>";
var_dump(Movie::getCount());
?>  