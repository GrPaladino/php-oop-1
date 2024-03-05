<?php

require_once __DIR__ . "/Production.php";

class SerieTv extends Production
{
    public $seasons;

    public function __construct(
        string $title,
        string $language,
        int $vote,
        Genre $genre,
        $seasons
    ) {
        parent::__construct($title, $language, $vote, $genre);

        $this->seasons = $seasons;
    }
}