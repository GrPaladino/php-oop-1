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
        <?= $production->genre->getGenre() ?>
    </td>
    <td>
        <?= $production->genre->description ?>
    </td>
    <?php if ($production instanceof Movie): ?>
        <td>
            <?= $production->profit ?>
        </td>
        <td>
            <?= $production->duration ?>
        </td>
    <?php endif; ?>

    <?php if ($production instanceof SerieTv): ?>
        <td>
            <?= $production->seasons ?>
        </td>
    <?php endif; ?>
</tr>