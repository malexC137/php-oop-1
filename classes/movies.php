<?php

class Movie {
    public $title;
    public $year;
    public $director; 
    public $genre;
    public $country = "US";
    public $language = "english";
    public $age;

    function __construct($movTitle, $movYear, $movDirector, $movGenre, $movLanguage = NULL) {
        $this->title = $movTitle;
        $this->year = $movYear;
        $this->director = $movDirector;
        $this->genre = $movGenre;
        $this->language = isset($movLanguage) ? $movLanguage : $this->language;
    }

    public function getTitleYearDirector() {
        return $this->director . " presents: " . $this->title . " - " . $this->year;
    }

    public function getMovieAge() {
        return $this->age = "Released " . (date("Y") - $this->year) . " years ago";
    }
    
    public function renderMovie() {
        echo "<h1>" . $this->getTitleYearDirector() . "</h1>";
        echo "<p>Genre: " . $this->genre . "</p>";
        echo "<p>Country: " . $this->country . "</p>";
        echo "<p>Language: " . $this->language . "</p>";
        echo "<p>" . $this->age . "</p>";
    }

}