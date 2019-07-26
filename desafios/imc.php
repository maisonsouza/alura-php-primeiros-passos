<?php
$peso = 75.4;
$altura = 1.74;

$imc = $peso / ($altura ** 2);
if($imc <18.5){
    echo "Abaixo do peso";
} else if ($imc >=18.5 and $imc <=24.9){
    echo "Peso Normal";
} else if ($imc >= 25.0 and $imc <=29.9){
    echo "Sobrepeso";
}else {
    echo "Obesidade grau 1";
}