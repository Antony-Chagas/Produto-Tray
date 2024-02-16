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

    <div id="cotainerB1">
    <img src="img/Lançamento.png">  
    </div>

    <div id="cotainerB5">
    <h3 id="price"> <?php echo "$price"; ?></h3>
    <h4 id="price2"> <?php echo "$price2"; ?></h4>
    <h5 id="formsOfpaagmwento"> <?php echo "$formsOfpaagmwento"; ?></h5>
    </div>
   

    <div id="cotainerB3">
    <form method="POST" action="data.php">
        <label id="Amount" >Quantidade: <br> </label>
        <input type="int" name="Quantidade" size="5">
        <input type="submit" value="Comprar">
        <h3 id="list">Adicionar à Lista</h3>
    </form>
    </div>

        <div id="cotainerB4">
          <form method="POST" action="data.php">
            <br> Simulador de frete <br> 
             <label>CEP:</label>
               <input type="int" name="CEP" size="10"> -
             <input type="int" name="Final CEP" size="2" >
                <input type="submit" value="Calcular frete">
    </div>
        </div>
    <div>
    
    
    
    

    
    
    
</body>
</html> 