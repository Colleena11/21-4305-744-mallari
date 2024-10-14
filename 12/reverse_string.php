<?php
    // Create an array of favorite movies
    $movies = [
        "No More Bets",
        "The Shack",
        "The Deliverance",
        "Snowfall",
        "Breaking Bad"
    ];

    // Use foreach loop to iterate and print each movie
    foreach ($movies as $index => $movie) {
        // Add 1 to $index because arrays are 0-indexed
        echo ($index + 1) . ". " . $movie . "\n";
    }

