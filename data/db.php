<?php
require_once __DIR__ . "/../Modals/Production.php";
require_once __DIR__ . "/../Modals/Genre.php";
require_once __DIR__ . "/../Modals/Movie.php";
require_once __DIR__ . "/../Modals/SerieTv.php";


$productions = [
    new Movie(
        'Harry Potter e la pietra filosofare',
        'italiano',
        8,
        new Genre('Fantasy', 'Lorem ipsum ........'),
        1.874,
        120,
    ),

    new Movie(
        'Il Gladiatore',
        'inglese',
        9,
        new Genre('History', 'Lorem ipsum dolorae ...............'),
        109.737,
        240,
    ),

    new Movie(
        'Vieni avanti cretino',
        'italiano',
        10,
        new Genre('Comic', 'Il mitico Lino Banfi........'),
        6.331,
        200
    ),

    new SerieTv(
        'Breaking bads',
        'inglese',
        8,
        new Genre('Drama', 'Qualcosa...'),
        12

    ),
    new SerieTv(
        'Scrubs',
        'inglese',
        9,
        new Genre('Thriller', 'Qualcosa...'),
        4

    ),
    new SerieTv(
        'Lost',
        'inglese',
        5,
        new Genre('Drama', 'Qualcosa...'),
        27

    )
];
