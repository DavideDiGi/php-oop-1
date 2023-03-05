<?php

class Movie
{
    public $title;
    public $plot;

    public function __construct($title, $plot)
    {
        $this->title = $title;
        $this->plot = $plot;
    }

    public function showDetails()
    {
        echo "Title:" . " " . $this->title . "<br>" . "Plot:" . " " . $this->plot;
    }
}

echo "<h2>Movies details:</h2>";

$movie = new Movie('The Seven Deadly Sins - Cursed by Light', '"Meliodas and his friends jump back into action when the new era of peace is threatened by a powerful magical alliance that could spell the end for all"');

$movie->showDetails();

echo "<br>";
echo "<br>";

$movie = new Movie('One Piece - Red', '"The Straw Hat Pirates travel to the island of Elegia where a famous singer named Uta will have her debut concert"');

$movie->showDetails();
