<?php

class Movie {

    public $title;
    public $director;
    public $year;
    public $url_poster;
    public $genre;
    public $plot;

    public function __construct($_title, $_director, $_year, $_url_poster, $_genre, $_plot) {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->url_poster = $_url_poster;
        $this->genre = $_genre;
        $this->plot = $_plot;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDirector() {
        return $this->director;
    }

    public function getYear() {
        return $this->year;
    }

    public function getUrlPoster() {
        return $this->url_poster;
    }

    public function getGenre() {
        return $this->genre;
    }

    public function getPlot() {
        return $this->plot;
    }

}

$movie1 = new Movie('The Dark Knight', 'Christopher Nolan', 2008, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/qJ2tW6WMUDux911r6m7haRef0WH.jpg', 'Action, Crime, Drama', 'When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.');
$movie2 = new Movie('Inception', 'Christopher Nolan', 2010, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/9gk7adHYeDvHkCSEqAvQNLV5Uge.jpg', 'Action, Adventure, Sci-Fi', 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.');
$movie3 = new Movie('Interstellar', 'Christopher Nolan', 2014, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/nBNZadXqJSdt05SHLqgT0HuC5Gm.jpg', 'Adventure, Drama, Sci-Fi', 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    
</body>
</html>