<?php require_once 'data.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1> <?php echo "$productName"; ?></h1>
    <h3> <?php echo "$launch"; ?></h3>
    <form method="POST" action="data.php">
        <label>Quantidade:</label>
        <input type="int" name="Quantidade">
    </form>

    <form method="POST" action="data.php">
    <br> Simulador de frete <br> 
        <label>CEP:</label>
        <input type="int" name="CEP" size="10"> -
        <input type="int" name="Final CEP" size="2" >
        
    </form>
    
</body>
</html> 