<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produto</title>
</head>
<body>

<h2>Recuperar produto.</h2>

<form action="" method="post">

    Nome do produto:
    <input type="text" name="nome" >
    <input type="submit" value="Enviar" name="enviar">
</form>

<?php
 
 $productName2 ="";

        if(isset($_POST['enviar'])){
            $productName2 = $_POST['nome'];     
        }


?>
</body>
</html>