<?php

require_once __DIR__."/classes/Movie.php";
$spiderman = new Movie("Spiderman",["action","triler","horor"],2000,"Tom Holland",110);
$spiderman->printMovie();
var_dump($spiderman);

$batman = new Movie("batman",["animation","triler","comedy"],1990,"alibaba",null,"httpsfdf");
$batman->printMovie();

var_dump($batman);

echo "<h1>COUNT</h1>";
var_dump(Movie::getCount());
?>  