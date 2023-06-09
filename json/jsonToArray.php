<!-- Loading -->
<?php

$jsonFilme = json_decode('{"title":"Pokemon","sinopse":"Ash catch Pikachu","year":2023,"hours":["16:00","20:00","22:00"]}');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <?php if ($jsonFilme->title != ""): ?>
            Movie:
            <?= $jsonFilme->title ?>
        <?php endif; ?>
    </h1>

    <h2>
        <?php if ($jsonFilme->sinopse != ""): ?>
            Sinopse:
            <?= $jsonFilme->sinopse ?>
        <?php endif; ?>
    </h2>

    <h2>
        <?php if ($jsonFilme->year != ""): ?>
            Year:
            <?= $jsonFilme->year ?>
        <?php endif; ?>
    </h2>

    <h2>Hours:
        <?php if ($jsonFilme->hours != ""): ?>
            <ul>
                <?php foreach ($jsonFilme->hours as $hours): ?>
                    <li>
                        <?= $hours ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </h2>
</body>

</html>