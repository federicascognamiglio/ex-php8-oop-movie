<?php

    // Creao istanze della classe Genre
    $action_genre = new Genre('Action');
    $crime_genre = new Genre('Crime');
    $drama_genre = new Genre('Drama');
    $adventure_genre = new Genre('Adventure');
    $sciFi_genre = new Genre('Sci-Fi');

    // Creo istanze della classe Movie
    $movies = [
        new Movie('The Dark Knight', 2008, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/qJ2tW6WMUDux911r6m7haRef0WH.jpg', [$action_genre, $crime_genre, $drama_genre], 'When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.'),
        new Movie('Inception', 2010, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/9gk7adHYeDvHkCSEqAvQNLV5Uge.jpg', [$action_genre, $action_genre, $sciFi_genre], 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.'),
        new Movie('Interstellar', 2014, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/nBNZadXqJSdt05SHLqgT0HuC5Gm.jpg', [$adventure_genre, $drama_genre, $sciFi_genre], 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.'),
    ];

    // Assegno un regista ai film
    $movies[0]->setDirector('Christopher Nolan');
    $movie[1]->setDirector('Christopher Nolan');
    $movie[2]->setDirector('Christopher Nolan');

?> 