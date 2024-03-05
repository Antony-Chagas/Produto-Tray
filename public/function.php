<?php

function formatTwoDecimalPlaces($value){
    return number_format($value, 2, ',', '.');
}