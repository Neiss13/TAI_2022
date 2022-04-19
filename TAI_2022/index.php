<?php
include "database/bd.php"
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
    <?php
    $objDB = new DB();
    $objDB->connect();
    $res = $objDB->select();
    foreach ($res as $item) {
        echo "ID" . $item["id"] . "Nome: " . $item["nome"] . "<br>";
    }
    if(!empty($_POST)){
        echo "Salvar!";
        var_dump($_POST);
        $objBD->inserir($_POST);
    }
    ?>

    <form action="index.php" method="post">
        <label>Nome</label>
        <input type="text" name="nome"/><br>

        <label>CPF</label>
        <input type="text" name="cpf"/><br>

        <label>Telefone</label>
        <input type="tel" name="telefone"/><br>

        <input type="submit" value="Salvar">
    </form>
</body>

</html>