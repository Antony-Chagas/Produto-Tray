<?php require_once 'data.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
    <input type="hidden" name="productId" value=<?= "$productId"; ?>>
    <h2 id="productName"> <?= "$productName"; ?></h2>

    <div id="cotainerA">
     <img src="img/anilha.png">  
    </div>

    <div id="cotainerB">

    <div id="cotainerB1" >
            <span id="pointRight">•</span>      
            Lançamento          
            <span id="pointLeft">•</span>
       </div>             


    <div id="cotainerB5">
    <h3 id="price"> <?= "$price"; ?></h3>
    <h5 id="price2"> <?= "$price2"; ?></h5>
    <a href="" rel="nofollow" id="formsOfpaagmwento" class="color color-tone-6"><?= "$formsOfpaagmwento"; ?> </a>
    <br><br><br>
    </div>
   

    <div id="cotainerB3">
    <form method="POST" action="data.php">
        <label id="amount" >Quantidade:  </label>
        <input id="inputAmount" type="int" name="Quantidade" size="1" value="1"> 
        <span id="totalStock"> / 9999</span>
        <a href="#">	
		<img id="purchase" src="img/comprar.png" alt="Iniciar Simulado"></a>
        

        <br> <br>

        <div id="list">
         <a id="AddList" href="#"> Adicionar à Lista </a>
        </div>
        
        
    </form>
    </div>

        <div id="cotainerB4">
          <form method="POST" action="data.php">
            <br> <h4>Simulador de Frete</h4> <br> 
             <label id="cep">CEP:</label>
             <input  id="startCep" name="CEP" size="10"> -
             <input id="endCep" type="int" name="Final CEP" size="2" >
               
            <input id="CalculateShipping"  type="submit" value="CALCULAR FRETE">
            <br> <h3> </h3>
        </div>
    </div>
    
   

    
</body>
</html> 