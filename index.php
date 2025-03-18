<?php

// Traits
require_once '/traits/HasDirector.php';

// Classes
require_once '/classes/Genre.php';
require_once '/classes/Movie.php';

// Creao istanze della classe Genre
$action_genre = new Genre('Action');
$crime_genre = new Genre('Crime');
$drama_genre = new Genre('Drama');
$adventure_genre = new Genre('Adventure');
$sciFi_genre = new Genre('Sci-Fi');

// Creo istanze della classe Movie
$movie1 = new Movie('The Dark Knight', 2008, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/qJ2tW6WMUDux911r6m7haRef0WH.jpg', [$action_genre, $crime_genre, $drama_genre], 'When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.');
$movie2 = new Movie('Inception', 2010, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/9gk7adHYeDvHkCSEqAvQNLV5Uge.jpg', [$action_genre, $action_genre, $sciFi_genre], 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.');
$movie3 = new Movie('Interstellar', 2014, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/nBNZadXqJSdt05SHLqgT0HuC5Gm.jpg', [$adventure_genre, $drama_genre, $sciFi_genre], 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.');

// Assegno un regista ai film
$movie1->setDirector('Christopher Nolan');
$movie2->setDirector('Christopher Nolan');
$movie3->setDirector('Christopher Nolan');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">BOOLFLIX</a>
        </div>
    </nav>
    <!-- /Navbar -->

    <!-- Main -->
    <main>
        <div class="conatiner">
            <h1 class="text-center mt-5">MY MOVIES</h1>
        </div>
    </main>
    <!-- /Main -->

</body>

</html>