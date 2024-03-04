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
    <td>
        <?= $movie->genre->getGenre() ?>
    </td>
    <td>
        <?= $movie->genre->description ?>
    </td>
</tr>