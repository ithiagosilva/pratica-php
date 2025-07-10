<?php
if (isset($_POST['nome'])) {
    $nome = ucfirst($_POST['nome']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex07</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
        <input type="text" name="nome" id="nome" placeholder="Insira seu nome">
        <input type="submit" value="Checar">
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] == "POST") {?>
        <?php if ($nome == "Thiago") {?>
            <p>Bem Vindo <?= $nome; ?>.</p>
        <?php } else {?>
            <p>Não reconheço você <?= $nome ?>. Este sistema não foi feito para você.</p>
        <?php } ?> 
    <?php } ?> 
</body>
</html>