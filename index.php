<?php
require_once __DIR__ . "/data/db.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>OOP</title>
</head>

<body>
    <div class="container mt-5">
        <table class="table">
            <thead>
                <th>Titolo</th>
                <th>Lingua</th>
                <th>Voto</th>
            </thead>
            <tbody>
                <?php foreach ($movies as $movie): ?>
                    <tr>
                        <td>
                            <?= $movie->getTitle() ?>
                        </td>
                        <td>
                            <?= $movie->language ?>
                        </td>
                        <td>
                            <?= $movie->vote ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>