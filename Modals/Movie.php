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
        array $genres,
        $profit,
        $duration
    ) {
        parent::__construct($title, $language, $vote, $genres);

        $this->profit = $profit;
        $this->duration = $duration;
    }
}