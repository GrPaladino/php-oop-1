<tr>
    <td>
        <?= $production->getTitle() ?>
    </td>
    <td>
        <?= $production->language ?>
    </td>
    <td>
        <?= $production->vote ?>
    </td>
    <td>
        <?php foreach ($production->genres as $genre): ?>
            <?= $genre->getGenre() ?> <br />
        <?php endforeach; ?>
    </td>
    <td>
        <?php foreach ($production->genres as $genre): ?>
            <?= $genre->description ?>
        <?php endforeach; ?>
    </td>

    <td>
        <?= isset($production->profit) ? $production->profit : ' ' ?>
    </td>

    <td>
        <?= isset($production->duration) ? $production->duration : ' ' ?>
    </td>

    <td>
        <?= isset($production->seasons) ? $production->seasons : ' ' ?>
    </td>


</tr>