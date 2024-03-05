<?php

require_once __DIR__ . "/Production.php";

class SerieTv extends Production
{
    public $seasons;

    public function __construct(
        string $title,
        string $language,
        int $vote,
        array $genres,
        $seasons
    ) {
        parent::__construct($title, $language, $vote, $genres);

        $this->seasons = $seasons;
    }
}