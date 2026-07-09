<?php

function estatisticasNumericas($numeros){

    $maior = $numeros[0];
    $menor = $numeros[0];
    $soma = 0;
    $pares = 0;
    $impares= 0;

    foreach($numeros as $numero){

        if($numero > $maior){
            $maior = $numero;
        }

        if($numero < $menor){
            $menor = $numero;
        }

        $soma += $numero;

         if($numero % 2 == 0){
            $pares++;
        }else{
            $impares++;
        }

    }

    $media = $soma / count($numeros);

     sort($numeros);

    $quantidade = count($numeros);

    if($quantidade % 2 == 0){
        $mediana = ($numeros[$quantidade / 2 - 1] + $numeros[$quantidade / 2]) / 2;
    }else{
        $mediana = $numeros[floor($quantidade / 2)];
    }

    return [
        "Soma" => $soma,
        "Média" => $media,
        "Maior" => $maior,
        "Menor" => $menor,
        "Mediana" => $mediana,
        "Pares" => $pares,
        "Ímpares" => $impares
    ];
}

$numeros = [8, 6, 9, 7, 10];


$resultado = estatisticasNumericas($numeros);

  echo "Soma: " . $resultado["Soma"] . "<br>";
echo "Média: " . number_format($resultado["Média"], 2) . "<br>";
echo "Maior valor: " . $resultado["Maior"] . "<br>";
echo "Menor valor: " . $resultado["Menor"] . "<br>";
echo "Mediana: " . $resultado["Mediana"] . "<br>";
echo "Quantidade de pares: " . $resultado["Pares"] . "<br>";
echo "Quantidade de ímpares: " . $resultado["Ímpares"] . "<br>";



?>