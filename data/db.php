<?php
require_once __DIR__ . "/../Modals/Production.php";

$harry_potter = new Production('Harry Potter e la pietra filosofare', 'italiano', 8);
$il_gladiatore = new Production('Il Gladiatore', 'inglese', 9);
$the_best = new Production('Vieni avanti cretino', 'italiano', 10);


$movies = [$harry_potter, $il_gladiatore, $the_best];