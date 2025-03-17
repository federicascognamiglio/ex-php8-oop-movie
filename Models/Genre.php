<?php

    class Genre {

        // Definisco gli attributi della classe
        public $genre;

        // Definisco il costruttore della classe
        public function __construct($_genre) {
            $this->$_genre;
        }

        // Definisco i metodi della classe
        public function getGenre() {
            return $this->genre;
        }
    }

?>