<?php
    // Create an array of favorite movies
    $movies = [
        "The Shawshank Redemption",
        "Inception",
        "The Dark Knight",
        "Interstellar",
        "Parasite"
    ];

    // Use foreach loop to iterate and print each movie
    foreach ($movies as $index => $movie) {
        // Add 1 to $index because arrays are 0-indexed
        echo ($index + 1) . ". " . $movie . "\n";
    }

