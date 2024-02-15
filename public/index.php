<?php require_once 'data.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
    <h1> <?php echo "$productName"; ?></h1>

    <div id="cotainerA">
     <img src="img/anilha.png">  
    </div>

    <div id="cotainerB">
    <h3> <?php echo "$launch"; ?></h3>
    <h3> <?php echo "$price"; ?></h3>
    <h3> <?php echo "$price2"; ?></h5>
    <h5> <?php echo "$formsOfpaagmwento"; ?></h5>

    <div id="cotainerC">
    <form method="POST" action="data.php">
        <label>Quantidade:</label>
        <input type="int" name="Quantidade">
        <input type="submit" value="Comprar"
    </form>
    </div>

    <div>

    </div>
    <form method="POST" action="data.php">
    <br> Simulador de frete <br> 
        <label>CEP:</label>
        <input type="int" name="CEP" size="10"> -
        <input type="int" name="Final CEP" size="2" >
        <input type="submit" value="Calcular frete"
    </form>
    </div>
    
    

    
    
    
</body>
</html> 