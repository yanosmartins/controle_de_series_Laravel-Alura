<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Séries</title>
</head>

<body>
    <h1>Séries</h1>
    <ul>
        <?php foreach ($series as $serie) : ?>
            <li> <?= $serie ?></li>
        <?php endforeach ?>
    </ul>
</body>

</html>