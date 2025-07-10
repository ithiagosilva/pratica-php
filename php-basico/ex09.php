<?php

    $mensagem_erro = 'Não foi possível fazer a requisição';
    $mensagem = '';

    $css = '';
    if (empty($mensagem_erro)) {
        $mensagem = "Sucesso";
        $css = 'sucesso';
    } else {
        $mensagem = $mensagem_erro;
        $css = 'erro';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex08</title>
    <style>
        .erro {
            color: white;
            background-color: darkred;
        }
        .sucesso {
            color: white;
            background-color: darkgreen;
        }
    </style>
</head>
<body>
    <h1 class="<?= $css ?>"><?= $mensagem ?></h1>
</body> 
</html>