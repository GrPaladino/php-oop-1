<?php

class Production
{
    public $title;
    public $language;
    public $vote;


    public function __construct(
        string $title,
        string $language,
        int $vote
    ) {
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
    }

    public function getTitle()
    {
        return $this->title;
    }
}
;

$harry_potter = new Production('Harry Potter e la pietra filosofare', 'italiano', 8);
$il_gladiatore = new Production('Il Gladiatore', 'inglese', 9);
$the_best = new Production('Vieni avanti cretino', 'italiano', 10);

?>