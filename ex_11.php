<?php

    function formatarTexto($texto){

    $maiusculo = strtoupper ($texto);
    $minusculo = strtolower ($texto);
    $primeiraMaiuscula = ucfirst ($texto);
    $caracteres = strlen($texto);

     return array(
        "maiusculo" => $maiusculo,
        "minusculo" => $minusculo,
        "primeiraMaiuscula" => $primeiraMaiuscula,
        "caracteres" => $caracteres
    );


    }

$texto = "paRalelEpipeDo";

echo "Texto original: $texto<br>";

$resultado = formatarTexto($texto);

echo "Palavra toda em maiuscula: " . $resultado["maiusculo"] . "<br>";
echo "Palavra toda em minuscula: " . $resultado["minusculo"] . "<br>";
echo "Primeira maiuscula: " . $resultado["primeiraMaiuscula"] . "<br>";
echo "Quantidade de caracteres: " . $resultado["caracteres"] . "<br>";

?>