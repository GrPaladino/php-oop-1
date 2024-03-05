<?php

class Production
{
    public $title;
    public $language;
    public $vote;

    public $genres;


    public function __construct(
        string $title,
        string $language,
        int $vote,
        array $genres,
    ) {
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
        $this->genres = $genres;
    }

    public function getTitle()
    {
        return $this->title;
    }
}