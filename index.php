<?php
require_once __DIR__ . '/classes/Computer.php';

$computers = [
    new Computer("HP", "S123", "intel i7", "Win11", 8, "Gtx3080", 500, 1500),
    new Computer("Dell", "XPS15", "intel i9", "Win10", 16, "RTX2070", 500, 2200),
    new Computer("Apple", "Mac Book Pro", "M1 Pro", "MacOs Monterey", 16, "M1 Pro", 500, 2800),
    new Computer("Acer", "E-123", "intel i5", "Win8", 4, "Si", 500, 499)
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computers</title>
</head>
<body>
    <h1>Comptuer Store</h1>
    <?php foreach($computers as $computer) { ?>
        <div>
            <h3><?php echo $computer->getNomeCompleto(); ?></h3>
            <ul>
                <li>Processore: <?php echo $computer->processore ?></li>
                <li>Sistema Operativo: <?php echo $computer->sistemaOperativo ?></li>
                <li>Ram: <?php echo $computer->ram ?></li>
                <li>Prezzo: <?php echo $computer->getPrezzo() ?></li>
            </ul>
        </div>
    <?php } ?>
</body>
</html>