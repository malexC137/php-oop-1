<?php

include  "./classes/movies.php";

//Assegnazione valori tramite costruttore
$movie1 = new Movie("The Goodfellas", 1990, "Martin Scorsese", "Gangsta", "italian-american");
$movie2 = new Movie("The Sntach", 2000, "Guy Ritchie", "Commedia/Noir", "En");

var_dump($movie1);
var_dump($movie2);

var_dump($movie1->getMovieAge());
var_dump($movie2->getMovieAge());



