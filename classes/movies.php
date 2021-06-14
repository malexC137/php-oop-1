<?php

class Movie {
    public $title;
    public $year;
    public $director; 
    public $genre;
    public $country = "US";
    public $language = "En";
    public $age;

    function __construct($movTitle, $movYear, $movDirector, $movGenre, $movLanguage) {
        $this->title = $movTitle;
        $this->year = $movYear;
        $this->director = $movDirector;
        $this->genre = $movGenre;
        $this->language = $movLanguage;
    }

    public function getTitleYearDirector() {
        return $this->title . " " . $this->year . " " . $this->director;
    }

    public function getMovieAge() {
        return $this->age = date("Y") - $this->year . " years old";
    }
    

}