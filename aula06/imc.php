<?php
$peso = 76.5;
$altura = 1.74;

$imc = $peso / ($altura ** 2);
if($imc <18)
    echo "Abaixo do peso";
 else if ($imc >18 and $imc <25)
    echo "Peso Normal";
 else if ($imc >= 25 and $imc <=29)
    echo "Sobrepeso";
else if ($imc > 29)
    echo "Obesidade grau 1";
