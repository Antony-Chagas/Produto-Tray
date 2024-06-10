<?php

require_once 'functions.php';
include("registerProduct.php");


$productId = 1;
$productName = $productName2;

$launch = 'Lançamento';

$value = 1000;

$price = 'por R$ ' . formatTwoDecimalPlaces($value);

$price2 = 'ou 12x de R$ ' . formatTwoDecimalPlaces(($value * 1.12) / 12) . ' com juros Cartão - Vindi';



$formsOfpaagmwento = ' + Ver todas as formas de pagamento';
$addToList = 'Adicioar à lista';




