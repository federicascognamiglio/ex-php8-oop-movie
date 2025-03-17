<?php

    class Movie {

        // Definisco gli attributi della classe
        public $title;
        public $director;
        public $year;
        public $url_poster;
        public $genres;
        public $plot;

        // Definisco il costruttore della classe
        public function __construct($_title, $_director, $_year, $_url_poster, $_genres, $_plot) {

            // Controllo che ogni elemento dell'array sia un'istanza di Genre
            foreach ($_genres as $genre) {
                if (!$genre instanceof Genre) {
                throw new InvalidArgumentException("Tutti gli elementi devono essere istanze della classe Genre.");
                }
            }

            // Assegno i valori passati come argomento al costruttore agli attributi della classe
            $this->title = $_title;
            $this->director = $_director;
            $this->year = $_year;
            $this->url_poster = $_url_poster;
            $this->genres = $_genres;
            $this->plot = $_plot;
        }

        // Definisco i metodi della classe
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
            return $this->genres;
        }

        public function getPlot() {
            return $this->plot;
        }

        public function addGenre(Genre $genre) {
            $this->genres[] = $genre;
        }

    }

?>