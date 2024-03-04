<?php

class Genre
{
    public $name;
    public $description;

    public function __construct(string $name, string $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function getGenre()
    {
        return $this->name;
    }
}