<?php
    $produtos = ['arroz','batata','laranja'];
    arsort($produtos);
    array_push($produtos, 'maça', 'pera');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex06</title>
</head>
<body>
    <?php foreach ($produtos as $produto) {?>
    <ul>
        <li><?= $produto ?></li>
    </ul>
    <?php }?>
</body>
</html>