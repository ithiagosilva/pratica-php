<?php

    $lojas = [
        'lisboa' => 'lisboa@gmail.com',
        'porto' => 'porto@gmail.com',
        'coimbra' => 'coimbra@gmail.com',
    ];
    if (isset($_REQUEST['cidade'])) {
        $cidade = $_POST['cidade'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex08</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
        <input type="text" name="cidade" id="cidade" placeholder="Insira a cidade">
        <input type="submit" value="Procurar">
    </form>
    <?php if (isset($cidade)) { ?>
        <p><?= isset($lojas[$cidade]) ? $lojas[$cidade] : 'Loja não encontrada'; ?></p>
    <?php } ?>
</body> 
</html>