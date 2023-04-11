<?php

class Movie {
    public $title;
    public $studio;
    public $rating;

    public function __construct ($title, $studio, $rating) {
        $this->title = $title;
        $this->rating = $rating;
        $this->studio = $studio;
    }

    public function GetPG($movies) {
        $pg_movies = array();
        foreach ($movies as $movie) {
            if ($movie->rating == "PG") {
                $pg_movies[] = $movie;
            }
        }
        return $pg_movies;
    }
}

$movie = new Movie("Casino Royale", "Eon Productions", "PG-13");

$movies = array(
    new Movie("Casino Royale", "Eon Productions", "PG-13"),
    new Movie("Glass", "Buena Vista International", "PG-13"),
    new Movie("Spider-Man: Into the Spider-Verse", "Columbia Pictures", "PG")
);

$pg_movies = $movie->GetPG($movies);

foreach ($pg_movies as $movie) {
    echo $movie->title . "\n";
}



