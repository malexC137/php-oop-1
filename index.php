<?php

include  "./classes/movies.php";

//Assegnazione valori tramite costruttore
$movie1 = new Movie("The Goodfellas", 1990, "Martin Scorsese", "Gangsta", "italian-american");
$movie2 = new Movie("The Snach", 2000, "Guy Ritchie", "Comedy/Noir");
$movie3 = new Movie("The Gladiator", 2000, "Ridley Scott", "Dramatic");
$movie4 = new Movie("Pulp Fiction", 1994, "Quentin Tarantino", "Gangsta");
$movie5 = new Movie("Lucky number Slevin", 2006, "Paul McGuigan", "Noir");

$movie1->getMovieAge();
$movie1->renderMovie();

$movie2->getMovieAge();
$movie2->renderMovie();

$movie3->getMovieAge();
$movie3->renderMovie();

$movie4->getMovieAge();
$movie4->renderMovie();

$movie5->getMovieAge();
$movie5->renderMovie();



