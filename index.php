<?php
require_once __DIR__ . "/data/db.php";


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once __DIR__ . "/partials/head.php" ?>;
</head>

<body>
    <div class="container mt-5">
        <table class="table">
            <thead>
                <th>Titolo</th>
                <th>Lingua</th>
                <th>Voto</th>
                <th>Genere</th>
                <th>Descrizione</th>
                <th>Incasso</th>
                <th>Durata</th>
                <th>Stagioni</th>
            </thead>
            <tbody>
                <?php foreach ($productions as $production): ?>
                    <?php include __DIR__ . "/partials/table-row.php" ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>