<?php

require_once __DIR__ . "/Production.php";
class Movie extends Production
{
    public $profit;
    public $duration;

    public function __construct(
        string $title,
        string $language,
        int $vote,
        Genre $genre,
        $profit,
        $duration
    ) {
        parent::__construct($title, $language, $vote, $genre);

        $this->profit = $profit;
        $this->duration = $duration;
    }
}