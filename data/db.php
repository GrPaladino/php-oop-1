<?php
require_once __DIR__ . "/../Modals/Production.php";
require_once __DIR__ . "/../Modals/Genre.php";

$harry_potter = new Production(
    'Harry Potter e la pietra filosofare',
    'italiano',
    8,
    new Genre('Fantasy', 'Lorem ipsum ........')
);
$il_gladiatore = new Production(
    'Il Gladiatore',
    'inglese',
    9,
    new Genre('History', 'Lorem ipsum dolorae ...............')
);
$the_best = new Production(
    'Vieni avanti cretino',
    'italiano',
    10,
    new Genre('Comic', 'Il mitico Lino Banfi........')
);


$movies = [$harry_potter, $il_gladiatore, $the_best];