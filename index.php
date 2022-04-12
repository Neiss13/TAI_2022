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
    foreach ($res as $item){
        echo "ID".$item["id"]. "Nome: ".$item["nome"]. "<br>";
    }
    ?>
</body>
</html>