<?php

// Traits
require_once '/traits/HasDirector.php';

// Classes
require_once '/classes/Genre.php';
require_once '/classes/Movie.php';

// Data
require_once '/db.php';

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